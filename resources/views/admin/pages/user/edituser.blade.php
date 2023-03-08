@extends('admin.layouts.master')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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

                    <div class="d-flex justify-content-between mb-3 ">
                        <h4> Add New User </h4>
                        <a href="{{ route('all.user') }}" type="button"
                            class="btn font-16 btn-primary waves-effect waves-light">
                            All User</a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{ route('update.user',$users->id) }}">
                        @csrf


                        <input type="hidden" name="hide_id" value="{{$users->id}}">

                        <!-- start row -->
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label ">Select Role</label>
                            <div class="col-sm-10">
                                <select name="role" class="form-select" aria-label="Default select example">
                                    <option value="">Select Role</option>
                                    <option value="admin" {{$users->role =="admin" ? "selected" : ""}}>Admin</option>
                                    <option value="vendor" {{$users->role =="vendor" ? "selected" : ""}}>Vendor</option>
                                    <option value="user" {{$users->role =="user" ? "selected" : ""}}>User</option>
                                </select>
                            </div>
                        </div>

                         <!-- start row -->
                         <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Full Name"
                                    id="name" value="{{$users->name}}">
                            </div>
                        </div>
                         <!-- start row -->
                         <div class="row mb-3">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="username" placeholder="Username"
                                    id="username" value="{{$users->username}}">
                            </div>
                        </div>
                         <!-- start row -->
                         <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" placeholder="Email "
                                    id="email" value="{{$users->email}}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="submit" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <input class="btn btn-primary" type="submit" value="Submit User">
                            </div>
                        </div>
                    </form><!-- end form -->
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection
