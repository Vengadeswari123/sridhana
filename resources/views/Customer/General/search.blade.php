@extends('layouts.app')
@section('content')
<product-search
    :options="{{ json_encode($options) }}"
    :data="{{ json_encode($data) }}"
    :typedata="{{ json_encode($typedata) }}"
></product-search>

@endsection
