@extends('admin.layouts.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Update Password</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Admin Change Password</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Update Password</h4>
                <p class="card-title-desc">You can update your passweord information.</p>


                @if (count($errors))
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger alert-dismissible fade show"> {{ $error }} </p>
                    @endforeach
                @endif

                <form method="post" action="{{ route('admin.update.password') }}">
                    @csrf


                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Old Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" name="oldpassword" value=""
                                placeholder="Enter old password" id="oldpassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="New Password" class="col-md-2 col-form-label">New Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" name="newpassword" value=""
                                placeholder="Enter new password" id="newpassword">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="confirm_password" class="col-md-2 col-form-label">Confirm Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" name="confirm_password" value=""
                                placeholder="Enter Confirm password" id="confirm_password">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary w-md">Update Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end col-->
    </div>

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
