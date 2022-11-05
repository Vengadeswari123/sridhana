
@extends('layouts.setting')

@section('content')

<div class=" container editted">
    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">
            <a href="# " class="p-3 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                <span class="ms-2 px-2 text-success border-start border-2 border-success">Phone No</span></a>
        </div>

        <div class="col-12">
            <h5>Phone NO</h5>
            <input type="text" class="form-control" name="phonrNo">
            <div>
                <form action="/form/p" class=" my-3 float-end btn btn-success  ">
                    {{--  {{ $data->name }}  --}}
                    <i class="fa-solid fa-pencil"></i>Edit phone

            </form>
        </div>
        </div>
    </div>
</div>
@endsection
