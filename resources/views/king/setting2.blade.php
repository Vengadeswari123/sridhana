@extends('layouts.setting12')

@section('content')
<div class=" container new-addresslink py-3 ">

    <h1 class="text-success"><b>Register</b> </h1>
    <form action="/new" method="post" class="p-2"> @csrf


        <div class="mb-3 w-100 ">
            <h5 class="form-h5">Name</h5>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="">
        </div>
        <div class="mb-3 w-100">
            <h5 for="" class="form-h5">Phone Number</h5>
            <input type="text" class="form-control" placeholder="" name="phoneNo">
        </div>
        <div class="mb-3 w-100">
            <h5 for="" class="form-h5">Email</h5>
            <input type="text" class="form-control" placeholder="" name="email">
        </div>
        {{-- <div class="mb-3 w-100">
            <h5 for="" class="form-h5">Password</h5>
            <input type="text" class="form-control" placeholder="" name="phone-no">
        </div>
        <div class="mb-3 w-100">
            <h5 for="" class="form-h5">conform password</h5>
            <input type="text" class="form-control" placeholder="" name="phone-no">
        </div> --}}


        <div class="form-check py-3">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <h5 class="form-check-h5" for="flexCheckDefault">
                Subscribe to Newsletter
            </h5>
        </div>
        <button type="submit" class="btn btn-success w-100 text-center ">Sumbit</button>
    </form>
</div>



@endsection
