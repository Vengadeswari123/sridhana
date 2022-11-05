<?php

namespace App\Exports\Reports\Scheme    ;

use App\Models\BoatDetails;
use App\Models\Scheme;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class OAP implements FromCollection,WithHeadings,WithMapping
{

    protected $fromdate,$todate,$financial,$month,$did,$tid,$vid,$allowid,$name;

    function __construct($fromdate=null,$todate=null,$financial=null,$month=null,$tid=null,$vid=null,$name=null,$allowid=null) {
        $this->fromdate=$fromdate;
        $this->todate=$todate;
        $this->financial=$financial;
        $this->month=$month;
        $this->did=$did;
        $this->tid=$tid;
        $this->vid=$vid;
        $this->name=$name;
        $this->allowid=$allowid;
    }
    public function collection()
    {
        $b = Scheme::getdata('oap');
        $fromdate=$this->fromdate;
        $todate=$this->todate;
        $financial=$this->financial;
        $month=$this->month;
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
        if($month){
            $b=$b->where('details->month', $month);
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


            $data->details['dob']??'',
            $data->details['ageap']??'',
            $data->details['gender']??'',
            $data->details['contactaddresss']??'',
            $data->details['daterecived']??'',
            $data->details['widow']==0?'yes':'no',
            $data->details['totalincome']??'',
            $data->details['voucherno']??'',
            $data->details['fcsno']??'',
            $data->details['bankinfo']??'',
            $data->details['anyotherinfo']??'',
            $data->details['familyname']??'',
            $data->details['relation']??'',
            $data->details['age']??'',
            $data->details['profession']??'',
            $data->details['income']??'',
            $data->details['marriedsingle']??'',
            $data->details['livingwith']??'',
            $data->details['addressguardian']??'',
            $data->details['deathdate']??'',

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

             'DOB',
             'Age ap',
             'Gender',
             'Contact Addresss',
             'Date Recived',
             'Widow',
             'Total Income',
             'Voucher No',
             'FCS No',
             'Bank Info',
             'Any Other Info',
             'Family Name',
             'Relation',
             'Age',
             'Profession',
             'Income',
             'Married Single',
             'Living with',
             'Address Guardian',
             'Death Date',
            'Status',
            'Applied On',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
        ];
    }
}
