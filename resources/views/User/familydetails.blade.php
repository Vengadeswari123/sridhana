@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow p-3-e" style="border-radius: 15px;">


            <h4 class="font-prim fw-bold color-eblue">
                <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                Family Member details
            </h4>

            <div class="mt-4 col-lg-2">
                <label for="inputAddress2" class="form-label my-0">No of Entries
                  <select id="inputState" class="bg-white form-select">
                    <option selected>10</option>
                    <option>...</option>
                  </select>
                </label>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Aadhar Number</th>
                        <th>Member Name</th>
                        <th>Gender</th>
                        <th>Date Of Birth</th>
                        <th>Qualification</th>
                        <th>Occupation</th>
                        <th>Relationship</th>
                        <th>Mobile Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td><input type="text" class="bg-white form-control" id="inputAddress2"></td>
                        <td> <i class="fa fa-edit btn btn-outline-primary p-2" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>XXXXXXXX3861</td>
                        <td>Thangammal</td>
                        <td>Female</td>
                        <td> 06-06-1957 </td>
                        <td> Others </td>
                        <td> Unemployed </td>
                        <td> Wife </td>
                        <td> </td>
                        <td> <i class="fa fa-edit btn btn-outline-primary p-2" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>XXXXXXXX0746</td>
                        <td>Retinasamy</td>
                        <td>Male</td>
                        <td> 06-06-1949 </td>
                        <td> Others </td>
                        <td> Fisherman </td>
                        <td> Self </td>
                        <td> </td>
                        <td> <i class="fa fa-edit btn btn-outline-primary p-2" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="min-width:90vw">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <form class="row g-3 form-ecustom">
                        <div class="mt-4 col-lg-3 col-md-3 input-edes">
                            <label for="inputAddress2" class="form-label my-0">Aadhar No.</label>
                            <input type="text" class="bg-white form-control" id="inputAddress2">
                        </div>
                        <div class="mt-4 col-lg-3 col-md-3 input-edes">
                            <label for="inputAddress3" class="form-label my-0">Name</label>
                            <input type="text" class="bg-white form-control" id="inputAddress3">
                        </div>
                         <div class="mt-4 col-lg-3 input-edes">
                            <label for="gender" class="form-label my-0">Gender</label>
                            <select id="gender" class="bg-white form-select">
                                <option selected>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Transgender</option>
                            </select>
                        </div>
                        <div class="mt-4 col-lg-2 col-md-3 input-edes">
                            <label for="inputAddress2" class="form-label w-100 my-0">DOB</label>
                            <input type="text" class="w-75 d-inline bg-white form-control" id="inputAddress2"
                                placeholder="DD | MM | YYYY">
                            <i class="fas fa-calendar text-muted ms-3"></i>
                        </div>
                        <div class="mt-4 col-lg-1 col-md-2 input-edes">
                            <label for="inputCity" class="form-label my-0">Age</label>
                            <input type="text" class="bg-white form-control" disabled placeholder="42" id="inputCity">
                        </div>
                         {{-- <div class="mt-4 col-lg-3 col-md-3 input-edes">
                            <label for="inputAddress2" class="form-label my-0">Spouse name</label>
                            <input type="text" class="bg-white form-control" id="inputAddress2">
                        </div> --}}
                         <div class="mt-4 col-lg-4 input-edes">
                            <label for="inputAddress2" class="form-label my-0">Education</label>
                            <select id="inputState" class="bg-white form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                         <div class="mt-4 col-lg-4 col-md-4 input-edes">
                            <label for="inputState" class="form-label my-0">Marital Status</label>
                            <select id="inputState" class="bg-white form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mt-4 col-lg-4 col-md-4 input-edes">
                            <label for="inputAddress2" class="form-label my-0">Mobile no.</label>
                            <input type="text" class="bg-white form-control" id="inputAddress2">
                        </div>
                        <div class="mt-4 col-lg-4 col-md-4 input-edes">
                            <label for="inputState" class="form-label my-0">Relation Ship</label>
                            <select id="inputState" class="bg-white form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="mt-4 col-lg-4 col-md-4 input-edes">
                            <label for="inputState" class="form-label my-0">Professional Details</label>
                            <select id="inputState" class="bg-white form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>


                         <div class="mt-4 col-lg-3 offset-lg-9 d-grid">
                            <button type="submit" class="btn btn-ecustom"><i class="fas me-2 fa-save"></i> Save</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
