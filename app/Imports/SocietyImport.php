<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class SocietyImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',15)->where('name',$row['Name'])->first();
        if(!$data){
            $district='';
            if($row['District']){
                $district=Master::where('type',0)->where('name',$row['District'])->first();
                if($district)
                    $district=$district->id;
            }

            $data=new Master();
            $data->type=15;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['district']=$district??'';
            $details['societynumber']=$row['Number']??'';
            $details['societycontactno']=$row['Contact Number']??'';
            $details['societycontactperson']=$row['Contat Person']??'';
            $details['societycontactaddress']=$row['Address']??'';
            $data->details=$details;
            $data->save();
        }
        return $data;
    }
}

