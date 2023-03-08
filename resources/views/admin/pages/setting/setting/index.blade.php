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
                                <a href="{{ route('setting.index') }}" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
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
                                                <th scope="col">Currency :</th>
                                                <td>{{ $setting->currency }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Phone One :</th>
                                                <td>{{ $setting->phone_one }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Phone Two :</th>
                                                <td>{{ $setting->phone_two }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Main Email :</th>
                                                <td>{{ $setting->main_email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Support Email :</th>
                                                <td>{{ $setting->support_email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Address :</th>
                                                <td>{{ $setting->address }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Facebook :</th>
                                                <td>{{ $setting->facebook }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Twitter :</th>
                                                <td>{{ $setting->twitter }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Instagram :</th>
                                                <td>{{ $setting->instagram }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Linkedin :</th>
                                                <td>{{ $setting->linkedin }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Youtube :</th>
                                                <td>{{ $setting->youtube }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Logo :</th>
                                                <td><img src="{{ $setting->logo }}" alt="{{ $setting->logo }}" class="w-4 h-4"></td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Favicon :</th>
                                                <td><img src="{{ $setting->favicon }}" alt="{{ $setting->favicon }}" class="w-4 h-4"></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                    <div class="col-sm-8">
                                        <div class="flex justify-center pt-2">
                                            <div class="mt-4">
                                                <a href="{{ route('setting.edit', $setting->id) }}"
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
