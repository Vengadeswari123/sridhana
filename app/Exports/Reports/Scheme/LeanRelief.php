<?php

namespace App\Exports\Reports\Scheme    ;

use App\Models\BoatDetails;
use App\Models\Scheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LeanRelief implements FromCollection,WithHeadings,WithMapping
{

    protected $fromdate,$todate,$financial,$did,$tid,$vid,$allowid,$name;

    function __construct($fromdate=null,$todate=null,$financial=null,$did=null,$tid=null,$vid=null,$name=null,$allowid=null) {
        $this->fromdate=$fromdate;
        $this->todate=$todate;
        $this->financial=$financial;
        $this->did=$did;
        $this->tid=$tid;
        $this->vid=$vid;
        $this->name=$name;
        $this->allowid=$allowid;
    }
    public function collection()
    {
        $b = Scheme::getdata('leanrelief');
        $fromdate=$this->fromdate;
        $todate=$this->todate;
        $financial=$this->financial;
        $did=$this->did;
        $tid=$this->tid;
        $vid=$this->vid;
        $name=$this->name;
        $b=$b->where(function ($query) use ($fromdate,$todate) {
            $query->whereDate('created_at', '>=',$fromdate)->whereDate('created_at', '<=',$todate);
        });
        if($financial){
            $b=$b->where('details->batch', $financial);
        }
        if($did){
            $b=$b->where('meta->district', $did)->whereHas('district');
        }
        if($tid){
            $b=$b->where('meta->taluk', $tid)->whereHas('taluk');
        }
        if($vid){
            $b=$b->where('meta->village', $vid)->whereHas('village');
        }
        if($name){
            $b=$b->where('details->status', $name);
        }
        return $b->get();
    }
    public function map($data): array
    {
        return [
            $data->details['name']??'',
            $data->details['aadharnumber']??'',
            $data->details['address']??'',
            $data->details['phoneno']??'',

            $data->details['contactaddresss']??'',
            $data->details['electoralid']??'',
            $data->details['rationcard']??'',
            $data->details['copeativesociety']??'',
            $data->details['copeativesocietyid']??'',
            $data->details['assitancerequired']??'',
            $data->details['assitancerequireddetail']??'',
            $data->details['bankinfo']??'',
            $data->details['govtemployee']??'',
            $data->details['govtemployeedetails']??'',
            $data->details['anyotherinfo']??'',



            $data->details['totalcost']??'',
            $data->details['statustext']??'',
            date('Y-m-d',strtotime($data->created_at)),
            $data->district->name??'',
            $data->taluk->name??'',
            $data->village->name??'',
            $data->hamlet->name??'',
        ];
    }
    public function headings(): array
    {
        return [
            'Applicant Name',
            'Applicant Aadhar number',
            'Applicant Address',
            'Applicant Phone Number',

            'Contact Addresss',
            'Electoral Id',
            'Ration Card',
            'Copeative Society',
            'Copeative Society Id',
            'Assistance Required',
            'Assitance Required Detail',
            'Bank Info',
            'Govt Employee',
            'Govt Employee Details',
            'Any Other Info',


            'Status',
            'Applied On',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
        ];
    }
}
