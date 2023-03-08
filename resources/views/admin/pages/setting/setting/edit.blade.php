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
                            <li class="breadcrumb-item active">setting/Setting</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">Website Setting</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('setting.index') }}" class="btn btn-primary"><i class="align-middle "></i>
                                    Back</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form role="form" method="post" action="{{ route('setting.update', $setting->id) }}" enctype="multipart/form-data">
                                        @csrf
 <!-- Row -->
                                            <div class="row">
                                            <div class="my-3">
                                                <h4 class="card-title">Basic Web Setting</h4>
                                                <p class="card-title-desc">Fill all web setting below</p>
                                            </div>

                                             <!-- Row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Currency</label>
                                                            <select name="currency" class="form-select"
                                                                aria-label="Default select example">
                                                                <option value="">Select Role</option>
                                                                <option value="৳"
                                                                    {{ $setting->currency == '৳' ? 'selected' : '' }}>Taka
                                                                    (৳)
                                                                </option>
                                                                <option value="$"
                                                                    {{ $setting->currency == '$' ? 'selected' : '' }}>USD
                                                                    ($)
                                                                </option>
                                                                <option value="₹"
                                                                    {{ $setting->currency == '₹' ? 'selected' : '' }}>Rupee
                                                                    (₹)
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Main Email</label>
                                                            <input type="text" class="form-control" name="main_email"
                                                                placeholder="Main Email" value="{{ $setting->main_email }}">
                                                        </div>

                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1"> Address</label>
                                                            <textarea class="form-control" rows="3" name="address" placeholder="Enter Address">{{ $setting->address }}</textarea>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Phone One</label>
                                                        <input type="text" class="form-control" name="phone_one"
                                                            placeholder="Phone One" value="{{ $setting->phone_one }}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Phone Two</label>
                                                        <input type="text" class="form-control" name="phone_two"
                                                            placeholder="Phone Two" value="{{ $setting->phone_two }}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Support Mail</label>
                                                        <input type="text" class="form-control" name="support_email"
                                                            placeholder="Enter Meta Verification"
                                                            value="{{ $setting->support_email }}">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="my-3">
                                                <h4 class="card-title">Social Setting</h4>
                                                <p class="card-title-desc">Fill all Social setting below</p>
                                            </div>

                                             <!-- Row -->
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Facebook</label>
                                                            <input type="text" class="form-control" name="facebook"
                                                                placeholder="Facebook URL"
                                                                value="{{ $setting->facebook }}">
                                                        </div>

                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Twitter</label>
                                                            <input type="text" class="form-control" name="twitter"
                                                                placeholder="Twitter URL" value="{{ $setting->twitter }}">
                                                        </div>

                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Instagram</label>
                                                            <input type="text" class="form-control" name="instagram"
                                                                placeholder="instagram URL"
                                                                value="{{ $setting->instagram }}">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Linkedin</label>
                                                        <input type="text" class="form-control" name="linkedin"
                                                            placeholder="Linkedin URL" value="{{ $setting->linkedin }}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Youtube</label>
                                                        <input type="text" class="form-control" name="youtube"
                                                            placeholder="Youtube URL" value="{{ $setting->youtube }}">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="my-3">
                                                <h4 class="card-title">Logo & Favicon Setting</h4>
                                                <p class="card-title-desc">Fill all Logo setting below</p>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-4 form-group">
                                                            <label for="input-date1">Logo</label>
                                                            <input type="file" class="form-control" name="logo">
                                                            <input type="hidden" name="old_logo"
                                                                value="{{ $setting->logo }}">
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Favicon</label>
                                                        <input type="file" class="form-control" name="favicon">
                                                        <input type="hidden" name="old_favicon"
                                                            value="{{ $setting->favicon }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit -->
                                            <div class="flex-wrap gap-2 d-flex">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                                    value="Update">
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
