<?php

namespace App\Imports;

use App\Models\Beneficiary;
use App\Models\BeneficiaryExtra;
use App\Models\Master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

HeadingRowFormatter::default('none');

class BeneficiaryFamilyImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function transformDate($value, $format = 'Y-m-d')
        {
            try {
                return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value))->format('Y-m-d');
            } catch (\ErrorException $e) {
                return \Carbon\Carbon::createFromFormat($format, $value);
            }
        }
    public function model(array $row)
    {
        $benef = Beneficiary::where('personal->aadharnumber', $row['Applicant Aadhaar Number'])->first();
        if ($benef) {
            $data = new BeneficiaryExtra();
            $data->benef_id = $benef->id;
            $data->type = 'familymember';
            $personal = [];
            $personal['district'] = $benef ? $benef->personal['taluk'] : null;
            $personal['taluk'] = $benef ? $benef->personal['taluk'] : null;
            $personal['village'] = $benef ? $benef->personal['village'] : null;
            $personal['hamlet'] = $benef ? $benef->personal['hamlet'] : null;

            $relation = Master::where('type', 6)->where('name', $row['Relation'])->first();
            $qualification = Master::where('type', 5)->where('name', $row['Qualification'])->first();

            $personal['gender'] = $row['Gender'] ?? null;
            $personal['membername'] = $row['Name'] ?? null;
            $personal['relationship'] = $relation?$relation->id: null;
            $personal['qualification'] = $qualification?$qualification->id : null;
            $personal['maritalstatus'] = $row['Marital Status'] ?? null;
            $personal['mobilenumber'] = $row['Mobile Number'] ?? null;
            $personal['professional'] = $row['Profession'] ?? null;
            $personal['dob'] = $row['DOB']?$this->transformDate($row['DOB']): null;
            if($personal['dob']){
                $endtime = date_create(date('Y-m-d', strtotime($row['DOB']??$personal['dob'])));
                $current = date_create(Date('Y-m-d'));
                $x = date_diff($endtime, $current);
                $personal['age'] = $x->y  ?? null;
            }
            else{
                $personal['age'] = 0;
            }
            if ($row['Member Aadhar Number']) {
                $aadhar = $row['Member Aadhar Number'] ?? $personal['aadharnumber'] ?? null;
                $maskedaadhar = substr($aadhar, -2);
                $maskedaadhar = str_pad($maskedaadhar, 12, 'X', STR_PAD_LEFT);
                $personal['aadharnumber'] = $aadhar ?? null;
                $personal['maskedaadharnumber'] = $maskedaadhar ?? null;
            }


            $data->personal = $personal;
            $data->save();
        }
        return $data??null;
    }
}
