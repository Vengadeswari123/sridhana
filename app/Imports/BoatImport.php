<?php

namespace App\Imports;

use App\Models\Beneficiary;
use App\Models\Boat\BoatExtra;
use App\Models\BoatDetails;
use App\Models\Master;
use DateTime;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
HeadingRowFormatter::default('none');

class BoatImport implements ToModel, WithHeadingRow,SkipsEmptyRows
{
    public function model(array $row)
    {
        $data = BoatDetails::where('basic->regno', $row['Boat Registration Number'])->first();
        if (!$data) {
            $hullmaterial='';
            $district='';
            $taluk='';
            $village='';
            $hamlet='';
            $vesselcategory='';
            $typeofvessel='';
            $placeofregistry='';
            $bop='';
            if($row['Hull Material']){
                $hullmaterial=Master::where('type',19)->where('name',$row['Hull Material'])->first();
            }
            if($row['District']){
                $district=Master::where('type',0)->where('name',$row['District'])->first();
            }
            if($row['Taluk']){
                $taluk=Master::where('type',11)->where('name',$row['Taluk'])->first();
            }
            if($row['Village']){
                $village=Master::where('type',12)->where('name',$row['Village'])->first();
            }
            if($row['Hamlet']){
                $hamlet=Master::where('type',13)->where('name',$row['Hamlet'])->first();
            }
            if($row['Vessel Category']){
                $vesselcategory=Master::where('type',17)->where('name',$row['Vessel Category'])->first();
            }
            if($row['Type of Vessel']){
                $typeofvessel=Master::where('type',18)->where('name',$row['Type of Vessel'])->first();
            }
            if($row['Place of Registry']){
                $placeofregistry=Master::where('type',0)->where('name',$row['Place of Registry'])->first();
            }
            if($row['Base of Operation']){
                $bop=Master::where('type',0)->where('name',$row['Base of Operation'])->first();
            }


            $data = new BoatDetails();
            $meta=[];
            $meta['district']=$district?$district->id:null;
            $meta['taluk']=$taluk?$taluk->id:null;
            $meta['village']=$village?$village->id:null;
            $meta['hamlet']=$hamlet?$hamlet->id:null;
            $data->meta=$meta;

            $data->name=$row['Boat Name']??'';
            $basic=$data->basic??[];
            $date=null;
            if($row['Application Date']){
                $date = $row['Application Date']?DateTime::createFromFormat('d/m/Y', $row['Application Date']):null;
            }
            $basic['applicationdate']=$date?$date->format('Y-m-d'):null;
            $basic['yard']=$row['Yard']??null;
            $basic['yardaddress']=$row['Yard Address']??null;
            $basic['hullmaterial']=$hullmaterial?$hullmaterial->id:null;
            $basic['yearofmake']=$row['Year of Make']??null;
            $basic['hulllength']=$row['Hull Length']??null;
            $basic['hullwidth']=$row['Hull Width']??null;
            $basic['hulldepth']=$row['Hull Depth']??null;
            $basic['regno']=$row['Boat Registration Number']??null;
            $date=null;
            if($row['License Expiry']){
                $date = $row['License Expiry']?DateTime::createFromFormat('d/m/Y', $row['License Expiry']):null;
            }
            $basic['licenseexpiry']=$date?$date->format('Y-m-d'):null;
            $basic['vesselcategory']=$vesselcategory?$vesselcategory->id:null;
            $basic['typeofvessel']=$typeofvessel?$typeofvessel->id:null;
            $basic['noofmasts']=$row['No of Mast']??null;
            $basic['cubicmeteres']=$row['Cubic Meters']??null;
            $basic['noofbulkheads']=$row['No of Bulkheads']??null;
            $basic['district']=$district?$district->id:null;
            $basic['noofholds']=$row['No of Holds']??null;
            $basic['tonnagecapacity']=$row['Tonnage Capacity']??null;
            $basic['smartcardno']=$row['Smartcard Number']??null;
            $basic['systemtonnagecapacity']=$row['systemtonnagecapacity']??0;
            $basic['registeredtonnage']=$row['System Tonnage Capacity']??0;
            $basic['cubicmeter']=$row['Cubic Meters']??0;
            $basic['crewcapacity']=$row['Crew Capacity']??0;
            $basic['baseofoperation']=$bop?$bop->id:null;
            $basic['nameofpreviousowner']=null;
            $basic['costofpurchase']=$row['Cost Of Purchase']??null;
            $basic['applicationrefno']=null;
            $basic['callsign']=$row['Call Sign']??null;
            $basic['logbook']=0;
            $basic['particulars']=null;
            $data->basic=$basic;
            $data->save();


            $benef=Beneficiary::where('personal->aadharnumber',$row['Owner Aadhar Number'])->orWhere('personal->rationcard',$row['Ration Card Number'])->orWhere('society->memberno',$row['Welfare Number'])->first();
            if ($benef) {
                $datax=new BoatExtra();
                $datax->boat_id=$data->id;
                $datax->type='owner';
                $datax->save();
                $details=$datax->details??[];
                $details['benefid']=$benef->id??null;
                $details['ownername']=$benef->name??null;
                $details['leader']=null;
                $details['shareheld']=null;
                $details['categoryofownership']=null;
                $details['fathername']=$benef->personal['fathername']??null;
                $details['gender']=$benef->personal['gender']??null;
                $details['age']=$benef->personal['age']??null;
                $details['minorcheck']=null;
                $details['sameasper']=null;
                $details['minorname']=null;
                $details['minoraddress']=null;
                $details['minordob']=null;
                $details['permanentaddress']=$benef->personalp['permanentaddress']??null;
                $details['personaladdress']=$benef->personal['pressentaddress']??null;
                $details['permanentpincode']=null;
                $details['personalpincode']=null;
                $details['permanentdistrict']=null;
                $details['personaldistrict']=null;
                $details['permanentphno']=$benef->personal['mobilenumber']??null;
                $details['personalphno']=null;
                $details['email']=$benef->personal['emailid']??null;
                $details['aadharnumber']=$benef->personal['aadharnumber']??null;
                $details['fishermenid']=null;
                $details['memberno']=$benef->society['memberno']??null;
                $details['costalno']=null;
                $details['ownerfrom']=null;
                $details['rationcard']=$benef->personal['rationcard']??null;
                $datax->details=$details;
                $datax->save();
            }
        }
        return $data;
    }
}
