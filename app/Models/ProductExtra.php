<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductExtra extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
    ];

    public function product(){
        return $this->belongsTo(Products::class,'data->product_id','id')
        ->with('image')
        ->select('id','name','pricing->disp as disp','pricing->disa as disa','pricing->taxp as taxp','pricing->taxa as taxa','pricing->taxa as taxa','pricing->nettotal as nettotal','data->slugurl as slugurl');
    }
    public static function manage($uid,$request)
    {
        $data = ProductExtra::where('type',0)->where('data->user_id', $uid)->where('data->product_id', $request->id)->first();
        $type = 1;
        $title = '';
        $message = '';
        $xdata=[];
        if (!$data) {
            $data = new ProductExtra();
            $data->type = 0;
            $xdata = $data->data ?? [];
            $xdata['product_id'] = $request->id ?? '';
            $xdata['user_id'] = $uid ?? '';
            $xdata['count'] = $request->count ?? 1;
            $title='Product Added Successfully';
            $message='Product has been Added Successfully';
        } else {
            $type = 0;
            $xdata = $data->data ?? [];
            // $xdata['count'] = $xdata['count'] + ($request->count ?? 1);
            $title='Product has been added Successfully';
            $message='Product is already in Cart';
        }
        $data->data = $xdata;
        $data->save();

        $x=[];
        $x['success']=$type?true:false;
        $x['title']=$title;
        $x['message']=$message;
        $x['count']=ProductExtra::where('type',0)->where('data->user_id',$uid)->count();
        return $x;
    }
    public static function managewishlist($uid,$request)
    {
        $data = ProductExtra::where('type',1)->where('data->user_id', $uid)->where('data->product_id', $request->id)->first();
        $type = 1;
        $title = '';
        $message = '';
        $xdata=[];
        if (!$data) {
            $data = new ProductExtra();
            $data->type = 1;
            $xdata = $data->data ?? [];
            $xdata['product_id'] = $request->id ?? '';
            $xdata['user_id'] = $uid ?? '';
            $xdata['count'] = $request->count ?? 1;

            $title='Product Added Successfully';
            $message='Product has been Added Successfully';
        } else {
            $type = 1;
            $xdata = $data->data ?? [];
            // $xdata['count'] = $xdata['count'] + ($request->count ?? 1);
            $title='Product has been added Successfully';
            $message='Product is already in Wishlist';
        }
        $data->data = $xdata;
        $data->save();

        $x=[];
        $x['success']=$type?true:false;
        $x['title']=$title;
        $x['message']=$message;
        $x['count']=ProductExtra::where('type',1)->where('data->user_id',$uid)->count();
        return $x;
    }
}
