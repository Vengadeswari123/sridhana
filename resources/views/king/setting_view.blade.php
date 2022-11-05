@extends('layouts.setting')

@section('content')
<div class=" container justify-content-center login-edit px-3 w-100">

    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">

        <h4>Login&Security</h4>
        </div>
        <div class="col-12 border rounded bg-light pt-4 w-100">
            <ul class="p-0 m-0" style="list-style: none">
                <li>
                    <div class=" edit-page w-100">
                        {{--  <a href="/new/edit/{{$data->id}}" class="btn mx-1 float-end btn-primary">  --}}
                            <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                        <h5><b>Name</b> </h5>
                       {{ $data->name }}

                    </div>
                </li>
                <hr>
                <li>
                    <div class=" edit-page  w-100">

                        <a href="/new/edit/{id}" class="btn mx-1 float-end btn-primary">
                            <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                        <h5><b>Phone:</b></h5>
                        {{ $data->phoneNO }}

                    </div>
                </li>
                <hr>

                <li>
                    <div class=" edit-page  w-100">
                        <a href="/new/edit/{id}" class="btn mx-1 float-end btn-primary">
                            <i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
                        <h5><b>email:</b></h5>
                        {{ $data->email }}

                    </div>
                </li>
                <hr>
                {{--  <div class=" edit-page  w-100  pb-4">

                    <a href="#" class="float-end btn link-success text-muted">
                        <i class="fa-solid fa-pencil"></i>Edit</a>
                    <h5><b>Password:</b></h5>
                </div>  --}}
            </ul>
        </div>
    </div>
</div>
@endsection
