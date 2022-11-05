<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $casts = [
        'details' => 'array'
    ];
    public static function getdata($name,$sortbyid,$sortby){
        $data=UserType::select('*');
        if ($name) {
            $data=$data->where('name', 'LIKE', '%'.$name.'%');
        }
        if ($sortbyid && $sortby) {
            $data=$data->orderBy($sortbyid, $sortby);
        }
        return $data;
    }


    public static function manage($request){
        if($request->id){
            $data=UserType::find($request->id);
        }
        else{
            $data=new UserType();
        }
        $data->name=$request->name;
        $data->details=$request->details;
        $data->save();
        return $data;
    }
}
