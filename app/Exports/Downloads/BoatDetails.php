<?php

namespace App\Exports\Downloads;

use App\Models\BoatDetails as ModelsBoatDetails;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class BoatDetails implements FromCollection,WithHeadings,WithMapping
{
    public $villageper,$dataper,$villagesel;

    function __construct($dataper,$villagesel,$villageper) {
        $this->dataper=$dataper;
        $this->villagesel=$villagesel;
        $this->villageper=$villageper;
    }
    public function collection()
    {
        $datax=ModelsBoatDetails::whereNotNull('meta->village')->orderBy('meta->village','asc');
        if(count($this->villageper)>0){
            $datax=$datax->whereIn('meta->village',$this->villageper);
        }
        if(count($this->villagesel)>0){
            $datax=$datax->whereIn('meta->village',$this->villagesel);
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
        if($this->dataper->regno){
            array_push($x,($data->basic['regno']??''));
        }
        if($this->dataper->callsign){
            array_push($x,($data->basic['callsign']??''));
        }
        if($this->dataper->vesselcategory){
            array_push($x,($data->vesselcategory?$data->vesselcategory->name:''));
        }
        if($this->dataper->typeofvessel){
            array_push($x,($data->typeofvessel?$data->typeofvessel->name:''));
        }
        if($this->dataper->society){
            array_push($x,($data->society?$data->society->name:''));
        }
        if($this->dataper->applicationdate){
            array_push($x,($data->basic['applicationdate']??''));
        }
        if($this->dataper->yard){
            array_push($x,($data->yard?$data->yard->name:''));
        }
        if($this->dataper->yardaddress){
            array_push($x,($data->basic['yardaddress']??''));
        }
        if($this->dataper->yearofmake){
            array_push($x,($data->basic['yearofmake']??''));
        }
        if($this->dataper->hullmaterial){
            array_push($x,($data->hullmaterial?$data->hullmaterial->name:''));
        }
        if($this->dataper->hulllength){
            array_push($x,($data->basic['hulllength']??''));
        }
        if($this->dataper->hullwidth){
            array_push($x,($data->basic['hullwidth']??''));
        }
        if($this->dataper->hulldepth){
            array_push($x,($data->basic['hulldepth']??''));
        }
        if($this->dataper->licenseexpiry){
            array_push($x,($data->basic['licenseexpiry']??''));
        }
        if($this->dataper->noofmasts){
            array_push($x,($data->basic['noofmasts']??''));
        }
        if($this->dataper->cubicmeteres){
            array_push($x,($data->basic['cubicmeteres']??''));
        }
        if($this->dataper->noofbulkheads){
            array_push($x,($data->basic['noofbulkheads']??''));
        }
        if($this->dataper->noofholds){
            array_push($x,($data->basic['noofholds']??''));
        }
        if($this->dataper->tonnagecapacity){
            array_push($x,($data->basic['tonnagecapacity']??''));
        }
        if($this->dataper->systemtonnagecapacity){
            array_push($x,($data->basic['systemtonnagecapacity']??''));
        }
        if($this->dataper->registeredtonnage){
            array_push($x,($data->basic['registeredtonnage']??''));
        }
        if($this->dataper->cubicmeter){
            array_push($x,($data->basic['cubicmeter']??''));
        }
        if($this->dataper->crewcapacity){
            array_push($x,($data->basic['crewcapacity']??''));
        }
        if($this->dataper->baseofoperation){
            array_push($x,($data->basic['baseofoperation']??''));
        }
        if($this->dataper->nameofpreviousowner){
            array_push($x,($data->basic['nameofpreviousowner']??''));
        }
        if($this->dataper->costofpurchase){
            array_push($x,($data->basic['costofpurchase']??''));
        }
        if($this->dataper->applicationrefno){
            array_push($x,($data->basic['applicationrefno']??''));
        }
        if($this->dataper->enginemanage){
            array_push($x,($data->engine->count()>0?$data->engine[0]->details['engine']:''));
            array_push($x,($data->engine->count()>0?$data->engine[0]->details['year']:''));
            array_push($x,($data->engine->count()>0?$data->engine[0]->details['engineno']:''));
            array_push($x,($data->engine->count()>0?$data->engine[0]->details['horsepwr']:''));

        }
        if($this->dataper->ownermanage){
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['ownername']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['leader']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['shareheld']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['categoryofownership']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['gender']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['age']:''));
            array_push($x,($data->owner->count()>0?$data->owner[0]->details['personalphno']:''));
        }
        if($this->dataper->insurancedet){

            array_push($x,($data->insurance->count()>0?$data->insurance[0]->details['insurance']:''));
            array_push($x,($data->insurance->count()>0?$data->insurance[0]->details['insuranceno']:''));
            array_push($x,($data->insurance->count()>0?$data->insurance[0]->details['periodfrom']:''));
            array_push($x,($data->insurance->count()>0?$data->insurance[0]->details['periodto']:''));
            array_push($x,($data->insurance->count()>0?$data->insurance[0]->details['insuredsum']:''));
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
        if($this->dataper->regno){
            array_push($x,'Registration Number');
        }
        if($this->dataper->callsign){
            array_push($x,'Call Sign');
        }
        if($this->dataper->vesselcategory){
            array_push($x,'Vessel Category');
        }
        if($this->dataper->typeofvessel){
            array_push($x,'Type of Vessel');
        }
        if($this->dataper->society){
            array_push($x,'Society');
        }
        if($this->dataper->applicationdate){
            array_push($x,'Application Date');
        }
        if($this->dataper->yard){
            array_push($x,'Yard');
        }
        if($this->dataper->yardaddress){
            array_push($x,'Yard Address');
        }
        if($this->dataper->yearofmake){
            array_push($x,'Year of Make');
        }
        if($this->dataper->hullmaterial){
            array_push($x,'Hull Material');
        }
        if($this->dataper->hulllength){
            array_push($x,'Hull Length');
        }
        if($this->dataper->hullwidth){
            array_push($x,'Hull Width');
        }
        if($this->dataper->hulldepth){
            array_push($x,'Hull Depth');
        }
        if($this->dataper->licenseexpiry){
            array_push($x,'License Expiry Date');
        }
        if($this->dataper->noofmasts){
            array_push($x,'No of Masts');
        }
        if($this->dataper->cubicmeteres){
            array_push($x,'Cubic Meters');
        }
        if($this->dataper->noofbulkheads){
            array_push($x,'No of Bulkhead');
        }
        if($this->dataper->noofholds){
            array_push($x,'No of Holds');
        }
        if($this->dataper->tonnagecapacity){
            array_push($x,'Tonnage Capacity');
        }
        if($this->dataper->systemtonnagecapacity){
            array_push($x,'System Tonnage Capcity');
        }
        if($this->dataper->registeredtonnage){
            array_push($x,'Registrated Tonnage');
        }
        if($this->dataper->cubicmeter){
            array_push($x,'Cubic Meter');
        }
        if($this->dataper->crewcapacity){
            array_push($x,'Crew Capacity');
        }
        if($this->dataper->baseofoperation){
            array_push($x,'Base of Operation');
        }
        if($this->dataper->nameofpreviousowner){
            array_push($x,'Name of Previous Owner');
        }
        if($this->dataper->costofpurchase){
            array_push($x,'Cost of Purchase');
        }
        if($this->dataper->applicationrefno){
            array_push($x,'Application Reference Number');
        }
        if($this->dataper->enginemanage){
            array_push($x,'Engine','Year','Engine Number','Horse Number');
        }
        if($this->dataper->ownermanage){
            array_push($x,'Owner Name','Leader','Shares held','Category of Ownership','Gender','Age','Phone Number');
        }
        if($this->dataper->insurancedet){
            array_push($x,'Insurance','Insurance Number','Period From','Period to','Insured Sum');
        }
        array_push($x,'District');
        array_push($x,'Taluk');
        array_push($x,'Village');
        array_push($x,'Hamlet');
        return $x;
    }
}
