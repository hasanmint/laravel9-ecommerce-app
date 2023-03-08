<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Register & Dashboard|Laravel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard laravel" name="description" />
    <meta content="laraveldevs" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="my-5 account-pages pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="overflow-hidden card">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="p-4 text-primary">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to dashboard.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset('backend/assets/images/profile-img.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="mb-4 avatar-md profile-user-wid">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('backend/assets/images/logo.png') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="mb-4 avatar-md profile-user-wid">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('backend/assets/images/logo.png') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">

                                <div class="mb-4 text-center alert alert-success" role="alert">
                                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                                </div>


                                <form method="POST" class="form-horizontal" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email" :value="old('email')" required
                                            autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('login') }}" class="text-center btn btn-secondary w-md waves-effect" >Back</a>
                                        <button class="text-center btn btn-primary w-md waves-effect waves-light"  type="submit">Reset</button>
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Laravel. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i>
                                by LaravelDev
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>


</html>
