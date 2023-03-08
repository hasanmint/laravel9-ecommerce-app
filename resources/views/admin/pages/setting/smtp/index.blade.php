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
                            <li class="breadcrumb-item active">smtp/Setting</li>
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
                            <h5 class="mb-0 card-title flex-grow-1">Smtp Setting</h5>
                            <div class="flex-shrink-0">
                                <a href="{{ route('smtp.index') }}" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>
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
                                                <th scope="col">Mailer :</th>
                                                <td>{{ $smtp->mailer }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Author :</th>
                                                <td>{{ $smtp->host }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Tag :</th>
                                                <td>{{ $smtp->port }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Keyword :</th>
                                                <td>{{ $smtp->user_name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Meta Description :</th>
                                                <td>{{ $smtp->password }}</td>
                                            </tr>

                                        </tbody>

                                    </table>
                                    <div class="col-sm-8">
                                        <div class="flex justify-center pt-2">
                                            <div class="mt-4">
                                                <a href="{{ route('smtp.edit', $smtp->id) }}"
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
