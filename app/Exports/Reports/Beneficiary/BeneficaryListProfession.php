<?php

namespace App\Exports\Reports\Beneficiary;

use App\Models\Beneficiary;
use App\Models\BeneficiaryExtra;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BeneficaryListProfession implements FromCollection,WithHeadings,WithMapping
{

    protected $did,$tid,$vid,$allowid,$name;

    function __construct($did=null,$tid=null,$vid=null,$name=null,$allowid=null) {
        $this->did=$did;
        $this->tid=$tid;
        $this->vid=$vid;
        $this->name=$name;
        $this->allowid=$allowid;
    }
    public function collection()
    {
        $b = Beneficiary::with(['familymembersreport','district','taluk','hamlet','village','educationqualification']);
        $did=$this->did;
        $tid=$this->tid;
        $vid=$this->vid;
        $name=$this->name;
        if($did){
            $b=$b->where('personal->district', $did)->whereHas('district');
        }
        if($tid){
            $b=$b->where('personal->taluk', $tid)->whereHas('taluk');
        }
        if($vid){
            $b=$b->where('personal->village', $vid)->whereHas('village');
        }
        if($name){
            $b=$b->with('familymembersreport', function ($q) use ($name) {
                return $q->where('personal->professional', $name);
            })->where('personal->typeoffishermen', $name);
        }
        return $b->get();
    }
    public function map($data): array
    {
        $xdata=[];
        $x=[
            $data->name ?? '',
            $data->personal['age']??'',
            $data->personal['dob']??'',
            $data->personal['gender']??'',
            $data->personal['aadharnumber']??'',
            $data->personal['email']??'',
            $data->personal['mobilenumber']??'',
            $data->personal['typeoffishermen']??'',
            $data->educationqualification->name??'',
            $data->personal['maritalstatus']??'',
            $data->district->name??'',
            $data->taluk->name??'',
            $data->village->name??'',
            $data->hamlet->name??'',
        ];
        array_push($xdata,$x);
        $x=[];
        $familymember=$data->familymembersreport;
        for($i=0;$i<$familymember->count();$i++){
            $x=[
                $familymember[$i]->personal['membername'] ?? '',
                $familymember[$i]->personal['age']??'',
                $familymember[$i]->personal['dob']??'',
                $familymember[$i]->personal['gender']??'',
                $familymember[$i]->personal['aadharnumber']??'',
                $familymember[$i]->personal['email']??'',
                $familymember[$i]->personal['mobilenumber']??'',
                $familymember[$i]->personal['professional']??'',
                $familymember[$i]->qualification->name??'',
                $familymember[$i]->personal['maritalstatus']??'',
                $data->district->name??'',
                $data->taluk->name??'',
                $data->village->name??'',
                $data->hamlet->name??'',
            ];
            array_push($xdata,$x);
        }
        return $xdata;
    }
    public function headings(): array
    {
        return [
            'Name',
            'Age',
            'Dob as of '.date('Y-m-d'),
            'Gender',
            'Aadhaar Number',
            'Email',
            'Phone Number',
            'Profession',
            'Qualification',
            'Marital Status',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
        ];
    }
}
