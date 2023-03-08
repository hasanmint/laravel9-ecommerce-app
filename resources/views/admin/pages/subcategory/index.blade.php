@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Sub Category</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">All/Sub Categories</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">All Sub Category Lists</h5>
                            <div class="flex-shrink-0">

                                <a href="{{route('subcategory.create')}}" class="btn btn-primary"><i class="align-middle bx bx-plus"></i>
                                    Add New  Sub Category</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                               <div class="p-3">
                                @if (session()->has('message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{session()->get('message')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                               </div>
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Sub Category Name</th>
                                                <th>Sub Category Slug</th>
                                                <th>Category Name</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subcategories as $key => $subcategory)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><span class="badge badge-soft-success">{{ $subcategory->name }}</td>
                                                    <td>{{ $subcategory->slug }}</td>
                                                    <td>{{ $subcategory->category->name }}</td>
                                                    <td><span class="badge bg-success">Active</td>
                                                    <td>
                                                        <ul class="gap-1 mb-0 list-unstyled hstack">
                                                            <li>
                                                                <a href="job-details.html"
                                                                    class="btn btn-sm btn-soft-primary"><i
                                                                        class="mdi mdi-eye-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('subcategory.edit',$subcategory->id)}}" class="btn btn-sm btn-soft-info">
                                                                    <i class="mdi mdi-pencil-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('subcategory.destroy', $subcategory->id)}}"
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
