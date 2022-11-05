<?php

namespace App\Exports;

use App\Models\Beneficiary;
use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BeneficiaryExport implements FromCollection,WithHeadings,WithMapping
{

    public function collection()
    {
        return Beneficiary::get();
    }
    public function map($data): array
    {
        return [
            $data->id ?? '',
            $data->name ?? '',
            $data->personal['aadharnumber']??'',
            $data->personal['maskedaadharnumber']??'',
            $data->personal['dob']??'',
            $data->personal['age']??'',
            $data->personal['typeoffishermen']??'',
            $data->personal['gender']??'',
            $data->personal['fathername']??'',
            $data->personal['mothername']??'',
            $data->personal['maritalstatus']??'',
            $data->personal['spousename']??'',
            $data->educationqualification->name??null,
            $data->personal['mobilenumber']??'',
            $data->personal['emailid']??'',
            $data->religion->name??'',
            $data->castecategory->name??'',
            $data->subcaste->name??'',
            $data->personal['physicallychallenged']==1?'Y':'N'??'',
            $data->personal['rationcard']??'',
            $data->personal['rationcardtype']??'',
            $data->personal['electoralidcard']??'',
            $data->district->name??'',
            $data->taluk->name??'',
            $data->village->name??'',
            $data->hamlet->name??'',
            $data->personal['pressentaddress']??'',
            $data->personal['permanentaddress']??'',
            '',//assembly constitueny
            $data->bank->name??'',
            $data->bankbranch->name??'',
            $data->bankbranch->details['ifsccode']??'',
            $data->bankbranch->details['micrcode']??'',
            $data->personal['acno']??'',
            $data->personal['actype']??'',
            $data->societydistrict->name??'',
            $data->societydetails->name??'',
            $data->society['memberno']??'',
        ];
    }
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Aadhaar Number',
            'Masked Aadhaar Number',
            'DOB',
            'Age',
            'Type Of Fishermen',
            'Gender',
            'Father Name',
            'Mother Name',
            'Marital Status',
            'Spouse Name',
            'Educational Qualification',
            'Mobile Number',
            'Email Id',
            'Religion',
            'Caste Category',
            'Caste',
            'Physically Challenged',
            'Ration Card number',
            'Ration Card Type',
            'Election Card ID',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
            'Present Address',
            'Permanent Address',
            'Assembly Constituency',
            'Bank',
            'Branch',
            'IFSC Code',
            'MICR Code',
            'Account Number',
            'Account Type',
            'Society District',
            'Society',
            'Society Member No.',
        ];
    }
}
