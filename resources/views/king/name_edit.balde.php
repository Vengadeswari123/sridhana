@extends('layouts.setting')

@section('content')

<div class=" container editted">
    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">
            <a href="# " class="p-3 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                     <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
        </div>

        <div class="col-12">
            <h5>Name</h5>
            <input type="text"class="form-control" name="name" value="{{$data->name}}">
            <div><a href="/form/edit/name" class=" my-3 float-end btn btn-success  ">

                <i class="fa-solid fa-pencil"></i>Edit name</a></div>
        </div> </div>
        @endsection
