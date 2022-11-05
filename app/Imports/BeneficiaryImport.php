<?php

namespace App\Imports;

use App\Models\Beneficiary;
use App\Models\Master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

HeadingRowFormatter::default('none');

class BeneficiaryImport implements ToModel, WithHeadingRow, SkipsEmptyRows
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $data = Beneficiary::where('personal->aadharnumber', $row['Aadhaar Number'])->first();
        if (!$data) {
            $data = new Beneficiary();
        }
            $bank = '';
            $branch = '';
            $taluk = '';
            $village = '';
            $hamlet = '';
            $district = '';
            $societydistrict = '';
            $societyid = '';
            $educational = '';
            $religion = '';
            $castecategory = '';
            $caste = '';

            if ($row['IFSC Code']) {
                $branch = Master::where('type', 9)->with('bank')->where('details->ifsccode', $row['IFSC Code'])->first();
            }
            if ($row['Hamlet']) {
                $hamlet = Master::where('type', 13)->where('name', $row['Hamlet'])->first();
                if ($hamlet)
                    $hamlet = $hamlet->id;
            }
            if ($row['Village']) {
                $village = Master::where('type', 12)->where('name', $row['Village'])->first();
                if ($village)
                    $village = $village->id;
            }
            if ($row['Taluk']) {
                $taluk = Master::where('type', 11)->where('name', $row['Taluk'])->first();
                if ($taluk)
                    $taluk = $taluk->id;
            }
            if ($row['District']) {
                $district = Master::where('type', 0)->where('name', $row['District'])->first();
                if ($district)
                    $district = $district->id;
            }
            if ($row['Education Qualification']) {
                $educational = Master::where('type', 5)->where('name', $row['Education Qualification'])->first();
                if ($educational)
                    $educational = $educational->id;
            }
            if ($row['Religion']) {
                $religion = Master::where('type', 7)->where('name', $row['Religion'])->first();
                if ($religion)
                    $religion = $religion->id;
            }
            if ($row['Caste Category']) {
                $castecategory = Master::where('type', 3)->where('name', $row['Caste Category'])->first();
                if ($castecategory)
                    $castecategory = $castecategory->id;
            }
            if ($row['Caste']) {
                $caste = Master::where('type', 11)->where('name', $row['Caste'])->first();
                if ($caste)
                    $caste = $caste->id;
            }
            if ($row['Society District']) {
                $societydistrict = Master::where('type', 0)->where('name', $row['Society District'])->first();
            }
            if ($row['Society Name']) {
                $societyid = Master::where('type', 15)->where('name', $row['Society Name']);
                $societyid = $societyid->first();
            }





            $personal = $data->personal??[];
            $personal['aadharnumber'] =$personal['aadharnumber']?? null;
            $personal['maskedaadharnumber'] =$personal['maskedaadharnumber']??null;
            $personal['dob'] =$personal['dob']??null;
            $personal['age'] =$personal['age']??null;
            $personal['typeoffishermen'] =$personal['typeoffishermen']??null;
            $personal['gender'] =$personal['gender']??null;

            $personal['aadharnumber']=$row['Aadhaar Number']??$personal['aadharnumber']??null;
            $aadhar = $personal['aadharnumber'];
            $maskedaadhar = '';
            $maskedaadhar = substr($aadhar, -2);
            $maskedaadhar = str_pad($maskedaadhar, 12, 'X', STR_PAD_LEFT);
            $personal['maskedaadharnumber'] = $maskedaadhar ?? null;

            $personal['dob'] = date('Y-m-d', strtotime($row['DOB'])) ?? null;
            $endtime = date_create(date('Y-m-d', strtotime($row['DOB']??$personal['dob'])));
            $current = date_create(Date('Y-m-d'));
            $x = date_diff($endtime, $current);
            $personal['age'] = $x->y  ?? null;
            $personal['typeoffishermen'] = $row['Type of Fishermen'] ??$personal['typeoffishermen']?? null;
            $personal['gender'] = $row['Gender'] ??$personal['gender']?? null;

            $personal['regname'] = $row['Name in Regional Language'] ?? $personal['regname']??null;
            $personal['fathername'] = $row['Father Name'] ?? $personal['fathername']??null;
            $personal['mothername'] = $row['Mother Name'] ?? $personal['mothername']??null;
            $personal['maritalstatus'] = $row['Marital Status'] ?? $personal['maritalstatus']??null;
            $personal['spousename'] = $row['Spouse Name'] ?? $personal['spousename']??null;
            $personal['educationalqualification'] = $educational ?? $personal['educationalqualification']??null;
            $personal['mobilenumber'] = $row['Mobile Number'] ?? $personal['mobilenumber']??null;
            $personal['emailid'] = $row['Email ID'] ?? $personal['emailid']??null;
            $personal['religion'] = $religion ?? $personal['religion']??null;
            $personal['castecategory'] = $castecategory ?? $personal['castecategory']??null;
            $personal['subcaste'] = $caste ?? $personal['subcaste']??null;
            $personal['physicallychallenged'] = $row['Physically Challenged(Y/N)'] == 'Y' ? 1 : $personal['physicallychallenged']??0;
            $personal['rationcard'] = $row['Ration Card'] ?? $personal['rationcard']??null;
            $personal['rationcardtype'] = $row['Ration Card Type'] ?? $personal['rationcardtype']??null;
            $personal['electoralidcard'] = $row['Electoral Card ID'] ?? $personal['electoralidcard']??null;
            $personal['district'] = $district ?? $personal['district']??null;
            $personal['taluk'] = $taluk ?? $personal['taluk']??null;
            $personal['village'] = $village ?? $personal['village']??null;
            $personal['hamlet'] = $hamlet ?? $personal['hamlet']??null;
            $personal['pressentaddress'] = ($row['Door No'] || '') . ' ' . ($row['Present Address'] || '') ?? $personal['pressentaddress']??null;
            $personal['presenteqperm'] = $row['presenteqperm'] ?? $personal['presenteqperm']??null;
            $personal['permanentaddress'] = $row['Permanent Address'] ?? $personal['permanentaddress']??null;
            $personal['assemblyconstituency'] = $row['Assembly Constituency'] ?? $personal['assemblyconstituency']??null;
            $personal['bank'] = $branch ? ($branch->bank ? $branch->bank->id : null) : $personal['bank']??null;
            $personal['bankbranch'] = $branch ? $branch->id : $personal['bankbranch']??null;
            $personal['ifsc'] = $branch ? $branch->details['ifsccode'] : $row['IFSC Code'] ?? $personal['ifsc']??null;
            $personal['micr'] = $branch ? $branch->details['micrcode'] : $row['MICR Code'] ?? $personal['micr']??null;
            $personal['acno'] = $row['Account Number'] ?? $personal['acno']??null;
            $personal['actype'] = $row['Account Type'] ?? $personal['actype']??null;
            $data->personal = $personal;


            $society = $data->society??[];
            $society['district'] = $societydistrict ? $societydistrict->id : ($society['district']??null);
            $society['society'] = $societyid ? $societyid->id : ($society['society']??null);
            $society['memberno'] = $row['Member Number'] ?? ($society['memberno']??null);
            $data->society = $society;
            $data->name = $row['Name'] ??$data->name?? '';

            $data->professional = $data->professional??[];

            $xdocu = $data->documents?? [];
            $xdocu['permanentaddress'] =$xdocu['permanentaddress']?? null;
            $xdocu['birthcertificate'] =$xdocu['birthcertificate']?? null;
            $xdocu['domicilecertificate'] =$xdocu['domicilecertificate']?? null;
            $xdocu['drivinglicense'] =$xdocu['drivinglicense']?? null;
            $xdocu['fishingexpcertificate'] =$xdocu['fishingexpcertificate']?? null;
            $xdocu['rationcard'] =$xdocu['rationcard']?? null;
            $xdocu['community'] =$xdocu['community']?? null;
            $xdocu['residence'] =$xdocu['residence']?? null;
            $xdocu['income'] =$xdocu['income']?? null;
            $xdocu['photo'] =$xdocu['photo']?? null;
            $xdocu['fsccard'] =$xdocu['fsccard']?? null;
            $xdocu['passport'] =$xdocu['passport']?? null;
            $xdocu['tc'] =$xdocu['tc']?? null;
            $xdocu['aadhaarcard'] =$xdocu['aadhaarcard']?? null;
            $xdocu['electoralid'] =$xdocu['electoralid']?? null;
            $xdocu['bankpassbook'] =$xdocu['bankpassbook']?? null;
            $data->save();
        return $data;
    }
}
