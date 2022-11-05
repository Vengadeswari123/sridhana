@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card shadow p-3-e" style="border-radius: 15px;">
      <div class="container-fluid bg-white">
          <h5 class="font-prim fw-bold color-eblue">
              View Details
          </h5>
          <div class="col-12">
            <h4 class="text-center fw-bold">Goverment of Puducherry</h4>
            <h5 class="text-center ">Department of Fisheries and Fishermen Welfare</h5>
            <h5 class="mt-4">Gender Details</h5>
            <div class="row mt-4 bg-light py-2">
              <div class="col-2">
               <span class="color-eblue fw-bold"> Name: </span>  Ponnambalam
              </div>
              <div class="col-2">
               <span class="color-eblue fw-bold"> Mobile: </span>
              </div>
            </div>
          </div>
          <div class="col-12 mt-4">
            <h5 class="">Family Details</h5>

            <table class="table">
              <thead>
                  <tr>
                      <th>Sl.No</th>
                      <th>Aadhar Number</th>
                      <th>Member Name</th>
                      <th>Relationship</th>
                      <th>Percentage of Amount</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>XXXXXXXX3861</td>
                      <td>Thangammal</td>
                      <td> Wife </td>
                      <td> 0</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>XXXXXXXX0746</td>
                      <td>Retinasamy</td>
                      <td> Self </td>
                      <td> 0</td>
                  </tr>
              </tbody>
          </table>
          </div>
          <div class="col-12 mt-4">
            <h5 class="">Awarded Schemes</h5>

            <table class="table">
              <thead>
                  <tr>
                      <th>Sl.No</th>
                      <th>Aadhar Number</th>
                      <th>Member Name</th>
                      <th>Relationship</th>
                      <th>Percentage of Amount</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>XXXXXXXX3861</td>
                      <td>Thangammal</td>
                      <td> Wife </td>
                      <td> 0</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>XXXXXXXX0746</td>
                      <td>Retinasamy</td>
                      <td> Self </td>
                      <td> 0</td>
                  </tr>
              </tbody>
          </table>
          </div>
        </div>
    </div>
</div>

@endsection
