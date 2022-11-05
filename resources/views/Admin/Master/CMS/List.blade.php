@extends('layouts.admin')
@section('content')
<div>
    <div class="container-fluid">
        <div class="card mt-4 p-3-e" style="border-radius: 15px">
            <h4 class="font-prim fw-bold color-eblue">
                <a href="{{ $xdata['url'] }}/add" class="btn float-end btn-primary">
                    <i class="fa fa-plus" aria-hidden="true"></i></a>
                {{ $xdata['title'] }}
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item"><a href="/admin/master">Master</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $xdata['title'] }}
                    </li>
                </ol>
            </nav>
            <form method="get">
                <div class="mt-4 col-lg-4">
                    Entries per Page
                    <vue-inputselect type="text" name="perPage" class="w-50" :options="[5,10,15,25,50]" :value="{{ request()->get('perPage')??10 }}" placeholder="perPage"></vue-inputselect>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th style="width:40%">Title</th>
                            <th style="width:10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <vue-inputtext type="text" name="name" id="name" value="{{ request()->get('name')??'' }}" placeholder="Title">
                                </vue-inputtext>
                            </td>

                            <td>
                                <a href="{{ $xdata['url'] }}" class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i> </a>
                                <button type="submit" class="btn btn-outline-primary"><i class="fa fa-filter" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        @forelse($data as $item)
                        <tr>
                            <td>
                                {{ $item->data['name']??'' }}</td>
                            {{--  <td>
                                <button class="btn {{ $item->status?'btn-success':'btn-danger' }}">
                                    {{ $item->status?'Active':'Disabled' }}</td>
                            </button>  --}}
                        <td>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a href="{{$xdata['url']}}/view/{{$item->id}}" class="btn color-eblue border-0"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn color-eblue border-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <li>
                                                <a class="dropdown-item" href="{{$xdata['url']}}/edit/{{$item->id}}"><i class="fa text-prim fa-edit fa-fw" aria-hidden="true"></i>
                                                    Edit Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{$xdata['url']}}/delete/{{$item->id}}" onclick="return confirm('Are you sure?')"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty <th class="text-center" colspan="4">Sorry no information found</th>
                         @endforelse
                    </tbody>
                </table>
            </form>
            <div class="d-flex justify-content-end">
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection
