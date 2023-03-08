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
                            <li class="breadcrumb-item active">Seo/Setting</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">SEO Setting</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('seo.create') }}" class="btn btn-primary"><i
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
                                    <form role="form" method="post" action="{{ route('seo.update') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Meta Title</label>
                                                        <input type="text" class="form-control" name="metameta_title"
                                                            placeholder="Enter Meta Title" value="{{$data->meta_title}}" />
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Meta Tag</label>
                                                        <input type="text" class="form-control" name="meta_tag"
                                                            placeholder="Enter Meta Tag"  value="{{$data->meta_tag}}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Meta Verification</label>
                                                        <input type="text" class="form-control"
                                                            name="google_verification"
                                                            placeholder="Enter Meta Verification"  value="{{$data->google_verification}}">
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Google Analytics</label>
                                                        <textarea class="form-control" rows="3" name="google_analytics" placeholder="Enter Meta Analytics">{{$data->google_analytics}}</textarea>
                                                    </div>

                                                    <div class="mb-4 form-group">
                                                        <label for="input-date1">Meta Description</label>
                                                        <textarea class="form-control" rows="3" name="meta_description" placeholder="Enter Meta Description">{{$data->meta_description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Meta Author</label>
                                                    <input type="text" class="form-control" name="meta_author"
                                                        placeholder="Enter Meta Author"  value="{{$data->meta_author}}">
                                                </div>

                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Meta Keyword</label>
                                                    <input type="text" class="form-control" name="meta_keyword"
                                                        placeholder="Enter Meta Keyword"  value="{{$data->meta_keyword}}">
                                                </div>

                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Alexa Verification</label>
                                                    <input type="text" class="form-control" name="alexa_verification"
                                                        placeholder="Enter Meta Verification"  value="{{$data->alexa_verification}}">
                                                </div>

                                                <div class="mb-4 form-group">
                                                    <label for="input-date1">Google Adsense</label>
                                                    <textarea class="form-control" rows="3" name="google_adsense" placeholder="Enter Meta Adsense">{{$data->google_adsense}}</textarea>
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
