@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Brand</h4>
                    <div class="page-title-right">
                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">All/Brand </li>
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
                            <h5 class="mb-0 card-title flex-grow-1">All Brand Lists</h5>
                            <div class="flex-shrink-0">
                                <a href="{{route('brand.create')}}" class="btn btn-primary"><i class="align-middle bx bx-plus"></i>
                                    Add New  Brand </a>
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
                                    <table id="" class="table table-bordered dt-responsive nowrap w-100 ytable">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Brand Name</th>
                                                <th>Brand slug</th>
                                                <th>Brand logo</th>
                                                <th>Brand front page</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>

        <script type="text/javascript">
            $(function brand() {
              var table = $('.ytable').DataTable({
                  processing: true,
                  serverSide: true,
                  ajax: "{{ route('brand.index') }}",
                  columns: [
                      {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                      {data: 'name', name: 'name'},
                      {data: 'slug', name: 'slug'},
                      {data:'image',name:'image', render: function(data, type ,full,meta){
					return "<img src=\"" +data+ "\"  height=\"50\" />";
				}},
                      {data: 'front_page', name: 'front_page'},
                      {data: 'action', name: 'action', orderable: false, searchable: false},
                  ]
              });
            });
          </script>

    @endsection
