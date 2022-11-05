@extends('layouts.nonav')

@section('content')
<div class="container ecard-cont">
    <div class="card shadow login-ecard">
        <div class="row m-0 h-100">
            <div class="col-lg-6 login-buttons">
                <div class="text-center">
                    <img src="/storage/govt.png" alt="" style="width:3rem">
                    <h6 class="fw-bold">Government of Puducherry</h6>
                    <h6>Department of Fisheries and Fishermen Welfare</h6>
                </div>

                <div class="mt-5">
                    <img src="/storage/pmmsy-logo.png" alt="" style="margin-top: -0.25rem; width:3rem">
                    <h4 class="d-inline fw-bold ms-3"> eFFORTS </h4>
                    <p class="">e-Net for Fisheries and Fishermen Welfare Online Registration and Tracking System</p>
                </div>
                {{-- <div class="d-grid buttons">
                    <a href="/login" class="btn btn-outline-ecustom hovered mt-3 py-2" style="border-radius: 3px">Existing User</a>
                    <a href="/newlogin" class="btn btn-outline-ecustom mt-3 py-2" style="border-radius: 3px">New User</a>
                    <a href="/officiallogin" class="btn btn-outline-ecustom mt-3 py-2" style="border-radius: 3px">Official Login</a>
                </div> --}}
            </div>

            <div class="bg-eblue login-eforms col-lg-6">
                <h3 class="fw-bold">Existing User Login</h3>
                <div class="">
                    <form class="row g-2 pb-3 form-login-ecustom">
                        <div class="mt-4">
                          <label for="inputState" class="form-label my-0">District </label>
                          <select id="inputState" class="bg-white form-select">
                            <option selected>Select ...</option>
                            <option>Pondicherry</option>
                            <option>Karaikal</option>
                            <option>Mahe</option>
                            <option>Yanam</option>
                          </select>
                        </div>
                         <div class="mt-4">
                            <label for="inputAddress2" class="form-label my-0">Last Eight digit Aadhaar (UID) </label>
                            <input type="text" class="bg-white form-control" id="inputAddress2">
                        </div>
                         <div class="mt-4">
                            <label for="inputState" class="form-label my-0">Category of Applicant  </label>
                            <select id="inputState" class="bg-white form-select">
                              <option selected>Choose...</option>
                              <option>Marine Fishing</option>
                              <option>Inland Fishing</option>
                              <option>Fish Farmer</option>
                              <option>Allied Fisheries Activity</option>
                              <option>Other</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="mt-4 d-grid mb-3">
                  <button type="submit" class="btn btn-outline-light"> Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                         <div class="row mb-3">

                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">

                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                     <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
