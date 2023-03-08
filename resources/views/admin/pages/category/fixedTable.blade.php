@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Category</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">/Categories</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">All Category Lists</h5>
                            <div class="flex-shrink-0">

                                <a href="#!" class="btn btn-primary" ><i class="align-middle bx bx-plus"></i>
                                    Add New Category</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Category Name</th>
                                                <th>Company Slug</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $category)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><span class="badge badge-soft-success">{{ $category->name }}</td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td><span class="badge bg-success">Active</td>
                                                    <td>
                                                        <ul class="gap-1 mb-0 list-unstyled hstack">
                                                            <li data-bs-toggle="tooltip"
                                                                data-bs-placement="top"aria-label="View">
                                                                <a href="job-details.html"
                                                                    class="btn btn-sm btn-soft-primary"><i
                                                                        class="mdi mdi-eye-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Edit">
                                                                <a href="#" class="btn btn-sm btn-soft-info">
                                                                    <i class="mdi mdi-pencil-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                                aria-label="Delete">
                                                                <a href="#jobDelete" data-bs-toggle="modal"
                                                                    class="btn btn-sm btn-soft-danger">
                                                                    <i class="mdi mdi-delete-outline"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
