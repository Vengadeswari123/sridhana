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
                    <div class="col-md-6 col-sm-12 mt-2">
                        Image
                        <input type="file" class="form-control bg-white" name="loc" placeholder="Upload File" aria-describedby="fileHelpId" />
                        @error('loc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6  mt-2">
                        <vue-inputselect type="text" label="Priority" name="priority" :options="[5,4,3,2,1,0]" value="{{ old('priority')??$data->data['priority']??1 }}" placeholder="Priority"></vue-inputselect>
                    </div>
                    <div class="col-12 col-md-6 mt-2">
                        <vue-inputvselect label="Status" name="status" :options="[{'id':1,'name':'Active'},{'id':0,'name':'Disabled'}]" :value="{{ old('status')??$data->status??1 }}" placeholder="Status"></vue-inputvselect>
                    </div>
                    <div class="col-12 mt-2">
                        <vue-admin-master-subcategory :options="{{ json_encode($options) }}" :catid="{{ json_encode(old('catid')??$data->data['catid']??'') }}" :subcatid="{{ json_encode(old('subcatid')??$data->data['subcatid']??'') }}"></vue-admin-master-subcategory>
                    </div>
                </div>
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
