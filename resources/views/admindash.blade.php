@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="card mt-4 p-3-e" style="border-radius: 15px;">
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

    <div class="card mt-4 p-3-e" style="border-radius: 15px;">
        <h4 class="font-prim fw-bold color-eblue">
            <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            Schemes Awarded
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


@endsection
