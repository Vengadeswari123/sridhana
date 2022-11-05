@extends('layouts.app')
@section('content')
<div>
    {{ $data->data['name'] }}
    <br>
    <br>
    <br>
    {{ $data->data['description'] }}
</div>
@endsection
