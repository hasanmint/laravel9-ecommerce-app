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
                                <a href="{{ route('seo.index') }}" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="p-2">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session()->get('message') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <table class="table mb-0 ">
                                        <tbody>
                                            <tr>
                                                <th scope="col">Meta Title :</th>
                                                <td>{{ $seo->meta_title }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Author :</th>
                                                <td>{{ $seo->meta_author }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Tag :</th>
                                                <td>{{ $seo->meta_tag }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Keyword :</th>
                                                <td>{{ $seo->meta_keyword }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Description :</th>
                                                <td>{{ $seo->meta_description }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Google Verification :</th>
                                                <td>{{ $seo->google_verification }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Alexa Verification :</th>
                                                <td scope="col">{{ $seo->alexa_verification }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Google Analytics :</th>
                                                <td scope="col">{{ $seo->google_analytics }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Google Adsense :</th>
                                                <td scope="col">{{ $seo->google_adsense }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                    <div class="col-sm-8">
                                        <div class="flex justify-center pt-2">
                                            <div class="mt-4">
                                                <a href="{{ route('seo.edit', $seo->id) }}"
                                                    class="btn btn-primary waves-effect waves-light btn-sm">Edit Setting <i
                                                        class="mdi mdi-arrow-right ms-1"></i></a>
                                            </div>
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
