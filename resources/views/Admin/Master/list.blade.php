@extends('layouts.admin')
@section('content')
<div>
    <div class="container-fluid">
        <div class="card mt-4 p-3-e" style="border-radius: 15px">
            <h4 class="font-prim fw-bold color-eblue">
                Master
            </h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb px-4">
                    <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
                    <li class="breadcrumb-item active">Master</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/category">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/subcategory">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Sub Category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/teritarycategory">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Tertiary Category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/collection">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Collection</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/occasion">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Occasion</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/tags">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Tags</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/fabric">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Fabric</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/attribute">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Attribute</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/colour">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Colour</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/emblishment">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Emblishment</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/pattern">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Pattern</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/technique">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Technique</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/CMS">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">CMS</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/pincode">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">Pincode</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12 mt-2">
                    <a href="/admin/master/SEO">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3"><i class="fa fa-list" aria-hidden="true"></i></div>
                                    <div class="col-9">SEO</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
