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
                            <li class="breadcrumb-item active">Create/Coupon</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">Create  Coupon</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('coupon.index') }}" class="btn btn-primary"><i
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

                                    <form method="post" action="{{ route('coupon.store') }}">
                                        @csrf



                                        <!-- Sub coupon Code -->
                                        <div class="mb-3 row">
                                            <label for="code" class="col-sm-2 col-form-label">Coupon Code</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="code"
                                                    placeholder=" Coupon code" id="code">
                                            </div>
                                        </div>
                                        <!--  coupon Type -->
                                        <div class="mb-3 row">
                                            <label for="type" class="col-sm-2 col-form-label">Coupon Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="type" required>
                                                    <option value="1">Fixed</option>
                                                    <option value="2">Percentage</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- coupon Amount -->
                                        <div class="mb-3 row">
                                            <label for="amount" class="col-sm-2 col-form-label">Coupon Amount</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="amount"
                                                    placeholder=" Coupon amount" id="amount">
                                            </div>
                                        </div>
                                        <!-- coupon Status -->
                                        <div class="mb-3 row">
                                            <label for="status" class="col-sm-2 col-form-label">Coupon Amount</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="status" required>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <!-- coupon date -->
                                        <div class="mb-3 row">
                                            <label for="valid_date" class="col-sm-2 col-form-label">Coupon Valid Date</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="date" name="valid_date"
                                                    placeholder=" Coupon amount" id="valid_date">
                                            </div>
                                        </div>


                                           <!-- coupon Submit -->
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
