<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');

class CasteImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',10)->where('name',$row['Name'])->first();
        if(!$data){
            $category='';
            if($row['Category']){
                $category=Master::where('type',3)->where('name',$row['Category'])->first();
                if($category){
                    $category=$category->id;
                }
            }
            $data=new Master();
            $data->type=10;
            $data->name=$row['Name'];
            $data->status=1;
            $details=$data->details??[];
            $details['castecategory']=$category??'';
            $data->details=$details;
            $data->save();
        }
        return $data;
    }
}

