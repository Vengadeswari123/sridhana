<?php

namespace App\Imports;

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class HamletImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',13)->where('name',$row['Name'])->first();
        if(!$data){
            $district='';
            $taluk='';
            $village='';
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
            if($row['Village']){
                $village=Master::where('type',12)->where('name',$row['Village'])->first();
                if($village){
                    $village=$village->id;
                }
            }
            $data=new Master();
            $data->type=13;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['code']=$row['Code']??'';
            $details['district']=$district??'';
            $details['taluk']=$taluk??'';
            $details['village']=$village??'';
            $data->details=$details;
            $data->save();
        }

    }
}
