@extends('admin.layouts.master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">Edit/brand</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">Edit brand</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('brand.index') }}" class="btn btn-primary"><i
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

                                    <form method="post" action="{{ route('brand.update', $brand->id) }}" enctype="multipart/form-data">
                                        @csrf

                                        <!--  Brand Name -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Brand Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder=" Brand Name" id="name" value="{{ $brand->name }}">
                                            </div>
                                        </div>

                                        <!--  Slug Name -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Brand Slug</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="slug"
                                                    placeholder=" Brand Name" id="slug" value="{{ $brand->slug }}">
                                            </div>
                                        </div>



                                        <!--  Brand Font Page -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Brand Font Page
                                                Show</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="front_page">
                                                    <option value="1"
                                                        @if ($brand->front_page == 1) selected="" @endif>Yes</option>
                                                    <option value="0"
                                                        @if ($brand->front_page == 0) selected="" @endif>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--  Brand logo -->
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Brand
                                                logo</label>
                                            <div class="col-sm-10">
                                                <input name="image" class="form-control" type="file" id="image">
                                                <input type="hidden" name="old_logo" value="{{ $brand->image }}">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-tel-input" class="col-md-2 col-form-label"></label>
                                            <div class="col-md-10">
                                                <img id="showImage" src="{{ (!empty($brand->image))? url('upload/brand/'.$brand->image):url('upload/avatar_default.png') }}"
                                                alt="Brand-image" class="rounded avatar-lg" height="200">
                                            </div>
                                        </div>


                                        <!-- Brand Submit -->
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

        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
    @endsection
