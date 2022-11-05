<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
    ];
   public static function address($request,$x)
   {
       $data=$x['address'];
       $data['name']=$request->name;
       $data['phone']=$request->phone;
       $data['houseNo']=$request->houseNo;
       $data['area_street']=$request->area_street;
       $data['city']=$request->city;
       $data['state']=$request->state;
       $data['country']=$request->country;
       $data['pincode']=$request->pincode;
       $x['address']=$data;

   }

    public static function manage($type,$request,$x,$id=null){

           $data=Customer::find($id);
           if(!$id){
            $data=new Customer();
        }
        $x=$data->data??[];

         if($type=='address'){
             $x=Customer::address($request,$x);
         }
        //  if($type=='request'){
        //     $x=Customer::request($data,$request,$x);
        //  }
         $data->data =$x;
         $data->save();
         return $data;
    }

}
