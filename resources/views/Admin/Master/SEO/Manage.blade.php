@extends('layouts.admin')
@section('content')
<div>
    <div class="container-fluid">
        <div class="card mt-4 p-3-e" style="border-radius: 15px">
            <h4 class="font-prim fw-bold color-eblue">
                <a href="{{ $xdata['url'] }}" class="btn float-end btn-primary">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                {{ $xdata['title'] }}
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item"><a href="/admin/master">Master</a></li>
                    <li class="breadcrumb-item"><a href="{{ $xdata['url'] }}">{{ $xdata['title'] }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ !$data?'Add':'Edit' }}
                    </li>
                </ol>
            </nav>
            <hr>
            <form method="post" enctype="multipart/form-data" class="p-2"> @csrf
                <div class="row">
                    <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="name" name="name" id="name" error="{{ $errors->first('name')??'' }}" value="{{ old('name')??$data->data['name']??'' }}" label="Name" placeholder="Name">
                    </vue-inputtext>
                    <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="title" name="title" id="title" error="{{ $errors->first('title')??'' }}" value="{{ old('title')??$data->data['title']??'' }}" label="Title" placeholder="Title">
                    </vue-inputtext>
                    <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="description" name="description" id="description" error="{{ $errors->first('description')??'' }}" value="{{ old('description')??$data->data['description']??'' }}" label="Description" placeholder="Description">
                    </vue-inputtext>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight">
                        <button type="submit" class="btn btn-outline-primary">
                            <i class="fa fa-save" aria-hidden="true"></i> Save
                        </button>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>

@endsection
