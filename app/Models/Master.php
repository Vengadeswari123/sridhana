<?php

namespace App\Models;

use App\Http\Controllers\GeneralController;
use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class Master extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
    ];
    public static function module($type)
    {
        return Master::where('name', $type);
    }
    public static function activemoduledata($type)
    {
        return Master::where('name', $type)->where('status', 1);
    }


    public function category()
    {
        return $this->belongsTo(Master::Class, 'data->catid', 'id');
    }
    public function relcategory()
    {
        return $this->belongsTo(Master::Class, 'catid', 'id');
    }
    public function categorybehasmany()
    {
        return $this->hasMany(Master::Class, 'data->catid', 'id')->where('name', 'subcategory')->select('*', 'name as names', 'data->name as name')->with('tercategorybehasmany');
    }

    public function tercategory()
    {
        return $this->belongsTo(Master::Class, 'data->subcatid', 'id');
    }
    public function reltercategory()
    {
        return $this->belongsTo(Master::Class, 'subcatid', 'id');
    }
    public function tercategorybehasmany()
    {
        return $this->hasMany(Master::Class, 'data->subcatid', 'id')->where('name', 'teritarycategory')->select('*', 'name as names', 'data->name as name');
    }
    public static function getdetails($name, $no)
    {
        $data = Master::where('name', $name)->select('data->name as name', 'id', 'data->loc as loc', 'data->slugurl as slugurl')->orderBy('data->priority', 'desc');
        if (in_array($name, ['subcategory', 'teritarycategory'])) {
            if ($name == 'subcategory') {
                $selid = 'data->catid as catid';
                $selwith = 'relcategory';
            } else if ($name == 'teritarycategory') {
                $selid = 'catid,subcatid';
                $selwith = 'relcategory,reltercategory';
            }
            $data = $data->addSelect($selid)->with($selwith)->orderBy('data->priority', 'desc');
        }
        return $data;
        $data = $data->where('status', 1);
        if ($no && $no > 0) {
            $data = $data->take($no);
        }
        return $data;
    }


    public static function getdata($type, $name = null, $status = null, $sortbyid = null, $sortby = null)
    {
        $data = Master::where('name', $type);
        if ($status > -1) {
            $data = $data->where('status', $status);
        }
        if ($name) {
            $data = $data->where('data->name', 'LIKE', '%' . $name . '%');
        }
        return $data->orderBy($sortbyid, $sortby);
    }
    public static function managecategory($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($value->name ?? ''));
        $data['priority'] = $value->priority ?? 1;
        $filename = 'Category/' . $value->name;
        $data['loc'] = $data['loc'] ?? null;
        $data['loc'] = GeneralController::storedocuments($value, 'loc', $data['loc'] ?? null, $filename);
        return $data;
    }
    public static function manageoccasion($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($value->name ?? ''));
        $data['priority'] = $value->priority ?? 1;
        $filename = 'Occasion/' . $value->name; //
        $data['loc'] = $data['loc'] ?? null;
        $data['loc'] = GeneralController::storedocuments($value, 'loc', $data['loc'] ?? null, $filename);
        return $data;
    }
    public static function managesubcategory($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($value->name ?? ''));
        $data['priority'] = $value->priority ?? 1;
        $data['catid'] = $value->catid ?? '';
        $filename = 'SubCategory/' . $value->name;
        $data['loc'] = $data['loc'] ?? null;
        $data['loc'] = GeneralController::storedocuments($value, 'loc', $data['loc'] ?? null, $filename);
        return $data;
    }
    public static function manageteritarycategory($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($value->name ?? ''));
        $data['priority'] = $value->priority ?? 1;
        $data['catid'] = $value->catid ?? '';
        $data['subcatid'] = $value->subcatid ?? '';
        $filename = 'TeritaryCategory/' . $value->name;
        $data['loc'] = $data['loc'] ?? null;
        $data['loc'] = GeneralController::storedocuments($value, 'loc', $data['loc'] ?? null, $filename);
        return $data;
    }


    public static function managecollection($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($value->name ?? ''));
        $data['priority'] = $value->priority ?? 1;
        $filename = 'Collection/' . $value->name;
        $data['loc'] = $data['loc'] ?? null;
        $data['loc'] = GeneralController::storedocuments($value, 'loc', $data['loc'] ?? null, $filename);
        return $data;
    }
    public static function manageCMS($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['description'] = $value->description ?? '';
        $data['title'] = $value->title ?? '';
        $filename = 'CMS/' . $value->name;
        return $data;
    }
    public static function managepincode($data, $value)
    {
        $data['state'] = $value->state ?? '';
        $data['country'] = $value->country ?? '';
        $data['pincode'] = $value->pincode ?? '';
        $data['cost'] = $value->cost ?? '';
        $filename = 'pincode/' . $value->name;
        return $data;
    }
    public static function manageSEO($data, $value)
    {
        $data['name'] = $value->name ?? '';
        $data['title'] = $value->title ?? '';
        $data['description'] = $value->description ?? '';
        $filename = 'SEO/' . $value->name;
        return $data;
    }
    public static function manage($modulename, $request, $id = null)
    {
        $data = Master::where('name', $modulename)->find($id);
        if (!$data) {
            $data = new Master();
            $data->name = $modulename;
        }

        $xdata = $data->data ?? [];

        if ($modulename == 'category') {
            $xdata = Master::managecategory($xdata, $request);
        } else if ($modulename == 'subcategory') {
            $data->level = 1;
            $xdata = Master::managesubcategory($xdata, $request);
        } else if ($modulename == 'teritarycategory') {
            $data->level = 2;
            $xdata = Master::manageteritarycategory($xdata, $request);
        } else if ($modulename == 'collection') {
            $xdata = Master::managecollection($xdata, $request);
        } else if ($modulename == 'occasion') {
            $xdata = Master::manageoccasion($xdata, $request);
        } else if ($modulename == 'CMS') {
            $xdata = Master::manageCMS($xdata, $request);
        } else if ($modulename == 'pincode') {
            $xdata = Master::managepincode($xdata, $request);
        } else if ($modulename == 'SEO') {
            $xdata = Master::manageSEO($xdata, $request);
        } else if (in_array($modulename, ['tags', 'fabric', 'attribute', 'pattern', 'technique', 'emblishment', 'colour'])) {
            $xdata['name'] = $request->name ?? '';
        }
        $data->data = $xdata;
        $data->status = $request->status ?? 0;
        $data->save();
        return $data;
    }
    public static function remove($id = null)
    {
        $data = Master::find($id);
        $data->data['loc'] ? File::delete(public_path($data->data['loc'])) : null;
        return $data->delete();
    }
}
