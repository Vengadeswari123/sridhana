<?php

namespace App\Exports\Downloads\Scheme\State;

use App\Models\Beneficiary as ModelsBeneficiary;
use App\Models\Scheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LANS implements FromCollection,WithHeadings,WithMapping
{
    public $villageper,$dataper,$villagesel,$periodfrom,$periodto,$batch;

    function __construct($dataper,$villagesel,$villageper,$periodfrom,$periodto,$batch) {
        $this->dataper=$dataper;
        $this->villagesel=$villagesel;
        $this->villageper=$villageper;
        $this->periodfrom=$periodfrom;
        $this->periodto=$periodto;
        $this->batch=$batch;
    }
    public function collection()
    {
        $datax=Scheme::getdata('lans')->whereNotNull('meta->village')->orderBy('meta->village','asc');
        if(count($this->villageper)>0){
            $datax=$datax->whereIn('meta->village',$this->villageper);
        }
        if(count($this->villagesel)>0){
            $datax=$datax->whereIn('meta->village',$this->villagesel);
        }
        if($this->periodfrom){
            $datax=$datax->whereDate('created_at','>=',$this->periodfrom);
        }
        if($this->periodto){
            $datax=$datax->whereDate('created_at','<=',$this->periodto);
        }
        if($this->batch){
            $datax=$datax->where('details->batch',$this->batch);
        }

        $datax=$datax->get();
        return $datax;
    }
    public function map($data): array
    {
        $x=[];
        if($this->dataper->benefname){
            array_push($x,($data->details['name']??''));
        }
        if($this->dataper->fathername){
            array_push($x,($data->details['fathername']??''));
        }
        array_push($x,($data->details['aadharnumber']??''));
        if($this->dataper->dob){
            array_push($x,($data->beneficiary->personal['dob']??''));
        }
        if($this->dataper->address){
            array_push($x,($data->details['address']??''));
        }
        if($this->dataper->contactaddresss){
            array_push($x,($data->details['contactaddresss']??''));
        }
        if($this->dataper->phoneno){
            array_push($x,($data->details['phoneno']??''));
        }
        if($this->dataper->amount){
            array_push($x,($data->details['amount']??''));
        }
        if($this->dataper->assitancerequireddetail){
            array_push($x,($data->details['assitancerequireddetail']??''));
        }
        if($this->dataper->bankdetails){
            array_push($x,($data->details['ifsc']??''));
            array_push($x,($data->details['bank']??''));
            array_push($x,($data->details['branch']??''));
            array_push($x,($data->details['acno']??''));
        }
        array_push($x,($data->details['statustext']??''));
        array_push($x,($data->batch?$data->batch->name:''));
        array_push($x,($data->district?$data->district->name:''));
        array_push($x,($data->taluk?$data->taluk->name:''));
        array_push($x,($data->village?$data->village->name:''));
        array_push($x,($data->hamlet?$data->hamlet->name:''));
        array_push($x,date('d-m-Y',strtotime($data->created_at)));
        return $x;
    }
    public function headings(): array
    {
        $x=[];
        if($this->dataper->benefname){
            array_push($x,'Name');
        }
        if($this->dataper->fathername){
            array_push($x,'Father Name');
        }
        array_push($x,'Aadhar Number');
        if($this->dataper->dob){
            array_push($x,'DOB');
        }
        if($this->dataper->address){
            array_push($x,'Address');
        }
        if($this->dataper->contactaddresss){
            array_push($x,'Permanent Address');
        }
        if($this->dataper->phoneno){
            array_push($x,'Phone Number');
        }
        if($this->dataper->amount){
            array_push($x,'Amount');
        }
        if($this->dataper->assitancerequireddetail){
            array_push($x,'Assistance Required');
        }
        if($this->dataper->bankdetails){
            array_push($x,'IFSC','Bank Name','Branch Name','Account Number');
        }
        array_push($x,'Status');
        array_push($x,'Financial Year');
        array_push($x,'District');
        array_push($x,'Taluk');
        array_push($x,'Village');
        array_push($x,'Hamlet');
        array_push($x,'Applied At');
        return $x;
    }
}
