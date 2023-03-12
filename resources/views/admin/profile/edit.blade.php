@extends('admin.layouts.master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">User</h4>

                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit Profile</h4>
                <p class="card-title-desc">You can update your profile information.</p>

                <form method="post" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Full Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="name" value="{{ $EditData->name }}"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-search-input" class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" name="username" value="{{ $EditData->username }}"
                                id="example-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" value="{{ $EditData->email }}"
                                placeholder="Enter Email" id="example-email-input">
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="example-tel-input" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="tel" name="phone" value="{{ $EditData->phone }}"
                                placeholder="+5-88-555552" id="example-tel-input">
                        </div>
                    </div>

                    {{-- <div class="mb-3 row">
                        <label for="example-url-input" class="col-md-2 col-form-label">Web URL</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="" placeholder="Enter URL" id="example-url-input">
                        </div>
                    </div> --}}

                    <div class="mb-3 row">
                        <label for="example-url-input" class="col-md-2 col-form-label">Location</label>
                        <div class="col-md-10">
                            <textarea required="" class="form-control" rows="3" name="address">{{ $EditData->address }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image </label>
                        <div class="col-sm-10">
                            <input name="photo" class="form-control" type="file" id="image">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-tel-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <img id="showImage" src="{{ (!empty($EditData->photo))? url('public/upload/profile_photo/'.$EditData->photo):url('public/upload/avatar_default.png') }}"
                                alt="profile-image" class="rounded avatar-lg" height="200">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary w-md">Update Profile</button>
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
