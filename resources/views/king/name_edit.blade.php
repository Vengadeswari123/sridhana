@extends('layouts.setting')

@section('content')

<div class=" container editted">
    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">
            <a href="# " class="p-3 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
        </div>
        <h5 class="">{{ $xdata['title'] }} <span class="text-sri fw-bold small"> </span>  </h5>
    </div>
        <a href="{{ $xdata['url'] }}/{{ $data->data['slugurl']??'' }}" class="col-lg-3 col-md-4 col-6 mt-3">
            {{-- <img src="/storage/sri/s1.jpg" alt="" class="shadow-cus w-100"> --}}
            {{--  <img src="/{{ $item->data['loc']??'' }}" class="shadow-cus w-100">  --}}
            <div class="mt-2">
                <div class="mx-auto font-prim text-center">
                    {{ $data->data['name']??'' }}
                </div>


                    <i class="fa-solid fa-pencil"></i>Edit name

            </form>
        </div>
        </div>
    </div>
</div>
@endsection
