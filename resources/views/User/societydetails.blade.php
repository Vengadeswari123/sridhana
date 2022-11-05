@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-3-e" style="border-radius: 15px;">
        <h4 class="font-prim fw-bold color-eblue">
            Society details
        </h4>
        <form class="row g-3 form-ecustom">
            <div class="mt-4 col-lg-6 col-md-6 input-edes">
              <label for="inputState" class="form-label my-0">Disctrict</label>
              <select id="inputState" class="bg-white form-select">
                <option selected>Choose...</option>
                <option>Pudducherry</option>
                <option>Karikal</option>
              </select>
            </div>
            <div class="mt-4 col-lg-6 col-md-6 input-edes">
              <label for="inputState" class="form-label my-0">Name of Society(FCS/FWCS) </label>
              <select id="inputState" class="bg-white form-select">
                <option selected>Choose...</option>
                <option>Pudducherry</option>
                <option>Karikal</option>
              </select>
            </div>
            <div class="mt-4 col-lg-6 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Membership No.</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-6 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Society Contact Number </label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-6 col-md-6 input-edes">
                <label for="inputAddress2" class="form-label my-0">Contact Person</label>
                <input type="text" class="bg-white form-control" id="inputAddress2">
            </div>
            
            <div class="mt-4 col-lg-3 offset-lg-9 d-grid">
              <button type="submit" class="btn btn-ecustom"><i class="fas me-2 fa-save"></i> Save</button>
            </div>
          </form>
    </div>
</div>

@endsection
