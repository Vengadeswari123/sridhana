@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="sm-search d-md-none">
        <div class="btn-group w-100">
            <a href="#" class="btn btn-outline-sri"><i class="fas fa-filter me-2"></i> Filter</a>
            <a href="#" class="btn btn-sri"><i class="fas fa-sort me-2"></i> Sort</a>
          </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-3 col-md-4 sri-search d-none d-md-block">
            <h6 class="mb-4">Filter By</h6>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Fabric
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Linen
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Chanderi
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Silk
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Georgette
                            </label>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      Colors
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <ul class="colors">
                        <li class="" style="--color_list: #7FBCD2"></li>
                        <li class="" style="--color_list: #A5F1E9"></li>
                        <li class="" style="--color_list: #E1FFEE"></li>
                        <li class="" style="--color_list: #FFEEAF"></li>
                        <li class="" style="--color_list: #F5E8C7"></li>
                        <li class="" style="--color_list: #ECCCB2"></li>
                        <li class="chosen" style="--color_list: #DEB6AB"></li>
                        <li class="" style="--color_list: #AC7088"></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Border Size
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Big
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Medium
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Small
                            </label>
                          </div>
                          <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                              Silver
                            </label>
                          </div>
                    </div>
                  </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                      <button class="accordion-button btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Border Size
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                      <div class="accordion-body">
                          <div class="form-check">
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                Big
                              </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                Medium
                              </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                Small
                              </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                Silver
                              </label>
                            </div>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        <div class="col-lg-9 col-md-8 prod_list" style="min-height: 100vh">
            <div class="sort">
                <div><span class="fw-bold">30</span> results found on <span class="text-sri">Blossom</span></div>
                <div class="btn-group dropstart">
                    <button type="button" class="d-none d-md-block btn btn-sm px-4 btn-sri dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Price - High to Low</a></li>
                        <li><a class="dropdown-item" href="#">Price - Low to High</a></li>
                    </ul>
                  </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
                <div class="col-lg-3 col-md-6 mt-3 prod_item position-relative">
    
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
            </div>
        </div>
    </div>
</div>

@endsection