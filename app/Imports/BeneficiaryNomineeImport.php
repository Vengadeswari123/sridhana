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

class BeneficiaryNomineeImport implements ToModel, WithHeadingRow, SkipsEmptyRows
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
            $data->type = 'nominee';
            $personal = [];

            $personal['membername'] = $row['Name'] ?? null;
            $personal['gender'] = $row['Gender'] ?? null;
            $personal['mobilenumber'] = $row['Mobile Number'] ?? null;
            $personal['percentage'] = $row['Percentage'] ?? null;

            $aadhar = $row['Member Aadhar Number'] ?? $personal['aadharnumber'] ?? null;
            $maskedaadhar = substr($aadhar, -2);
            $maskedaadhar = str_pad($maskedaadhar, 12, 'X', STR_PAD_LEFT);
            $personal['aadharnumber'] = $aadhar ?? null;
            $personal['maskedaadharnumber'] = $maskedaadhar ?? null;


            $data->personal = $personal;
            $data->save();
        }
        return $data??null;
    }
}
