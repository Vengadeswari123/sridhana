<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
HeadingRowFormatter::default('none');
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

class AlliedActivityImport implements ToModel,WithHeadingRow,SkipsEmptyRows
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data=Master::where('type',1)->where('name',$row['Name'])->first();
        if(!$data){
            $data=new Master();
            $data->type=1;
            $data->name=$row['Name'];
            $data->status=1;
            $data->save();
        }
        return $data;
    }
}
