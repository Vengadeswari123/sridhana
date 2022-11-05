@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-2 col-2 px-2 px-md-4 px-lg-2 prod-menu mt-4">
                <ul class="navbar-nav">
                    <li class="">
                        <img src="/storage/sri/p1.webp" alt="" class="w-100">
                    </li>
                    <li class="mt-3">
                        <img src="/storage/sri/p2.webp" alt="" class="w-100">
                    </li>
                    <li class="mt-3">
                        <img src="/storage/sri/p3.webp" alt="" class="w-100">
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-10 col-10 prod-img mt-4">
                <img src="/storage/sri/p3.webp" alt="" class="w-100">
            </div>
            <div class="col-lg-6 prod-deets mt-4">
                <h4 class="">Embroidered Border Art Silk Saree in Pink</h4>
                <a href="" class="small text-danger">Saree</a>

                <div class="d-flex mt-2 justify-content-between">
                    <div>
                        <h4 class="fw-bold">Rs. 2398</h4>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <hr>
                <div>
                    <a href="#" style="border-radius: 5px" class="btn btn-sri mt-1"><span class="small"> Add to Cart </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                    <a href="#" style="border-radius: 5px" class="btn btn-danger mt-1"><span class="small"> Add to Wishlist </span><i class=" ms-2 pt-1 fas fa-heart"></i></a>
                    <a href="#" style="border-radius: 5px" class="btn btn-outline-sri mt-1"><span class="small"> Buy Now </span><i class=" ms-2 pt-1 fas fa-shopping-cart"></i></a>
                </div>
                <div class="mt-5">
                    <h6 class="fw-bold">
                        Product Information
                    </h6>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, nulla facere? Enim, aliquam sunt!
                        Inventore deserunt ad pariatur recusandae neque quo ipsum rem illum soluta, maxime id obcaecati
                        fugit ipsa.
                    </p>
                </div>

                <div class="mt-3">
                    <h6 class="fw-bold">
                        Product Specs
                    </h6>
                    <p class="text-muted">
                        Material : Linen <br>
                        Color: Blue
                    </p>
                </div>
            </div>
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


    <div class="container-fluid px-4 mt-5 px-lg-5 pt-2 prod_list">
        <h4 class="mb-0">Similar to the products you love </h4>
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
