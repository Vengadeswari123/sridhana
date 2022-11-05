@extends('layouts.setting')

@section('content')
{{-- addresspage --}}
    {{-- <div class="container content-center overflow-hidden">
        <div class="py-2 ">
            <a href="#" class="pe-4 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Your
                    Address</span></a>
            <h2><b>Your address</b> </h2>
            <div class="address  border shadow w-50 text-center py-4 my-5  "><img
                    src="/storage/nursery/undraw_address_re_yaoj.svg" class="w-75 " alt="">
                <div class="newaddress text-center py-2">

                    <a href="#" class="text-success  text-dicretion-none fs-5 py-4">Add New Address</a>
                </div>
            </div>
        </div>
    </div> --}}
 <div class=" container new-addresslink py-3 ">
        <div class=" bg-light">
          <span class="pe-2 fs-5 " > profile</span>  <span  class="pe-2 fs-5 ms-2 px-2  border-start border-2 border-dark">New profile</span> <a href="#" class="pe-4 fs-5"><span class=" ms-2 px-2 text-success border-start border-2 border-dark">
                    Your Address</span></a>
            <h2 class="py-3"><b>Your address</b> </h2>  </div>

        <form class="mt-3 border rounded p-4">
            <p>Click on <i class="fa-solid fa-magnifying-glass text-success"></i> to auto fill Country,state,city based on
                pincode</p>

            <div class="mb-3">
                <h5  class="form-h5">Name</h5>
                <input type="email" class="form-control" id="name" name="name" aria-describedby="">
            </div>
            <div class="mb-3">
                <h5 for="" class="form-h5">Phone Number</h5>
                <input type="text"class="form-control" placeholder="" name="phone-no">
            </div>
            <div class="mb-3"> <h5  class="form-h5">Pin code</h5>
               <div> <a href="#" class="btn py-1 px-4 border border-success float-end ">
                <i  class="fa-solid fa-magnifying-glass text-success"></i>
               </a><input type="text"class="form-control w-75" placeholder="">


                <div>Please click the search button to autofill City, State and Country
                </div></div>
            </div>

            <div class="row gx-4 pb-4">
                <div class="col-4">
                    <div class="py-1 ">


                        <h5  class="form-h5">Country</h5> <input type="text"
                            class="form-control"placeholder="" name="country">
                    </div>
                </div>
                <div class="col-4">
                    <div class="py-1">
                        <h5  class="form-h5">State</h5> <input type="text"class="form-control"
                            placeholder="" name="state">
                    </div>
                </div>
                <div class="col-4">
                    <div class="py-1">
                        <h5 for="input" class="form-h5">City</h5> <input type="text"class="form-control"
                            placeholder="" name="city">
                    </div>
                </div>

            </div>
            <div class="mb-3"><h5 class="form-h5">Flat, House no., Building, Company,
                    Apartment</h5>
                <input type="text"class="form-control" placeholder="" name="flat">
            </div>
            <div class="mb-3"> <h5 class="form-h5">Area, Street, Sector, Village</h5>
                <input type="text"class="form-control" placeholder="" name="street">
            </div>
            <div class="mb-3"> <h5 class="form-h5"> Landmark</h5>
                <input type="text"class="form-control" placeholder="" name="landmark">
            </div>
            <div class="form-check py-3">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <h5 class="form-check-h5" for="flexCheckDefault">
                    Make Address Default
                </h5>
            </div>
            <button class="btn btn-success">new address</button>
        </form>
    </div>
    {{-- end --}}
    <div class=" container justify-content-center login-edit px-3 w-100">

        <div class="row ">
            <div class="my-4 py-3  bg-light  col-12">
                <a href="#" class=" fs-5">profile<span
                        class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span></a>
            </div>
            <div class="col-12 border rounded bg-light pt-4 w-100">
                <ul class="p-0 m-0" style="list-style: none">
                    <li>
                        <div class=" edit-page w-100">
                            <a href="#" class=" float-end btn link-success text-muted">
                                <i class="fa-solid fa-pencil "></i>Edit</a>
                            <h5><b>Name:</b> </h5>
                            Raj

                        </div>
                    </li>
                    <hr>
                    <li>
                        <div class=" edit-page  w-100">

                            <a href="#" class="float-end btn link-success text-muted">
                                <i class="fa-solid fa-pencil"></i>Edit</a>
                            <h5><b>Phone:</b></h5>
                            6345678956

                        </div>
                    </li>
                    <hr>

                    <li>
                        <div class=" edit-page  w-100">

                            <a href="#" class="float-end btn link-success text-muted">
                                <i class="fa-solid fa-pencil"></i>Edit</a>
                            <h5><b>email:</b></h5>
                            vanmathikumar99@gmail.com

                        </div>
                    </li>
                    <hr>
                    <div class=" edit-page  w-100  pb-4">

                        <a href="#" class="float-end btn link-success text-muted">
                            <i class="fa-solid fa-pencil"></i>Edit</a>
                        <h5><b>Password:</b></h5>

                </ul>
            </div>
        </div>
    </div>

<div class=" container editted">
    <div class="row ">
        <div class="my-4 py-3  bg-light  col-12">
            <a href="# " class="p-3 fs-5">profile<span
                    class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                     <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
        </div>

        <div class="col-12">
            <h5>Name</h5>
            <input type="text"class="form-control" name="name">
            <div><a href="#" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit name</a></div>
        </div> </div>

        <div class="row  ">
            <div class="my-4 py-3  bg-light  col-12">
                <a href="# " class="p-3 fs-5">profile<span
                        class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                         <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
            </div>
        <div class="col-12 ">
            <h5>Phone</h5>
            <input type="text"class="form-control" name="name">
            <div><a href="#" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit phone</a></div>
        </div></div>
        <div class="row ">
            <div class="my-4 py-3  bg-light  col-12">
                <a href="# " class="p-3 fs-5">profile<span
                        class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                         <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
            </div>
        <div class="col-12">
            <h5>Email</h5>
            <input type="text"class="form-control" name="name">
            <div><a href="#" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit email</a></div>
        </div></div>
        <div class="row ">
            <div class="my-4 py-3  bg-light  col-12">
                <a href="# " class="p-3 fs-5">profile<span
                        class=" ms-2 px-2 text-success border-start border-2 border-success">Login & Security</span>
                         <span class="ms-2 px-2 text-success border-start border-2 border-success">Name </span></a>
            </div>
        <div class="col-12">
            <h5>Password</h5>
            <input type="text"class="form-control" name="name">
            <div><a href="#" class=" my-3 float-end btn btn-success  ">
                <i class="fa-solid fa-pencil"></i>Edit password</a></div>
        </div></div>
</div>



@endsection
