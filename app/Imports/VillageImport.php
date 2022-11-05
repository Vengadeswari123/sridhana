<?php

namespace App\Imports;

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class VillageImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',12)->where('name',$row['Name'])->first();
        if(!$data){
            $district='';
            $taluk='';
            if($row['District']){
                $district=Master::where('type',0)->where('name',$row['District'])->first();
                if($district){
                    $district=$district->id;
                }
            }
            if($row['Taluk']){
                $taluk=Master::where('type',11)->where('name',$row['Taluk'])->first();
                if($taluk){
                    $taluk=$taluk->id;
                }
            }
            $data=new Master();
            $data->type=12;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['district']=$district??'';
            $details['taluk']=$taluk??'';
            $data->details=$details;
            $data->save();
        }
        return $data;
    }
}
