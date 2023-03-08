@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">Edit/Categories</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">Edit Category</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('category.index') }}" class="btn btn-primary"><i
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

                                    <form method="post" action="{{ route('category.update',$category->id) }}">
                                        @csrf

                                        <!-- Category Name -->
                                        <div class="mb-3 row">
                                            <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="name"
                                                value="{{$category->name}}" id="name">
                                            </div>
                                        </div>


                                           <!-- Category Submit -->
                                        <div class="mb-3 row">
                                            <label for="submit" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <input class="btn btn-primary" type="submit" value="Update">
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

        <!-- Modal -->
        <div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
