@extends('layouts.admin')
@section('content')
<div>
    <div class="container">
        <div class="card mt-4 p-3-e pb-2" style="border-radius: 15px">
            <h4 class="font-prim fw-bold color-eblue">
                <a href="{{ $xdata['url'] }}" class="btn mx-1 float-end btn-primary">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                <a href="{{ $xdata['url']}}/edit/{{ $data->id }}" class="btn mx-1 float-end btn-primary">
                    <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                <a href="{{ $xdata['url']}}/delete/{{ $data->id }}" class="btn mx-1 float-end btn-danger" onclick="return confirm('Are you sure?')">
                    <i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
                {{ $xdata['title'] }}
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item"><a href="{{ $xdata['url'] }}">{{ $xdata['title'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        View
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card card-body mt-3">
            <h5>General</h5>
            <table class="table">
                <thead>
                    <tr>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data->data['name']??'' }}</td>
                        <th>Short Description</th>
                        <td>{{ $data->data['shortdesc']??'' }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $data->data['desc']??'' }}</td>
                        <th>SKU</th>
                        <td>{{ $data->data['sku']??'' }}</td>
                    </tr>
                    <tr>
                        <th>Barcode</th>
                        <td>{{ $data->data['barcode']??'' }}</td>
                        <th>Track Qty</th>
                        <td>{{ $data->data['trackqty']?'Yes':'No' }}</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>{{ $data->data['stock']??0 }}</td>
                        <th>Min Stock</th>
                        <td>{{ $data->data['minstock']??0 }}</td>
                    </tr>
                    <tr>
                        <th>Sell When out of Stock</th>
                        <td>{{ $data->data['selloutofstock']?'Yes':'No' }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        @php
        $attribute=$data->data['attribute']??[];
        @endphp
        @if(count($attribute)>0)
        <div class="card card-body mt-3">
            <h5>Attribute</h5>
            <table class="table">
                <tr>
                    @for($i=0;$i<count($attribute);$i++) <th>{{ $attribute[$i]['name'] }}</th>
                        <th>{{ $attribute[$i]['value'] }}</th>

                        @endfor
                </tr>
            </table>
        </div>
        @endif

        <div class="card card-body mt-3">
            <h5>Pricing</h5>
            <table class="table">
                <thead>
                    <tr>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Cost per Item</th>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i> {{ $data->pricing['cpi']??0 }}</td>
                        <th>Base Price</th>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i> {{ $data->pricing['baseprice']??0 }}</td>
                    </tr>
                    <tr>
                        <th>Discount Percent</th>
                        <td>{{ $data->pricing['disp']??0 }} %</td>
                        <th>Discount Amount</th>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i> {{ $data->pricing['disa']??0 }}</td>
                    </tr>
                    <tr>
                        <th>Tax Percent</th>
                        <td>{{ $data->pricing['taxp']??0 }} %</td>
                        <th>Tax Amount</th>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i> {{ $data->pricing['taxa']??0 }}</td>
                    </tr>
                    <tr>
                        <th>Net Total</th>
                        <td><i class="fa-solid fa-indian-rupee-sign"></i> {{ $data->pricing['nettotal']??0 }}</td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td>{{ $data->pricing['weight']??'' }} {{ $data->pricing['wgunit']??'' }}</td>
                        <th>Track Qty</th>
                        <td>{{ $data->pricing['length']??'' }} * {{ $data->pricing['width']??'' }} * {{ $data->pricing['height']??'' }} {{ $data->pricing['mntunit']??'' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card card-body mt-3">
            <h5>Metadata</h5>
            <table class="table">
                <thead>
                    <tr>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                        <td style="width:20%"></td>
                        <td style="width:30%"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Color</th>
                        <td>{{ $data->colour->name??'' }}</td>
                        <th>Emblishment</th>
                        <td>{{ $data->emblishment->name??'' }}</td>
                    </tr>
                    <tr>
                        <th>Pattern</th>
                        <td>{{ $data->pattern->name??'' }}</td>
                        <th>Fabric</th>
                        <td>{{ $data->fabric->name??'' }}</td>
                    </tr>
                    <tr>
                        <th>Technique</th>
                        <td>{{ $data->technique->name??'' }}</td>
                        <th>Collection</th>
                        <td>
                            @for($i=0;$i<$data->prodcollection()->count();$i++)
                                {{ $data->prodcollection()[$i]->name }} <br>
                                @endfor</td>
                    </tr>
                    <tr>
                        <th>Ocassion</th>
                        <td>
                            @for($i=0;$i<$data->occasion()->count();$i++)
                                {{ $data->occasion()[$i]->name }} <br>
                                @endfor
                        </td>
                        <th></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>
                                {{ $data->category?$data->category->name:'' }} <br>
                        </td>
                        <th>Sub Category</th>
                        <td>
                                {{ $data->subcategory?$data->subcategory->name:'' }} <br>
                        </td>
                    </tr>
                    <tr>
                        <th>Teritary Category</th>
                        <td>
                                {{ $data->tercategory?$data->tercategory->name:'' }} <br>
                        </td>
                        <th></th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
