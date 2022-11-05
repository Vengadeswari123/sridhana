@extends('layouts.setting')

@section('content')

<div class=" container editted">
    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">
            <a href="/new/edit/{id}" class="p-3 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
        </div>

        <div class="col-12">
            <h5>Name</h5>

            <input type="text" class="form-control" name="name" value="{{ $data->name }}" >
            <form action="/new/edit/{{$data->id}}" method="POST" class=" my-3 float-end btn btn-success  ">
                <div>
                    <i class="fa-solid fa-pencil"></i>Edit name</div>
            </form>
        </div>
    </div>

    <div class="col-12 ">
        <h5>Phone</h5>

        <input type="text" class="form-control" name="phoneNo" value="{{ $data->phoneNO }}">
        <div><form action="/new/edit/{{$data->id}}" method="POST" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit phone</div>
        </form>
    </div>
    </iv>

    <div class="col-12">
        <h5>Email</h5>
        <input type="text" class="form-control" name="email" value="{{ $data->email }}">
        <form action="/new/edit/{{$data->id}}" method="POST" class=" my-3 float-end btn btn-success  ">
            <div>
                <button type="submit" class="p-3 btn-rounted">Submit</button>
                {{--  <i class="fa-solid fa-pencil"></i>Edit email</a></div>  --}}
        </form>
    </div>
</div>
 {{--  <br>   <button type="submit" class="p-3 btn-rounted">Submit</button>  --}}

{{-- <div class="row ">
    <div class="my-4 py-3  bg-light  col-12">
        <a href="# " class="p-3 fs-5">profile<span
                class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
            <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
    </div>
    <div class="col-12">
        <h5>Password</h5>
        <input type="text" class="form-control" name="name">
        <div><a href="#" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit password</a></div>
    </div>
</div> --}}
</div>



@endsection
