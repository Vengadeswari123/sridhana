@extends('layouts.app')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/storage/sri/home1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/storage/sri/home2.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container px-lg-5 px-3 my-5 roun">
    <div class="row px-md-5 px-3">
        <div class="col-12">
            <h4 class="">Our Collections</h4>
        </div>
        @for($i=0;$i<$data['collection']->count();$i++)
            <a href="/collection/{{ $data['collection'][$i]->slugurl }}" target="blank" class="col-lg-4 col-6 mt-3">
                <img src="/{{ $data['collection'][$i]->loc }}" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center">{{ $data['collection'][$i]->name }} </p>
            </a>
            @endfor
    </div>
</div>

<div class="home_feat container-fluid bg-srior py-5 my-5">
    <div class="row text-center w-lg-75 mx-auto">
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-packing.svg" alt="" class="w-25">
            <p class="small text-white">Sanitised Packaging</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-fragrance.svg" alt="" class="w-25">
            <p class="small text-white">Unique Fragrance</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-natural.svg" alt="" class="w-25">
            <p class="small text-white">Breathable Fabric</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-quality.svg" alt="" class="w-25">
            <p class="small text-white">Superior Quality</p>
        </div>
    </div>
</div>


<div class="container pb-5 roun sri-feat">
    <div class="row px-3 px-md-0 px-lg-5">
        @for($i=0;$i<$data['category']->count();$i++)
            <a href="/category/{{ $data['category'][$i]->slugurl }}" class="col-md-6 mt-3 sricata position-relative">
                <img src="/{{ $data['category'][$i]->loc }}" alt="" class="shadow-cus w-100">
                <div class="btn btn-sri" style="border-radius: 3px">{{ $data['category'][$i]->name }}</div>
            </a>
       @endfor
    </div>
</div>

<div class="home_feat container-fluid bg-sripur py-5 my-5">
    <div class="row text-center w-lg-75 mx-auto">
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-packing.svg" alt="" class="w-25">
            <p class="small text-white">Sanitised Packaging</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-fragrance.svg" alt="" class="w-25">
            <p class="small text-white">Unique Fragrance</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-natural.svg" alt="" class="w-25">
            <p class="small text-white">Breathable Fabric</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="/storage/sri/icons/noun-quality.svg" alt="" class="w-25">
            <p class="small text-white">Superior Quality</p>
        </div>
    </div>
</div>

<product-carousellist title="Best Sellers" link='/best' :data="{{ json_encode($data['newarrivals']) }}"></product-carousellist>
<product-carousellist title="Discount Products" link='/discount' :data="{{ json_encode($data['distcountproducts']) }}"></product-carousellist>
@endsection
