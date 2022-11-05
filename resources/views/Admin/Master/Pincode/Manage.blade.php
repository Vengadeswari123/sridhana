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


                 <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="state" name="state" id="state" error="{{ $errors->first('state')??'' }}" value="{{ old('state')??$data->data['state']??'' }}" label="State" placeholder="State">
                    </vue-inputtext>
                  <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="country" name="country" id="country" error="{{ $errors->first('country')??'' }}" value="{{ old('country')??$data->data['country']??'' }}" label="Country" placeholder="Country">
                    </vue-inputtext>
                 <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="pincode" name="pincode" id="pincode" error="{{ $errors->first('pincode')??'' }}" value="{{ old('pincode')??$data->data['pincode']??'' }}" label="Pincode" placeholder="Pincode">
                  </vue-inputtext>
                 <vue-inputtext required="1" disabled="0" type="text" class="col-12 col-sm-12 mt-2 col-md-6" key="cost" name="cost" id="cost" error="{{ $errors->first('cost')??'' }}" value="{{ old('cost')??$data->data['cost']??'' }}" label="Cost" placeholder="Cost">
                        </vue-inputtext>
                    <div class="col-12 col-md-6 mt-2">
                        <vue-inputvselect label="Status" name="status" :options="[{'id':1,'name':'Active'},{'id':0,'name':'Disabled'}]" :value="{{ old('status')??$data->status??1 }}" placeholder="Status"></vue-inputvselect>
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





