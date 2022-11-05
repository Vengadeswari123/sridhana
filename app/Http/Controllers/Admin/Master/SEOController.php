<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use App\Models\Master;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    public $xdata = [
        'title' => 'SEO',
        'url' => '/admin/master/SEO',
        'filename' => 'Admin.Master.SEO',
        'modelname' => 'SEO',
    ];
    public function index(Request $request)
    {
        $perPage = $request->perPage ?? 10;
        $status = $request->status ?? -1;
        $name = $request->name ?? '';
        $code = $request->code ?? '';
        $sortbyid = $request->sortbyid ?? 'created_at';
        $sortby = $request->sortby ?? 'desc';

        $data = Master::getdata($this->xdata['modelname'], $name, null, $sortbyid, $sortby);

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
        // return $request;
        $request->validate(
            [
                'name' => 'required',
                'title'=>'required',


            ],
      [

            ]
        );

        $data = Master::manage($this->xdata['modelname'], $request);
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
        $data = Master::module($this->xdata['modelname'])->find($id);
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
        $data = Master::module($this->xdata['modelname'])->find($id);
        if ($data) {

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
                'title'=>'required',


            ],
            [

            ]
        );


        $data = Master::manage($this->xdata['modelname'], $request, $id);
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
        Master::remove($id);;
        return redirect($this->xdata['url'])->with('status', 'Deleted Successfully!');;
    }
}
