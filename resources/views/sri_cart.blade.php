@extends('layouts.app')
@section('content')



<div class="container-fluid px-lg-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-3">
      <h5 class="mt-5">Divyadharshini</h5>
      <hr class="my-0" style="border-bottom: 1px solid var(--sri_pink); opacity: 0.8;">
      <p class=" mt-2 text-muted small text-uppercase">Cart</p>
      <div class="card border-0 card-body">
        <table class="text-end">
          <tr>
            <td><span class="small">Sub Total</span></td>
            <td>7835</td>
          </tr>
          <tr>
            <td><span class="small">Discount</span></td>
            <td>- 835</td>
          </tr>
          <tr class="text-sri fw-bold">
            <td><span class="small">Total</span></td>
            <td>7035</td>
          </tr>
        </table>
      </div>
      <button class="btn btn-sri w-100 mt-4">Proceed to Checkout</button>
    </div>
    <div class="col-lg-9 col-md-12 mb-3 sri_cart">
      <div class="table-responsive">

        <table class="table-borderless mt-5">
          <tr style="border-bottom: 1px solid rgb(200, 200, 200)">
            <td style="width: 15%">Product</td>
            <td style="width: 40%"></td>
            <td style="width: 15%" class="text-center">Unit</td>
            <td style="width: 15%" class="text-center">Qty</td>
            <td style="width: 15%" class="text-end">Total</td>
          </tr>
          <tr class="align-top text-center">

            <td>
              <img src="/storage/sri/p1.webp" alt="" class="w-100">
            </td>
            <td class="text-start">
              <h6>Olive and pink buttis silk saree with Kanchipuram</h6>
            </td>
            <td>
              243
            </td>
            <td>
              <div class="qty-container">
                <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty" />
                <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
              </div>
            </td>
            <td class="text-end">
              729
            </td>
          </tr>

          <tr class="align-top text-center">

            <td>
              <img src="/storage/sri/p2.webp" alt="" class="w-100">
            </td>
            <td class="text-start">
              <h6> PURPLE and ROYAL BLUE BUTTIS SILK Saree with KANCHIPURAM</h6>
            </td>
            <td>
              243
            </td>
            <td>
              <div class="qty-container">
                <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty" />
                <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
              </div>
            </td>
            <td class="text-end">
              729
            </td>
          </tr>

          <tr class="align-top text-center">

            <td>
              <img src="/storage/sri/p3.webp" alt="" class="w-100">
            </td>
            <td class="text-start">
              <h6> PINK and BLUE FLORAL JAAL SILK Saree with KANCHIPURAM</h6>
            </td>
            <td>
              243
            </td>
            <td>
              <div class="qty-container">
                <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty" />
                <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
              </div>
            </td>
            <td class="text-end">
              729
            </td>
          </tr>

          <tr class="align-top text-center">

            <td>
              <img src="/storage/sri/p4.webp" alt="" class="w-100">
            </td>
            <td class="text-start">
              <h6> Red Banarasi Saree In Silk With Weaved Flow</h6>
            </td>
            <td>
              243
            </td>
            <td>
              <div class="qty-container">
                <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                <input type="text" name="qty" value="0" class="input-qty" />
                <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
              </div>
            </td>
            <td class="text-end">
              729
            </td>
          </tr>
        </table>
      </div>
      <table class="table-borderless w-100">

        <tr class="text-end" style="border-top: 1px solid rgb(200, 200, 200)">
          <td colspan="3">Sub Total</td>
          <td colspan="2">7835</td>
        </tr>
        <tr class="text-end">
          <td colspan="3">Discount</td>
          <td colspan="2">- 835</td>
        </tr>
        <tr class="text-end text-sri fw-bold">
          <td colspan="3">Total</td>
          <td colspan="2">7035</td>
        </tr>

      </table>
      <button class="btn btn-sri d-grid mt-3 float-end">Proceed to Checkout</button>

    </div>
  </div>
</div>

@endsection