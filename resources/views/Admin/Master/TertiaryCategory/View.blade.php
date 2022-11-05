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
                    <li class="breadcrumb-item"><a href="/admin/master">Master</a></li>
                    <li class="breadcrumb-item"><a href="{{ $xdata['url'] }}">{{ $xdata['title'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        View
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card card-body mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:45%"> </th>
                        <th style="width:45%"> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td> {{ $data->data['name']??'' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td> {{ $data->category->data['name']??'' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Sub Category</th>
                        <td> {{ $data->tercategory->data['name']??'' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            <img src="/{{ $data->data['loc']??'' }}" class="w-50">
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td> {{ $data->status?'Active':'Disabled' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
