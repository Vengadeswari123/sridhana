<?php

namespace App\Exports\Downloads;

use App\Models\Beneficiary as ModelsBeneficiary;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Beneficiary implements FromCollection,WithHeadings,WithMapping
{
    public $villageper,$dataper,$villagesel;

    function __construct($dataper,$villagesel,$villageper) {
        $this->dataper=$dataper;
        $this->villagesel=$villagesel;
        $this->villageper=$villageper;
    }
    public function collection()
    {
        $datax=ModelsBeneficiary::whereNotNull('personal->village')->orderBy('personal->village','asc');
        if(count($this->villageper)>0){
            $datax=$datax->whereIn('personal->village',$this->villageper);
        }
        if(count($this->villagesel)>0){
            $datax=$datax->whereIn('personal->village',$this->villagesel);
        }

        $datax=$datax->get();
        return $datax;
    }
    public function map($data): array
    {
        $x=[];
        if($this->dataper->name){
            array_push($x,($data->name??''));
        }
        if($this->dataper->aadharnumber){
            array_push($x,($data->personal['aadharnumber']??''));
        }
        if($this->dataper->maskedaadharnumber){
            array_push($x,($data->personal['maskedaadharnumber']??''));
        }
        if($this->dataper->dob){
            array_push($x,($data->personal['dob']??''));
        }
        if($this->dataper->age){
            array_push($x,($data->personal['age']??''));
        }
        if($this->dataper->typeoffishermen){
            array_push($x,($data->personal['typeoffishermen']??''));
        }
        if($this->dataper->gender){
            array_push($x,($data->personal['gender']??''));
        }
        if($this->dataper->fathername){
            array_push($x,($data->personal['fathername']??''));
        }
        if($this->dataper->mothername){
            array_push($x,($data->personal['mothername']??''));
        }
        if($this->dataper->maritalstatus){
            array_push($x,($data->personal['maritalstatus']??''));
        }
        if($this->dataper->spousename){
            array_push($x,($data->personal['spousename']??''));
        }
        if($this->dataper->educationalqualification){
            array_push($x,($data->personal['educationalqualification']??''));
        }
        if($this->dataper->mobilenumber){
            array_push($x,($data->personal['mobilenumber']??''));
        }
        if($this->dataper->emailid){
            array_push($x,($data->personal['emailid']??''));
        }
        if($this->dataper->religion){
            array_push($x,($data->personal['religion']??''));
        }
        if($this->dataper->castecategory){
            array_push($x,($data->personal['castecategory']??''));
        }
        if($this->dataper->subcaste){
            array_push($x,($data->personal['subcaste']??''));
        }
        if($this->dataper->physicallychallenged){
            array_push($x,($data->personal['physicallychallenged']??''));
        }
        if($this->dataper->rationcard){
            array_push($x,($data->personal['rationcard']??''));
        }
        if($this->dataper->rationcardtype){
            array_push($x,($data->personal['rationcardtype']??''));
        }
        if($this->dataper->pressentaddress){
            array_push($x,($data->personal['pressentaddress']??''));
        }
        if($this->dataper->permanentaddress){
            array_push($x,($data->personal['permanentaddress']??''));
        }
        if($this->dataper->assemblyconstituency){
            array_push($x,($data->personal['assemblyconstituency']??''));
        }
        if($this->dataper->bank){
        array_push($x,($data->bank?$data->bank->name:''));
        }
        if($this->dataper->bankbranch){
        array_push($x,($data->branch?$data->branch->name:''));
        }
        if($this->dataper->ifsc){
            array_push($x,($data->personal['ifsc']??''));
        }
        if($this->dataper->micr){
            array_push($x,($data->personal['micr']??''));
        }
        if($this->dataper->acno){
            array_push($x,($data->personal['acno']??''));
        }
        if($this->dataper->actype){
            array_push($x,($data->personal['actype']??''));
        }
        array_push($x,($data->district?$data->district->name:''));
        array_push($x,($data->taluk?$data->taluk->name:''));
        array_push($x,($data->village?$data->village->name:''));
        array_push($x,($data->hamlet?$data->hamlet->name:''));
        return $x;
    }
    public function headings(): array
    {
        $x=[];
        if($this->dataper->name){
            array_push($x,'Name');
        }
        if($this->dataper->aadharnumber){
            array_push($x,'Aadhar Number');
        }
        if($this->dataper->maskedaadharnumber){
            array_push($x,'Masked Aadhar Number');
        }
        if($this->dataper->dob){
            array_push($x,'DOB');
        }
        if($this->dataper->age){
            array_push($x,'Age');
        }
        if($this->dataper->typeoffishermen){
            array_push($x,'Type of Beneficiary');
        }
        if($this->dataper->gender){
            array_push($x,'Gender');
        }
        if($this->dataper->fathername){
            array_push($x,'Father Name');
        }
        if($this->dataper->mothername){
            array_push($x,'Mother Name');
        }
        if($this->dataper->maritalstatus){
            array_push($x,'Marital Status');
        }
        if($this->dataper->spousename){
            array_push($x,'Spouse Name');
        }
        if($this->dataper->educationalqualification){
            array_push($x,'Education Qualification');
        }
        if($this->dataper->mobilenumber){
            array_push($x,'Mobile Number');
        }
        if($this->dataper->emailid){
            array_push($x,'Email');
        }
        if($this->dataper->religion){
            array_push($x,'Religion');
        }
        if($this->dataper->castecategory){
            array_push($x,'Caste Category');
        }
        if($this->dataper->subcaste){
            array_push($x,'Sub Caste');
        }
        if($this->dataper->physicallychallenged){
            array_push($x,'Physically Challenged');
        }
        if($this->dataper->rationcard){
            array_push($x,'Ration Card');
        }
        if($this->dataper->rationcardtype){
            array_push($x,'Ration Card Type');
        }
        if($this->dataper->pressentaddress){
            array_push($x,'Present Address');
        }
        if($this->dataper->permanentaddress){
            array_push($x,'Permanent Address');
        }
        if($this->dataper->assemblyconstituency){
            array_push($x,'Assembly Consituency');
        }
        if($this->dataper->bank){
            array_push($x,'Bank');
        }
        if($this->dataper->bankbranch){
            array_push($x,'Branch');
        }
        if($this->dataper->ifsc){
            array_push($x,'IFSC');
        }
        if($this->dataper->micr){
            array_push($x,'MICR');
        }
        if($this->dataper->acno){
            array_push($x,'Account Number');
        }
        if($this->dataper->actype){
            array_push($x,'Account Type');
        }
        array_push($x,'District');
        array_push($x,'Taluk');
        array_push($x,'Village');
        array_push($x,'Hamlet');
        return $x;
    }
}
