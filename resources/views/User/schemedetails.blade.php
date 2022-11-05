@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-3-e" style="border-radius: 15px;">
        <h4 class="font-prim fw-bold color-eblue">
            Personal details
        </h4>
        <form class="row g-3 form-ecustom">
            <div class="mt-4 col-lg-3 col-md-4 input-edes">
              <label for="inputAddress2" class="form-label my-0">Aadhar No.</label>
              <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            <div class="mt-4 col-lg-3 col-md-4 input-edes">
              <label for="inputAddress3" class="form-label my-0">Name</label>
              <input type="text" class="bg-white form-control" id="inputAddress3">
            </div>
            <div class="mt-4 col-lg-2  col-md-4 input-edes">
              <label for="inputAddress" class="w-100 form-label my-0">Gender</label>
              <button class="btn btn-outline-ecustom me-2" style="border-radius: 8px">M</button>
              <button class="btn btn-outline-ecustom me-2" style="border-radius: 8px">F</button>
              <button class="btn btn-outline-ecustom hovered" style="border-radius: 8px">T</button>
            </div>
            <div class="mt-4 col-lg-3 col-md-4 input-edes">
              <label for="inputAddress2" class="form-label w-100 my-0">DOB</label>
              <input type="text" class="w-75 d-inline bg-white form-control" id="inputAddress2" placeholder="DD | MM | YYYY">
              <i class="fas fa-calendar text-muted ms-3"></i>
            </div>
            <div class="mt-4 col-lg-1 col-md-3 input-edes">
              <label for="inputCity" class="form-label my-0">Age</label>
              <input type="text" class="bg-white form-control" disabled placeholder="42" id="inputCity">
            </div>
            
            <div class="mt-4 col-lg-3 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Father's name</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            <div class="mt-4 col-lg-3 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Mother's name</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>  
            <div class="mt-4 col-lg-3 col-md-4 input-edes">
              <label for="inputState" class="form-label my-0">Marital Status</label>
              <select id="inputState" class="bg-white form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="mt-4 col-lg-3 col-md-4 input-edes">
                <label for="inputAddress2" class="form-label my-0">Spouse name</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-4 input-edes">
                <label for="inputAddress2" class="form-label my-0">Education</label>
                <select id="inputState" class="bg-white form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
            </div>
            
            <div class="mt-4 col-lg-4 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Mobile no.</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-4 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Email ID</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            
            <div class="mt-4 col-lg-4 col-md-4 input-edes">
                <label for="inputAddress2" class="form-label my-0">Religion</label>
                <select id="inputState" class="bg-white form-select">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
            </div>
            
            <div class="mt-4 col-md-4 col-md-4 input-edes">
                <label for="inputAddress2" class="form-label my-0">Caste category</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-4 col-md-4 input-edes">
                <label for="inputAddress2" class="form-label my-0">Sub Caste</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            <div class="mt-4 col-lg-3 offset-lg-9 d-grid">
              <button type="submit" class="btn btn-ecustom"><i class="fas me-2 fa-save"></i> Save</button>
            </div>
          </form>
    </div>
</div>

@endsection
