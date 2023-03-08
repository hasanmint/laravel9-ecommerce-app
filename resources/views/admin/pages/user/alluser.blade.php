@extends('admin.layouts.master')

@section('content')
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">User </h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">User </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between  mb-3">
                <h4> All User</h4>
                <a href="{{route('add.user')}}" type="button" class="btn font-16 btn-primary waves-effect waves-light">
                Add User</a>
                </div>
                 <!-- start table Row -->
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                               {{session()->get('message')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Role</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($users as $item )
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->role}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->email}}</td>

                                            <td>
                                                <a href="{{ route('edit.user',$item->id )}}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>

                                                <a href="{{ route('delete.user',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
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
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
