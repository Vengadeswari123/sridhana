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
                        <th>State</th>
                        <td> {{ $data->data['state']??'' }}
                        </td>
                    </tr>
                      <tr>
                        <th>Country</th>
                        <td>{{ $data->data['country']??'' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Pincode</th>
                        <td> {{ $data->data['pincode']??'' }}
                        </td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td> {{ $data->data['cost']??'' }}
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection