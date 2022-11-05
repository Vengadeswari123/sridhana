<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;


class Order_sub extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
    ];
    public static function manage($request,$id=null){
        if($id){
            $data=Order_sub::find($id);
        }
        else{
            $data=new order_sub();
        }
        $json=$data->data??[];
        $json['qty']=$request->qty;
        $json['netsubtotal']=$request->netsubtotal;
        $json['nettax']=$request->nettax;
        $json['netdiscount']=$request->netdiscount;
        $json['nettotal']=$request->nettotal;
        $json['subtotal']=$request->subtotal;
        $json['taxp']=$request->taxp;
        $json['taxa']=$request->taxa;
        $json['disp']=$request->disp;
        $json['disa']=$request->disa;
        $json['total']=$request->total;
        $json['profit']=$request->profit;
        $json['sp']=$request->sp;
        $data->data=$json;
        $data->save();
        return $data;
    }
}
