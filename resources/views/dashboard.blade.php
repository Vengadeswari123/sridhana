@extends('layouts.dashboard',[''])

@section('content')
<div class="container-fluid">
{{ $villagecount }}

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4>Boat Details about to Expire in one month </h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Boat number</th>
                            <th>Insurance number</th>
                            <th>Insured Sum</th>
                            <th>Expiry Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<$upcominginsurance->count();$i++)
                        <tr>
                            <th>{{ $upcominginsurance[$i]->basic['regno'] }}</th>
                            <th>{{ $upcominginsurance[$i]->boatextrainsuranceexpiry->details['insuranceno'] }}</th>
                            <th>{{ $upcominginsurance[$i]->boatextrainsuranceexpiry->details['insuredsum'] }}</th>
                            <th>{{ $upcominginsurance[$i]->boatextrainsuranceexpiry->details['periodto'] }}</th>
                        </tr>
                        @endfor
                    </tbody>

                </table>
            </div>
            <div class="col-6">
                <h4>Village - Gender wise </h4>
                <table class="table w-100">
                    <thead>
                        <tr>
                            <th>Village</th>
                            <th class="text-center">Female</th>
                            <th class="text-center">Male</th>
                            <th class="text-center">TransGender</th>
                        </tr>
                    </thead>
                    @for($i=0;$i<$villagecount->count();$i++)
                    <tr>
                        <th>{{ $villagecount[$i]->name }}</th>
                        <th class="text-center">{{ $villagecount[$i]->beneficiaryvillage[0]->count }}</th>
                        <th class="text-center">{{ $villagecount[$i]->beneficiaryvillage[1]->count }}</th>
                        <th class="text-center">{{ $villagecount[$i]->beneficiaryvillage[2]->count??0 }}</th>
                    </tr>
                    @endfor
                </table>

            </div>
        </div>
    </div>
</div>
</div>


@endsection
