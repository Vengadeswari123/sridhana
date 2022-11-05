<?php

namespace App\Models;

use App\Http\Controllers\GeneralController;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;
class ProductsImage extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;

    public static function manage($id,$request){
        $data=new ProductsImage();
        $data->product_id=$id;
        $data->priority=$request->priorityimage??0;
        $filename = 'Product/' .$id;
        $data->loc=$data->loc??null;
        $data->loc =GeneralController::storedocuments($request, 'loc', $data->loc ?? null, $filename);
        $data->save();
    }

    public static function remove($id,$pid){
        $data=ProductsImage::where('product_id',$id)->find($pid);
        if($data){
            $data->loc?File::delete(public_path($data->loc)) : null;
        }


        $data->delete();
    }
}
