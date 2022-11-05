<?php

namespace App\Exports\Reports\Scheme    ;

use App\Models\BoatDetails;
use App\Models\Scheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MCS implements FromCollection,WithHeadings,WithMapping
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
        $b = Scheme::getdata('pmmsy_mcs');
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
    public function headings(): array
    {
        return [
            'Applicant Name',
            'Applicant Aadhar number',
            'Applicant Address',
            'Applicant Phone Number',

            'fathername',
            'Contact Addresss',
            'Category of applicant',
            'Assitance Required',
            'Assitance Required Detail',
            'Registration Number Real Craft',
            'Fishing License',
            'Biometric Id',
            'Communication Details',
            'Govt Assistance',
            'Govt Assistance Details',
            'Total Cost',
            'Source of Finance',
            'Source of Finance Key',
            'Total Source',
            'Bank Tieup',
            'Any Other Info',

           'Status',
            'Applied On',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
        ];
    }
    public function map($data): array
    {
        return [
            $data->details['name']??'',
            $data->details['aadharnumber']??'',
            $data->details['address']??'',
            $data->details['phoneno']??'',

            $data->details['fathername']??'',
            $data->details['contactaddresss']??'',
            $data->details['categoryofapplicant']??'',
            $data->details['assitancerequired']??'',
            $data->details['assitancerequireddetail']??'',
            $data->details['bankinfo']??'',
            $data->details['registrationnumberrealcraft']??'',
            $data->details['fishinglicense']??'',
            $data->details['biometricid']??'',
            $data->details['communicationdetails']??'',
            $data->details['govtassistance']??'',
            $data->details['govtassistancedetails']??'',
            $data->details['totalcost']??'',
            $data->details['sourceoffinance']??'',
            $data->details['sourceoffinancekey']??'',
            $data->details['totalsource']??'',
            $data->details['banktieup']??'',
            $data->details['anyotherinfo']??'',



            $data->details['statustext']??'',
            date('Y-m-d',strtotime($data->created_at)),
            $data->district->name??'',
            $data->taluk->name??'',
            $data->village->name??'',
            $data->hamlet->name??'',
        ];
    }
}
