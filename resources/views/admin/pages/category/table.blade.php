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

                                        <a href="#!" class="btn btn-primary"><i class="align-middle bx bx-plus"></i>
                                            Add New Category</a>
                                        <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                                </thead>


                                                <tbody>



                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>

                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

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
                                                    <th>Start date</th>
                                                    <th>Action</th>
                                                </tr>


                                                </thead>


                                                <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>

                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="card-body border-bottom" data-select2-id="9">
                                <div class="row g-3" data-select2-id="8">
                                    <div class="col-xxl-4 col-lg-6">
                                        <input type="search" class="form-control" id="searchInput"
                                            placeholder="Search for ...">
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive" >
                                    <table class="table align-middle table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Company Slug</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key=>$category)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$category->name}}</td>
                                                <td><span class="badge badge-soft-success">{{$category->name}}</span></td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <ul class="gap-1 mb-0 list-unstyled hstack">
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="View">
                                                            <a href="job-details.html"
                                                                class="btn btn-sm btn-soft-primary"><i
                                                                    class="mdi mdi-eye-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Edit">
                                                            <a href="#" class="btn btn-sm btn-soft-info"><i
                                                                    class="mdi mdi-pencil-outline"></i></a>
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-bs-placement="top"
                                                            aria-label="Delete">
                                                            <a href="#jobDelete" data-bs-toggle="modal"
                                                                class="btn btn-sm btn-soft-danger"><i
                                                                    class="mdi mdi-delete-outline"></i></a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto me-auto">
                                        <p class="mb-0 text-muted">Showing <b>1</b> to <b>12</b> of <b>45</b> entries</p>
                                    </div>
                                    <div class="col-auto">
                                        <div class="mb-0 card d-inline-block ms-auto">
                                            <div class="p-2 card-body">
                                                <nav aria-label="Page navigation example" class="mb-0">
                                                    <ul class="mb-0 pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);"
                                                                aria-label="Previous">
                                                                <span aria-hidden="true">«</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);">1</a></li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="javascript:void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);">...</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);">12</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);"
                                                                aria-label="Next">
                                                                <span aria-hidden="true">»</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->



    @endsection
