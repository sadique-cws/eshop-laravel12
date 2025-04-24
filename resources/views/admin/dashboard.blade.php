@extends('admin.adminparent')

@section('title', 'Dashboard')


@section("content")

<div class="container mt-5">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h2>Manage Products</h2>

                    <div class="d-flex gap-3">
                        <a href="" class="btn btn-success">Insert</a>
                        <a href="" class="btn btn-dark">Manage</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h2>Manage Category</h2>

                    <div class="d-flex gap-3">
                        <a href="{{ route("admin.manageCategory") }}" class="btn btn-success">Insert</a>
                        <a href="{{ route("admin.manageCategory") }}" class="btn btn-dark">Manage</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h2>Manage Users</h2>

                    <div class="d-flex gap-3">
                        <a href="" class="btn btn-success">Insert</a>
                        <a href="" class="btn btn-dark">Manage</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h2>Manage Order</h2>

                    <div class="d-flex gap-3">
                        <a href="" class="btn btn-success">Insert</a>
                        <a href="" class="btn btn-dark">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
