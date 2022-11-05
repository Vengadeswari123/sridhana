<?php

namespace App\Exports\Reports\Beneficiary;

use App\Models\BoatDetails;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BoatDetailsCategory implements FromCollection,WithHeadings,WithMapping
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
        $b = BoatDetails::with(['typeofvessel','district','taluk','hamlet','village']);
        $did=$this->did;
        $tid=$this->tid;
        $vid=$this->vid;
        $name=$this->name;
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
            $b=$b->where('basic->vesselcategory', $name);
        }
        return $b->get();
    }
    public function map($data): array
    {
        return [
            $data->name ?? '',
            $data->basic['regno']??'',
            $data->vesselcategory->name??'',
            $data->typeofvessel->name??'',
            $data->basic['yearofmake']??'',
            $data->hullmaterial->name??'',
            $data->basic['cubicmeteres']??'',
            $data->basic['crewcapacity']??'',
            $data->basic['applicationdate']??'',
            $data->basic['licenseexpiry']??'',
            $data->district->name??'',
            $data->taluk->name??'',
            $data->village->name??'',
            $data->hamlet->name??'',
        ];
    }
    public function headings(): array
    {
        return [
            'Registration Name',
            'Registration Number',
            'Vessel Category',
            'Type of Vessel',
            'Year of Make',
            'Hull Material',
            'Cubic Meters',
            'Crew Capacity',
            'Registration Date',
            'License Expiry Date',
            'District',
            'Taluk',
            'Village',
            'Hamlet',
        ];
    }
}
