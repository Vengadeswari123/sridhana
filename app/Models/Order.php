<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\UUID;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
    ];
    public static function manage($request,$id=null){
    if ($id) {
        $data=Order::find($id);
    } else {
        $data=new Order();
    }
    $customer=$data->customer??[];
    $pricing=$data->pricing??[];

    $customer['id']=$request->id;
    $customer['name']=$request->name;
    $customer['phone']=$request->phone;
    $customer['email']=$request->email;
    $customer['door_street']=$request->door_street;
    $customer['locality']=$request->locality;
    $customer['city']=$request->city;
    $customer['state']=$request->state;
    $customer['country']=$request->country;
    $customer['pincode']=$request->pincode;


    $pricing['total_amount']=$request->total_amount;
    $pricing['discount']=$request->discount;
    $pricing['available_offer']=$request->available_offer;
    $pricing['subtotal']=$request->subtotal;
    $pricing['promocode']=$request->promocode;
    $pricing['project']=$request->project;

    $data->customer=$customer;
    $data->pricing=$pricing;
    $data->status = $request->status ?? 0;
    $data->user_id = $request->user_id ?? 0;
    $data->save();
    return $data;

}

}
