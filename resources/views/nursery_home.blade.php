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
            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s1.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Banarsi </p>
            </a>

            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s2.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Chanderi </p>
            </a>

            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s3.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Linen </p>
            </a>

            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s4.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Kora </p>
            </a>
            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s5.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Silk </p>
            </a>

            <a href="#" class="col-lg-4 col-6 mt-3">
                <img src="/storage/sri/s6.jpg" alt="" class="shadow-cus w-100">
                <p class="font-prim mt-2 text-center"> Kancheepuram </p>
            </a>

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
            <a href="#" class="col-md-6 mt-3 sricata position-relative">
                <img src="/storage/sri/f1.jpg" alt="" class="shadow-cus w-100">
                <div class="btn btn-sri" style="border-radius: 3px">Shop Classic Kurtas</div>
            </a>

            <a href="#" class="col-md-6 mt-3 sricata position-relative">
                <img src="/storage/sri/f2.jpg" alt="" class="shadow-cus w-100">
                <div class="btn btn-sri" style="border-radius: 3px">Shop Bridal Sarees</div>
            </a>
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


    <div class="container-fluid px-4 px-lg-5 prod_list">
        <h4 class="mb-4">Bestsellers</h4>
        <div class="row">
            <div class="col-lg-3 col-md-6 mt-4 prod_item position-relative">

                <a href="" class="btn heart btn-danger"><i class="fas fa-heart"></i></a>

                <a href="" class="d-block">
                    <img src="/storage/sri/p1.webp" alt="" class="w-100">
                    <h6 class="mt-3 text-truncate">Embroidered Border Art Silk Saree in Pink</h6>
                    <h6 class="fw-bold"><span style="text-decoration: line-through" class="text-muted"> Rs.2624</span>
                        <span class="text-success"> Rs.2624 </span>
                    </h6>
                </a>
                <ul class="navbar-nav flex-row align-items-center justify-content-between">
                     <li>
                        <a href="#" style="border-radius: 5px" class="btn btn-sri"><span class="small"> Add to
                                Cart </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                    </li>

                  <li class="rating">
                    <i class="fas fa-star full"></i>
                    <i class="fas fa-star full"></i>
                    <i class="fas fa-star full"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </li>

                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 prod_item position-relative">

                <a href="" class="btn heart btn-danger"><i class="fas fa-heart"></i></a>

                <a href="" class="d-block">
                    <img src="/storage/sri/p2.webp" alt="" class="w-100">
                    <h6 class="mt-3 text-truncate">Red Banarasi Saree In Silk With Weaved Floral Jaal</h6>
                    <h6 class="fw-bold">Rs.2624</h6>
                </a>

                <ul class="navbar-nav flex-row align-items-center justify-content-between">

                  <li>
                      <a href="#" style="border-radius: 5px" class="btn btn-sri"><span class="small"> Add to
                              Cart </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                  </li>

                  <li class="rating">
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                  </li>

              </ul>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 prod_item position-relative">

                <a href="" class="btn heart btn-danger"><i class="fas fa-heart"></i></a>

                <a href="" class="d-block">
                    <img src="/storage/sri/p3.webp" alt="" class="w-100">
                    <h6 class="mt-3 text-truncate">Hritika Georgette Geometric Digital Printed Saree For Women</h6>
                    <h6 class="fw-bold">Rs.2624</h6>
                </a>

                <ul class="navbar-nav flex-row align-items-center justify-content-between">

                  <li>
                      <a href="#" style="border-radius: 5px" class="btn btn-sri"><span class="small"> Add to
                              Cart </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                  </li>

                  <li class="rating">
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                  </li>

              </ul>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 prod_item position-relative">

                <a href="" class="btn heart btn-danger"><i class="fas fa-heart"></i></a>

                <a href="" class="d-block">
                    <img src="/storage/sri/p4.webp" alt="" class="w-100">
                    <h6 class="mt-3 text-truncate">Luminous Dark Purple Banarasi Linen Saree with Silver Zari Border</h6>
                    <h6 class="fw-bold">Rs.2624</h6>
                </a>

                <ul class="navbar-nav flex-row align-items-center justify-content-between">

                  <li>
                      <a href="#" style="border-radius: 5px" class="btn btn-sri"><span class="small"> Add to
                              Cart </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                  </li>
                  <li class="rating">
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star full"></i>
                      <i class="fas fa-star"></i>
                  </li>

              </ul>
            </div>
        </div>
    </div>
@endsection
