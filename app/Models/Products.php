<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use UUID;
    use HasFactory;
    use \Staudenmeir\EloquentJsonRelations\HasJsonRelationships;
    protected $casts = [
        'data' => 'array',
        'pricing' => 'array',
        'metadata' => 'array',
        'seo' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Master::class, 'metadata->category', 'id')->where('status', 1);
    }
    public function subcategory()
    {
        return $this->belongsTo(Master::class, 'metadata->subcategory', 'id')->where('status', 1)->select('*', 'name as names', 'data->name as name')->with('tercategorybehasmany');
    }
    public function tercategory()
    {
        return $this->belongsTo(Master::class, 'metadata->tercategory', 'id')->where('status', 1)->select('*', 'name as names', 'data->name as name');
    }
    public function colour()
    {
        return $this->belongsTo(Master::class, 'metadata->colour', 'id')->select('data->name as name', 'id', 'type', 'level', 'type', 'status')->where('status', 1);
    }
    public function emblishment()
    {
        return $this->belongsTo(Master::class, 'metadata->emblishment', 'id')->select('data->name as name', 'id', 'type', 'level', 'type', 'status')->where('status', 1);;
    }
    public function pattern()
    {
        return $this->belongsTo(Master::class, 'metadata->pattern', 'id')->select('data->name as name', 'id', 'type', 'level', 'type', 'status')->where('status', 1);;
    }
    public function fabric()
    {
        return $this->belongsTo(Master::class, 'metadata->fabric', 'id')->select('data->name as name', 'id', 'type', 'level', 'type', 'status')->where('status', 1);;
    }
    public function technique()
    {
        return $this->belongsTo(Master::class, 'metadata->technique', 'id')->select('data->name as name', 'id', 'type', 'level', 'type', 'status')->where('status', 1);;
    }
    public function image()
    {
        return $this->hasOne(ProductsImage::class, 'product_id', 'id');
    }
    public function images()
    {
        return $this->hasMany(ProductsImage::class, 'product_id', 'id');
    }
    public function cartlist()
    {
        return $this->hasmany(ProductExtra::class, 'data->product_id', 'id')->where('type', 0);
    }

    public function cart()
    {
        return $this->hasmany(ProductExtra::class, 'data->product_id', 'id');
    }

    public function prodcollection($type = 1)
    {
        if (!$type) {
            $data = $this->collection;
        } else {
            $data = $this->metadata['collection'];
        }
        return Master::whereIn('id', json_decode($data))->get();
    }


    public function occasion($type = 1)
    {
        if (!$type) {
            $data = $this->occasion;
        } else {
            $data = $this->metadata['occasion'];
        }
        return Master::whereIn('id', json_decode($data))->get();
    }


    public static function prodview()
    {
        return Products::select(
            'data->name as name',
            'data->slugurl as slugurl',
            'id',
            'data->shortdesc as shortdesc',
            'data->desc as desc',
            'data->stock as stock',
            'data->selloutofstock as selloutofstock',
            'data->attribute as attribute',
            'pricing->disa as disa',
            'pricing->disp as disp',
            'pricing->taxa as taxa',
            'pricing->taxp as taxp',
            'pricing->weight as weight',
            'pricing->wgunit as wgunit',
            'pricing->length as length',
            'pricing->width as width',
            'pricing->mntunit as mntunit',
            'pricing->nettotal as nettotal',
            'pricing->height as height',
            'pricing->length as length',
            'pricing->width as width',
            'metadata',
            'seo',
            'status'
        )->with('colour', 'emblishment', 'pattern', 'fabric', 'technique', 'images', 'category', 'subcategory', 'tercategory');
    }
    public static function getdetails($showoutofstock)
    {
        $data = Products::with('image')
            ->orderBy('data->priority', 'desc');
        if (!$showoutofstock) {
            $data = $data->where(function ($query) {
                $query->where('data->selloutofstock', 1)->orwhere('data->stock', 1);
            });
        }
        return $data->where('status', 1)->select('id', 'data->slugurl as slugurl', 'data->name as name', 'pricing->disa as disa', 'pricing->disp as disp', 'pricing->nettotal as nettotal', 'pricing->baseprice as baseprice', 'data->stock as stock', 'data->selloutofstock as selloutofstock', 'metadata');
    }


    public static function search($x,$typedata=null)
    {
        $data = Products::with('image')->where('status', 1)->select('id', 'data->slugurl as slugurl', 'data->name as name', 'pricing->disa as disa', 'pricing->disp as disp', 'pricing->nettotal as nettotal', 'pricing->baseprice as baseprice', 'data->stock as stock', 'data->selloutofstock as selloutofstock', 'metadata');


        if($typedata){
            if($typedata['name']=='category'){
                $data=$data->where('metadata->category',$typedata['id']);
            }
            else if($typedata['name']=='subcategory'){
                $data=$data->where('metadata->subcategory',$typedata['id']);
            }
            else if($typedata['name']=='tercategory'){
                $data=$data->where('metadata->tercategory',$typedata['id']);
            }
            else if($typedata['name']=='collection'){
                $data=$data->where('metadata->collection','like','%'.$typedata['id'].'%');
            }
            else if($typedata['name']=='occasion'){
                $data=$data->where('metadata->occasion',$typedata['id']);
            }
        }
        if ($x['showoutofstock']) {
            $data = $data->where(function ($query) {
                $query->where('data->selloutofstock', 1)->orwhere('data->stock', 1);
            });
        }
        if ($x['name'] && count($x['name']) > 0) {
            $data = $data->where('data->name', 'LIKE', '%' . $x['name'] . '%');
        }
        if (count($x['fabric']) > 0) {
            $data = $data->whereIn('metadata->fabric', $x['fabric']);
        }
        if (count($x['category']) > 0) {
            if($typedata && $typedata['name']=='category'){
                $data=$data->where('metadata->category', $x['category']);
            }
            else if($typedata && $typedata['name']=='subcategory'){
                $data=$data->where('metadata->subcategory', $x['category']);
            }
            else{
                $data = $data->whereIn('metadata->category', $x['category']);
            }
        }
        if (count($x['emblishment']) > 0) {
            $data = $data->whereIn('metadata->emblishment', $x['emblishment']);
        }
        if (count($x['pattern']) > 0) {
            $data = $data->whereIn('metadata->pattern', $x['pattern']);
        }
        if (count($x['technique']) > 0) {
            $data = $data->whereIn('metadata->technique', $x['technique']);
        }
        if (count($x['colour']) > 0) {
            $data = $data->whereIn('metadata->colour', $x['colour']);
        }
        if (count($x['occasion']) > 0) {
            $data = $data->whereJsonContains('metadata->occasion', $x['occasion']);
        }
        if (count($x['collection']) > 0) {
            $data = $data->whereJsonContains('metadata->collection', $x['collection']);
        }
        if ($x['minprice'] > 0) {
            $data = $data->where('pricing->nettotal', '>=', $x['minprice']);
        }
        if ($x['maxprice'] > 0) {
            $data = $data->where('pricing->nettotal', '<=', $x['maxprice']);
        }

        if ($x['orderby'] == 0) {
            $data = $data->orderBy('pricing->nettotal', 'desc');
        } else if ($x['orderby'] == 1) {
            $data = $data->orderBy('pricing->nettotal', 'asc');
        } else if ($x['orderby'] == 2) {
            $data = $data->orderBy('data->name', 'asc');
        } else if ($x['orderby'] == 3) {
            $data = $data->orderBy('data->name', 'desc');
        }
        return $data->orderBy('data->priority','desc');
    }

    public static function getdata($name = null, $status = null, $sortbyid = null, $sortby = null)
    {
        $data = Products::orderBy($sortbyid, $sortby);
        if ($status > -1) {
            $data = $data->where('status', $status);
        }
        if ($name) {
            $data = $data->where('data->name', 'LIKE', '%' . $name . '%');
        }
        return $data;
    }

    public static function manage($request, $id = null)
    {
        $data = Products::find($id);
        if (!$data) {
            $data = new Products();
        }
        $data->name = $request->name;
        $tempdatax = $data->data ?? [];
        $pricing = $data->pricing ?? [];
        $metadata = $data->metadata ?? [];
        $seo = $data->seo ?? [];


        $tempdatax['priority'] = $request->priority ?? 0;
        $tempdatax['name'] = $request->name ?? '';
        $tempdatax['slugurl'] = preg_replace('/[^A-Za-z0-9-]+/', '-', ($request->name ?? ''));
        $tempdatax['shortdesc'] = $request->shortdesc ?? '';
        $tempdatax['desc'] = $request->desc ?? '';
        $tempdatax['sku'] = $request->sku ?? '';
        $tempdatax['barcode'] = $request->barcode ?? '';
        $tempdatax['stock'] = $request->stock ?? 0;
        $tempdatax['trackqty'] = $request->minstock ?? 0;
        $tempdatax['selloutofstock'] = $request->selloutofstock ?? 0;
        $tempdatax['minstock'] = $request->trackqty ?? 0;
        $tempdatax['attribute'] = $request->attribute ? json_decode($request->attribute) : [];

        $pricing['cpi'] = $request->cpi ?? 0;
        $pricing['baseprice'] = $request->baseprice ?? 0;
        $pricing['disa'] = $request->disa ?? 0;
        $pricing['disp'] = $request->disp ?? 0;
        $pricing['taxp'] = $request->taxp ?? 0;
        $pricing['taxa'] = $request->taxa ?? 0;
        $pricing['nettotal'] = $request->nettotal ?? '';
        $pricing['distype'] = $request->distype ?? 0;
        $pricing['weight'] = $request->weight ?? 0;
        $pricing['wgunit'] = $request->wgunit ?? '';
        $pricing['length'] = $request->length ?? 0;
        $pricing['width'] = $request->width ?? 0;
        $pricing['height'] = $request->height ?? 0;
        $pricing['mntunit'] = $request->mntunit ?? '';

        $seo['seotitle'] = $request->seotitle ?? '';
        $seo['seodesc'] = $request->seodesc ?? '';

        $metadata['category'] = $request->category ?? '';
        $metadata['subcategory'] = $request->subcategory ?? '';
        $metadata['tercategory'] = $request->tercategory ?? '';
        $metadata['emblishment'] = $request->emblishment ?? '';
        $metadata['pattern'] = $request->pattern ?? '';
        $metadata['fabric'] = $request->fabric ?? '';
        $metadata['technique'] = $request->technique ?? '';
        $metadata['colour'] = $request->colour ?? '';
        $metadata['collection'] = $request->collection ?? [];
        $metadata['occasion'] = $request->occasion ?? [];

        $data->data = $tempdatax;
        $data->pricing = $pricing;
        $data->seo = $seo;
        $data->metadata = $metadata;
        $data->status = $request->status ?? 0;
        $data->save();
        if ($request->file('loc')) {
            ProductsImage::manage($data->id, $request);
        }
        return $data;
    }
}
