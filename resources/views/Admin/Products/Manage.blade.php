@extends('layouts.admin')
@section('content')
<div>
    <div class="container-fluid">
        <div class="card mt-4 p-3-e" style="border-radius: 15px">
            <h4 class="font-prim fw-bold colour-eblue">
                <a href="{{ $xdata['url'] }}" class="btn float-end btn-primary">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                {{ $xdata['title'] }}
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ $xdata['url'] }}">{{ $xdata['title'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ !$data?'Add':'Edit' }}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <form method="post" enctype="multipart/form-data" class="p-2"> @csrf
        <div class="row">
            <div class="col-sm-12 mt-2 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue px-2 mb-2">
                            Basic
                        </h5>
                        <vue-inputtext required="1" disabled="0" type="text" class="w-100 mt-2" key="name" name="name" id="name" error="{{ $errors->first('name')??'' }}" value="{{ old('name')??$data->data['name']??'' }}" label="Name" placeholder="Name">
                        </vue-inputtext>
                        <vue-inputtextarea class="w-100 mt-2" key="shortdesc" name="shortdesc" id="shortdesc" error="{{ $errors->first('shortdesc')??'' }}" value="{{ old('shortdesc')??$data->data['shortdesc']??'' }}" label="Short Description" placeholder="Enter Short Description">
                        </vue-inputtextarea>
                        <vue-inputtextarea class="w-100 mt-2" key="desc" name="desc" id="desc" error="{{ $errors->first('desc')??'' }}" value="{{ old('desc')??$data->data['desc']??'' }}" label="Description" placeholder="Enter Description">
                        </vue-inputtextarea>
                    </div>
                </div>
                <hr>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue px-2 mb-2">
                            Pricing
                        </h5>
                        @php
                        $errorsx=[];
                        $errorsx['cpi'] = $errors->has('cpi') ? $errors->first('cpi') : null;
                        $errorsx['nettotal'] = $errors->has('nettotal') ? $errors->first('nettotal') : null;
                        $errorsx['disp'] = $errors->has('disp') ? $errors->first('disp') : null;
                        $errorsx['disa'] = $errors->has('disa') ? $errors->first('disa') : null;
                        $errorsx['distype'] = $errors->has('distype') ? $errors->first('distype') : null;
                        $errorsx['taxp'] = $errors->has('taxp') ? $errors->first('taxp') : null;
                        $errorsx['baseprice'] = $errors->has('baseprice') ? $errors->first('baseprice') : null;
                        @endphp
                        <admin-product-pricing :cpix="{{ json_encode(old('cpi')??$data->pricing['cpi']??0) }}" :nettotalx="{{ json_encode(old('nettotal')??$data->pricing['nettotal']??0) }}" :dispx="{{ json_encode(old('disp')??$data->pricing['disp']??0) }}" :disax="{{ json_encode(old('disa')??$data->pricing['disa']??0) }}" :distypex="{{ json_encode(old('distype')??$data->pricing['distype']??0) }}" :taxpx="{{ json_encode(old('taxp')??$data->pricing['taxp']??0) }}" :basepricex="{{ json_encode(old('baseprice')??$data->pricing['baseprice']??0) }}" :errors="{{ json_encode($errorsx??[]) }}"></admin-product-pricing>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue   py-2 px-3 mb-3">
                            Inventory
                        </h5>
                        <vue-inputtext type="text" class="col-12 mt-2" key="length" name="sku" id="sku" error="{{ $errors->first('sku')??'' }}" value="{{ old('sku')??$data->data['sku']??'' }}" label="SKU" placeholder="Enter SKU">
                        </vue-inputtext>
                        <vue-inputtext type="text" class="col-12 mt-2" key="barcode" name="barcode" id="barcode" error="{{ $errors->first('barcode')??'' }}" value="{{ old('barcode')??$data->data['barcode']??'' }}" label="Barcode" placeholder="Enter Barcode">
                        </vue-inputtext>
                        <vue-inputtext type="number" :min=0 class="col-12 mt-2" key="stock" name="stock" id="stock" error="{{ $errors->first('stock')??'' }}" value="{{ old('stock')??$data->data['stock']??'' }}" label="Stock" placeholder="Enter Stock">
                        </vue-inputtext>
                        <vue-inputtext type="number" :min=0 class="col-12 mt-2" key="minstock" name="minstock" id="minstock" error="{{ $errors->first('minstock')??'' }}" value="{{ old('minstock')??$data->data['minstock']??'' }}" label="Minimum Stock" placeholder="Enter Minimum Stock">
                        </vue-inputtext>
                        <div class="col-12 col-sm-12 col-md-12 ms-4 mt-2">
                            <div class="row">
                                <div class="form-check col-sm-12 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="trackqty" name='trackqty' {{ (old('trackqty')==1||($data && $data->data['trackqty']==1)||0)?'checked': ''}} value="1">
                                    <label class="form-check-label" for="trackqty">Track Quantity</label>
                                </div>
                                <div class="form-check col-sm-12 col-md-6">
                                    <input class="form-check-input" type="checkbox" id="selloutofstock" name='selloutofstock' {{ (old('selloutofstock')==1||($data && $data->data['selloutofstock']==1)||0)?'checked': ''}} value="1">
                                    <label class="form-check-label" for="selloutofstock">Continue selling out of stock</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <admin-product-attribute
                    :options="{{ $options['attribute'] }}"
                    :data="{{ json_encode($data->data['attribute']??[]) }}"
                ></admin-product-attribute>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue  py-2 px-3 mb-3">
                            Shipping
                        </h5>
                        <div class="row">
                            <vue-inputtext type="number" :min=0 class="col-12 col-md-6 mt-2" key="weight" name="weight" id="weight" error="{{ $errors->first('weight')??'' }}" value="{{ old('weight')??$data->pricing['weight']??'' }}" label="Weight" placeholder="Enter Weight">
                            </vue-inputtext>
                            <div class="col-12 col-md-6 mt-2">
                                <vue-inputselect type="text" label="Weight Unit" name="wgunit" :options="['Kg','g']" value="{{ old('wgunit')??$data->pricing['wgunit']??'Kg' }}" placeholder="Weight Unit"></vue-inputselect>
                            </div>
                            <vue-inputtext type="number" :min=0 class="col-12 col-md-6 mt-2" key="length" name="length" id="length" error="{{ $errors->first('length')??'' }}" value="{{ old('length')??$data->pricing['length']??'' }}" label="Length" placeholder="Enter Length">
                            </vue-inputtext>
                            <vue-inputtext type="number" :min=0 class="col-12 col-md-6 mt-2" key="width" name="width" id="width" error="{{ $errors->first('width')??'' }}" value="{{ old('width')??$data->pricing['width']??'' }}" label="Width" placeholder="Enter Width">
                            </vue-inputtext>
                            <vue-inputtext type="number" :min=0 class="col-12 col-md-6 mt-2" key="height" name="height" id="height" error="{{ $errors->first('height')??'' }}" value="{{ old('height')??$data->pricing['height']??'' }}" label="Height" placeholder="Enter Height">
                            </vue-inputtext>
                            <div class="col-12 col-md-6 mt-2">
                                <vue-inputselect type="text" label="Measurement Unit" name="mntunit" :options="['M','cm']" value="{{ old('mntunit')??$data->pricing['mntunit']??'M' }}" placeholder="Measurement Unit"></vue-inputselect>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue  py-2 px-3 mb-3">
                            SEO
                        </h5>
                        <div class="row">
                            <vue-inputtext type="text" class="col-12 mt-2" key="seotitle" name="seotitle" id="seotitle" error="{{ $errors->first('seotitle')??'' }}" value="{{ old('seotitle')??$data->seo['seotitle']??'' }}" label="Title" placeholder="Enter Title">
                            </vue-inputtext>
                            <vue-inputtext type="text" class="col-12 mt-2" key="seodesc" name="seodesc" id="seodesc" error="{{ $errors->first('seodesc')??'' }}" value="{{ old('seodesc')??$data->seo['seodesc']??'' }}" label="Description" placeholder="Enter Description">
                            </vue-inputtext>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="mt-2 fw-bold text-eblue  py-2 px-3 mb-3">
                            Image
                        </h5>
                        <div class="row">
                            <vue-inputfile class="col-6" name="loc" id="loc" error="{{ $errors->first('loc')??'' }}" label="Image" placeholder="Enter Image">
                            </vue-inputfile>
                            <div class="col-6 mt-2">
                                <vue-inputselect type="text" label="Priority" name="priorityimage" :options="[5,4,3,2,1,0]" value="{{ old('priorityimage')??1 }}" placeholder="Priority"></vue-inputselect>
                            </div>
                            @if($data)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Image</th>
                                        <th style="width:35%">Priority</th>
                                        <th style="width:30%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i=0;$i<$data->images->count();$i++)
                                        <tr>
                                            <th>
                                                <img class="w-25" src="/{{ $data->images[$i]->loc }}" alt="">
                                            </th>
                                            <td>{{ $data->images[$i]->priority }}</td>
                                            <td><a href="/admin/products/delete/{{ $data->id }}/imagedel/{{ $data->images[$i]->id  }}" class="btn btn-outline-danger"  onclick="return confirm('Are you sure?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                            @endif'
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 mt-2">
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="mt-2">
                            <admin-product-category
                                :cat="{{ json_encode($data->metadata['category']??'') }}"
                                :subcat="{{ json_encode($data->metadata['subcategory']??'') }}"
                                :tercat="{{ json_encode($data->metadata['tercategory']??'') }}"
                                :options="{{ json_encode($options['category']) }}"
                            ></admin-product-category>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Colour" placeholder="Colour" name="colour" :value="{{ json_encode(old('colour')??$data->metadata['colour']??1) }}" :options="{{ $options['colour'] }}"></vue-inputvselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Emblishment" placeholder="Emblishment" name="emblishment" :value="{{ json_encode(old('emblishment')??$data->metadata['emblishment']??1) }}" :options="{{ $options['emblishment'] }}"></vue-inputvselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Pattern" placeholder="Pattern" name="pattern" :value="{{ json_encode(old('pattern')??$data->metadata['pattern']??1) }}" :options="{{ $options['pattern'] }}"></vue-inputvselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Fabric" placeholder="Fabric" name="fabric" :value="{{ json_encode(old('fabric')??$data->metadata['fabric']??1) }}" :options="{{ $options['fabric'] }}"></vue-inputvselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Technique" placeholder="Technique" name="technique" :value="{{ json_encode(old('technique')??$data->metadata['technique']??1) }}" :options="{{ $options['technique'] }}"></vue-inputvselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvmselect label="Collection" placeholder="Collection" name="collection" :value="{{ json_encode(old('collection')??$data->metadata['collection']??[]) }}" :options="{{ $options['collection'] }}"></vue-inputvmselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvmselect label="Occasion" placeholder="Occasion" name="occasion" :value="{{ json_encode(old('occasion')??$data->metadata['occasion']??[]) }}" :options="{{ $options['occasion'] }}"></vue-inputvmselect>
                        </div>
                        <div class="col-12 mt-2">
                            <vue-inputselect type="text" label="Priority" name="priority" :options="[5,4,3,2,1,0]" value="{{ old('priority')??$data->data['priority']??1 }}" placeholder="Priority"></vue-inputselect>
                        </div>
                        <div class="mt-2">
                            <vue-inputvselect label="Status" placeholder="Status" name="status" :value="{{ old('status')??$data->status??1 }}" :options="[{'id':1,'name':'Active'},{'id':0,'name':'Disabled'}]"></vue-inputvselect>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-2 bd-highlight">
                                @if($data)
                                <a href="/admin/products/view/{{ $data->id }}" type="submit" class="btn btn-outline-primary">
                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                </a>
                                @endif
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="fa fa-save" aria-hidden="true"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>

@endsection
