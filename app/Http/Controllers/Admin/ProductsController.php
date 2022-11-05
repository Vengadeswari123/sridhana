<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Master;
use App\Models\Products;
use App\Models\ProductsImage;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public $xdata = [
        'title' => 'Products',
        'url' => '/admin/products',
        'filename' => 'Admin.Products',
        'modelname' => 'products',
    ];
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 10;
        $status = $request->status ?? -1;
        $name = $request->name ?? '';
        $code = $request->code ?? '';
        $sortbyid = $request->sortbyid ?? 'created_at';
        $sortby = $request->sortby ?? 'desc';

        $data = Products::getdata($name, $status, $sortbyid, $sortby);
        if (strlen($code) > 0) {
            $data = $data->where('data->code', 'LIKE', '%' . $code . '%');
        }
        $data = $data->simplePaginate($perPage);
        return view($this->xdata['filename'] . '.List', ['data' => $data, 'xdata' => $this->xdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = [];
        $options['category'] = Master::activemoduledata('category')->with('categorybehasmany')->select('id', 'data->name as name')->get();
        $options['colour'] = Master::activemoduledata('colour')->select('id', 'data->name as name')->get();
        $options['emblishment'] = Master::activemoduledata('emblishment')->select('id', 'data->name as name')->get();
        $options['pattern'] = Master::activemoduledata('pattern')->select('id', 'data->name as name')->get();
        $options['fabric'] = Master::activemoduledata('fabric')->select('id', 'data->name as name')->get();
        $options['technique'] = Master::activemoduledata('technique')->select('id', 'data->name as name')->get();
        $options['collection'] = Master::activemoduledata('collection')->select('id', 'data->name as name')->get();
        $options['occasion'] = Master::activemoduledata('occasion')->select('id', 'data->name as name')->get();
        $options['attribute'] = Master::activemoduledata('attribute')->select('id', 'data->name as name')->get();
        return view($this->xdata['filename'] . '.Manage', ['data' => null, 'xdata' => $this->xdata, 'options' => $options]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'loc' => 'required',
            ],
            [
                'loc.mimes' => 'Please upload a image',
                'loc.required' => 'Please upload a image',
            ]
        );

        $data = Products::manage($request);
        // return $data;
        return redirect($this->xdata['url'] . '/view/' . $data->id)->with('status', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Products::with(['colour'])->find($id);
        // return $data;
        if ($data) {
            return view($this->xdata['filename'] . '.View', ['data' => $data, 'xdata' => $this->xdata]);
        }
        return redirect($this->xdata['url'])->with('error', 'Data not Found!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $options = [];
        $data = Products::find($id);
        if ($data) {
            $options = [];
            $options['category'] = Master::activemoduledata('category')->with('categorybehasmany')->select('id', 'data->name as name')->get();
            $options['colour'] = Master::activemoduledata('colour')->select('id', 'data->name as name')->get();
            $options['emblishment'] = Master::activemoduledata('emblishment')->select('id', 'data->name as name')->get();
            $options['pattern'] = Master::activemoduledata('pattern')->select('id', 'data->name as name')->get();
            $options['fabric'] = Master::activemoduledata('fabric')->select('id', 'data->name as name')->get();
            $options['technique'] = Master::activemoduledata('technique')->select('id', 'data->name as name')->get();
            $options['collection'] = Master::activemoduledata('collection')->select('id', 'data->name as name')->get();
            $options['occasion'] = Master::activemoduledata('occasion')->select('id', 'data->name as name')->get();
            $options['attribute'] = Master::activemoduledata('attribute')->select('id', 'data->name as name')->get();
        return view($this->xdata['filename'] . '.Manage', ['data' => $data, 'xdata' => $this->xdata, 'options' => $options]);
        }
        return redirect($this->xdata['url'])->with('error', 'Data not Found!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'loc' => 'nullable',
            ],
            [
                'loc.mimes' => 'Please upload a image',
                'loc.required' => 'Please upload a image',
            ]
        );


        $data = Products::manage($request, $id);
        return redirect($this->xdata['url'] . '/view/' . $data->id)->with('status', 'Editted Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id', $id)->delete();
        return redirect($this->xdata['url'])->with('status', 'Deleted Successfully!');;
    }
    /**
     * Remove the specified Image resource from storage.
     *
     * @param  int  $id
     * @param  int  $pid
     * @return \Illuminate\Http\Response
     */
    public function destroyimage($id,$pid)
    {
        ProductsImage::remove($id,$pid);
        return redirect($this->xdata['url'].'/edit/'.$id)->with('status', 'Deleted Successfully!');;
    }

}
