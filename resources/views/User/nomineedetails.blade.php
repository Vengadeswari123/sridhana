@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card shadow p-3-e" style="border-radius: 15px;">
            <h4 class="font-prim fw-bold color-eblue">
                <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                Nominee details
            </h4>
            <h6>Details of nominees, In percentage for receiving the payment in any claim under any of the scheme of the
                Department. In case, If the applicant is deceased</h6>

            <div class="mt-4 col-lg-2 input-edes">
                <label for="inputAddress2" class="form-label my-0">No of Entries
                    <select id="inputState" class="bg-white form-select">
                </label>
                    <option selected>10</option>
                    <option>...</option>
                </select>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Aadhar Number</th>
                        <th>Member Name</th>
                        <th>Relationship</th>
                        <th>Percentage of Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>XXXXXXXX3861</td>
                        <td>Thangammal</td>
                        <td> Wife </td>
                        <td> 0</td>
                        <td> <i class="fa fa-edit btn btn-outline-primary p-2" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>XXXXXXXX0746</td>
                        <td>Retinasamy</td>
                        <td> Self </td>
                        <td> 0</td>
                        <td> <i class="fa fa-edit btn btn-outline-primary p-2" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="min-width:90vw">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <form class="row g-3 form-ecustom">
                        <div class="mt-4 col-lg-6 col-md-6 input-edes">
                            <label for="inputAddress2" class="form-label my-0">Aadhar No.</label>
                            <input type="text" class="bg-white form-control" id="inputAddress2">
                        </div>
                        <div class="mt-4 col-lg-6 col-md-6 input-edes">
                            <label for="inputAddress3" class="form-label my-0">Name</label>
                            <input type="text" class="bg-white form-control" id="inputAddress3">
                        </div>
                        <div class="mt-4 col-lg-3 offset-lg-9 d-grid">
                            <button type="submit" class="btn btn-ecustom"><i class="fas me-2 fa-save"></i> Save & Proceed</button>
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
