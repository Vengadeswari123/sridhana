<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class TypeofVesselImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',18)->where('name',$row['Name'])->first();
        if(!$data){
            $vesselcategory='';
            if($row['Vessel Category']){
                $vesselcategory=Master::where('type',17)->where('name',$row['Vessel Category'])->first();
                if($vesselcategory){
                    $vesselcategory=$vesselcategory->id;
                }
            }
            $data=new Master();
            $data->type=18;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['vesselcategory']=$vesselcategory??'';
            $data->details=$details;
            $data->save();
        }
        return $data;
    }
}

