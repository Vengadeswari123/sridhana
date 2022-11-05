@extends('layouts.nonav')

@section('content')
<div class="container ecard-cont position-relative">
    <div class="card shadow login-ecard">
        <div class="row m-0 login-erow h-100">
            <div class="col-lg-6 login-buttons">
                <div class="text-center mb-0">
                    <img src="/storage/govt.png" alt="" style="width:3rem">
                    <h6>Department of Fisheries and Fishermen Welfare</h6>
                </div>

                <div class="mt-xl-5 mt-0">
                    <img src="/storage/pmmsy-logo.png" alt="" style="margin-top: -0.25rem; width:3rem">
                    <h4 class="d-inline fw-bold ms-3"> eFFORTS </h4>
                    <p class="">e-Net for Fisheries and Fishermen Welfare Online Registration and Tracking System</p>
                </div>
                <img src="/storage/login1.jpg" alt="" class="w-100 mt-auto d-xl-none d-xxl-block img-log">

                {{-- <div class="d-grid buttons">
                    <a href="/login" class="btn btn-outline-ecustom mt-3 py-2" style="border-radius: 3px">Existing User</a>
                    <a href="/newlogin" class="btn btn-outline-ecustom mt-3 py-2" style="border-radius: 3px">New User</a>
                    <a href="/officiallogin" class="btn btn-outline-ecustom hovered mt-3 py-2" style="border-radius: 3px">Official Login</a>
                </div> --}}
            </div>

            <div class="bg-eblue login-eforms col-lg-6">
                <div>
                    <h3 class="fw-bold">Official Login</h3>
                </div>
                <div class="">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mt-4">
                            <label for="email" class="form-label my-0">Login ID </label>
                            <input id="email" type="email" name="email" class="bg-white form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="mt-4">
                            <label for="password" class="form-label my-0">Password </label>
                            <input id="password" name="password" type="password" class="bg-white form-control @error('password') is-invalid @enderror" id="password" required>
                             @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                <div class="my-4">
                    <label for="password" class="form-label my-0">Captcha </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">w475h</span>
                        <input type="text" class="form-control" placeholder="Enter Captcha" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      {{-- <input id="password" name="password" type="password" class="bg-white form-control" id="password" required> --}}
                </div>
                        <div class="row mt-4 mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                     <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="mt-4 d-grid">
                            <button type="submit" class="btn btn-outline-light"> Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
