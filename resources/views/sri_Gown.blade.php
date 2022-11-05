@extends('layouts.app')
@section('content')

<div class="container-fluid mt-4">
    <div class="row px-md-5 px-3">
        <div class="col-12">
            <h5 class="">{{ $xdata['title'] }} <span class="text-sri fw-bold small"> </span>  </h5>
        </div>
        @forelse($data as $item)
        <a href="#" class="col-lg-3 col-md-4 col-6 mt-3">
            {{-- <img src="/storage/sri/s1.jpg" alt="" class="shadow-cus w-100"> --}}
            <img src="/{{ $item->data['loc']??'' }}" class="shadow-cus w-100">
            <div class="mt-2">
                <div class="mx-auto font-prim text-center">
                    {{ $item->data['name']??'' }}
                </div>

            </div>
        </a>@empty <th class="text-center" colspan="4">Sorry no information found</th>
        @endforelse
    </div>
</div>
@endsection
