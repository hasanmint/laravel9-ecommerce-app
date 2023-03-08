@extends('admin.layouts.master')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-4 col-offset-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mt-3">
                    <img src="{{ (!empty($ProdifleData->photo))? url('upload/profile_photo/'.$ProdifleData->photo):url('upload/avatar_default.png') }}" alt="" class="mx-auto d-block rounded avatar-lg" height="100">


                        <h5 class="mt-3 mb-1">{{$ProdifleData->name}}</h5>
                        <p class="text-muted mb-0">Since July 2022</p>
                    </div>

                    <hr/>
                    <ul class="list-unstyled mt-4">
                        <li>
                            <div class="d-flex">
                                <i class="fas fa-user text-primary fs-4"></i>
                                <div class="ms-3">
                                    <h6 class="fs-14 mb-2">Username </h6>
                                    <p class="text-muted fs-14 mb-0"> {{$ProdifleData->username}}</p>
                                </div>
                            </div>
                        </li>

                        <li class="mt-3">
                            <div class="d-flex">
                                <i class="bx bx-phone text-primary fs-4"></i>
                                <div class="ms-3">
                                    <h6 class="fs-14 mb-2">Phone</h6>
                                    <p class="text-muted fs-14 mb-0">{{$ProdifleData->phone}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-3">
                            <div class="d-flex">
                                <i class="bx bx-mail-send text-primary fs-4"></i>
                                <div class="ms-3">
                                    <h6 class="fs-14 mb-2">Email</h6>
                                    <p class="text-muted fs-14 mb-0">{{$ProdifleData->email}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-3">
                            <div class="d-flex">
                                <i class="bx bx-globe text-primary fs-4"></i>
                                <div class="ms-3">
                                    <h6 class="fs-14 mb-2">Website</h6>
                                    <p class="text-muted fs-14 text-break mb-0">www.example.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-3">
                            <div class="d-flex">
                                <i class="bx bx-map text-primary fs-4"></i>
                                <div class="ms-3">
                                    <h6 class="fs-14 mb-2">Location</h6>
                                    <p class="text-muted fs-14 mb-0">{{$ProdifleData->address}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <a href="{{route('admin.edit.profile')}}" class="btn btn-soft-primary btn-hover w-100 rounded"><i class="mdi mdi-eye"></i> Edit Profile</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->

    </div>



@endsection
