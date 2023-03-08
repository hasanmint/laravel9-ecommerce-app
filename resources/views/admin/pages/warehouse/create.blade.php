@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">Create/Warehouse</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!--end col-->

        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 card-title flex-grow-1">Create  Warehouse</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('warehouse.index') }}" class="btn btn-primary"><i
                                        class="align-middle bx bx-minus"></i>
                                    Back</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="post" action="{{ route('warehouse.store') }}">
                                        @csrf



                                        <!-- Sub warehouse Name -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Warehouse Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder=" warehouse Name" id="name">
                                            </div>
                                        </div>
                                        <!-- Sub warehouse Address -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Warehouse Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="address"
                                                    placeholder=" warehouse Address" id="address">
                                            </div>
                                        </div>

                                        <!-- Sub warehouse Phone -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Warehouse Phone</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="phone"
                                                    placeholder=" warehouse Phone" id="phone">
                                            </div>
                                        </div>


                                           <!-- warehouse Submit -->
                                        <div class="mb-3 row">
                                            <label for="submit" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <input class="btn btn-primary" type="submit" value="Create">
                                            </div>
                                        </div>
                                    </form><!-- end form -->
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!--end card-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->
    @endsection
