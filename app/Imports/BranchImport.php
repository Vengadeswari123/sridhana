<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class BranchImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',9)->where('name',$row['Name'])->first();
        if(!$data){
            $bank='';
            if($row['Bank']){
                $bank=Master::where('type',2)->where('name',$row['Bank'])->first();
                if($bank)
                    $bank=$bank->id;
            }
            $district='';
            if($row['District']){
                $district=Master::where('type',0)->where('name',$row['District'])->first();
                if($district)
                    $district=$district->id;
            }
            $data=new Master();
            $data->type=9;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['bank']=$bank??'';
            $details['district']=$district??'';
            $details['ifsccode']=$row['IFSC']??'';
            $details['micrcode']=$row['MICR']??'';
            $data->details=$details;
            $data->save();
        }
        return $data;
    }
}

