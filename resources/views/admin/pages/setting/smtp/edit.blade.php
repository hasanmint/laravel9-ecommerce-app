@extends('admin.layouts.master')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Setting</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">SMTP/Setting</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">SMTP Setting</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('smtp.index') }}" class="btn btn-primary"><i
                                        class="align-middle "></i>
                                    Back</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form role="form" method="post" action="{{route('smtp.update',$smtp->id)}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">

                                                <div>
                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Mail Mailer</label>
                                                        <input type="text" class="form-control" name="mailer"
                                                            placeholder="Enter Meta Title" value="{{$smtp->mailer}}" />
                                                    </div>



                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Mail Port</label>
                                                        <input type="text" class="form-control"
                                                            name="port"
                                                            placeholder="Enter Meta Verification" value="{{$smtp->port}}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Mail Password</label>
                                                        <input type="text" class="form-control"
                                                            name="password"
                                                            placeholder="Enter Meta Verification" value="{{$smtp->password}}">
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Mail Host</label>
                                                    <input type="text" class="form-control" name="host"
                                                        placeholder="Enter Meta Tag" value="{{$smtp->host}}" >
                                                </div>

                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Mail Username</label>
                                                    <input type="text" class="form-control"
                                                        name="user_name"
                                                        placeholder="Enter Meta Verification" value="{{$smtp->user_name}}">
                                                </div>

                                            </div>

                                            <!-- Submit -->
                                            <div class="flex-wrap gap-2 d-flex">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light"  value="Update">
                                                    Update
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
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
