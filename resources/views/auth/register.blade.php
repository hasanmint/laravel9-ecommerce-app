<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Register & Dashboard|Laravel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin & Dashboard laravel" name="description" />
    <meta content="laraveldevs" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('public/backend/assets/images/favicon.ico') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('public/backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('public/backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

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
                                        <h5 class="text-primary">Free Register</h5>
                                    </div>
                                </div>
                                <div class="col-5 align-self-center">
                                    <img src="{{ asset('public/backend/assets/images/profile-img.png') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="pt-0 card-body">
                            <div>
                                <a href="index.html">
                                    <div class="mb-4 avatar-md profile-user-wid">
                                        <span class="text-center avatar-title rounded-circle bg-light">
                                            <img src="{{ asset('public/backend/assets/images/logo.png') }}" alt=""
                                                class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form method="POST" class="needs-validation" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" id="name" class="form-control"type="text"
                                            name="name" :value="old('name')" placeholder="Enter full name" required
                                            autofocus />
                                    </div>

                                    <!-- User Name -->

                                    <div class="mb-3">
                                        <label for="username" class="form-label">User Name</label>
                                        <input type="text" id="username" class="form-control"type="text"
                                            name="username" :value="old('username')" placeholder="Enter username"
                                            required autofocus />
                                    </div>


                                    <!-- Email Address -->

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email" :value="old('email')" required />

                                    </div>


                                    <!-- Password -->

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter password" name="password" required
                                            autocomplete="new-password" />

                                    </div>

                                    <!-- Confirm Password -->

                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password_confirmation" class="form-control"
                                            id="password_confirmation" placeholder="Enter Confirm Password"
                                            name="password_confirmation" required
                                            autocomplete="password_confirmation" />
                                    </div>


                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 font-size-14">Sign up using</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="text-white social-list-item bg-primary border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="text-white social-list-item bg-info border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()"
                                                    class="text-white social-list-item bg-danger border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="mt-4 text-center">
                                        <p>Already have an account ? <a href="{{ route('login') }}"
                                                class="fw-medium text-primary">
                                                Login</a> </p>
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

    <!-- JAVASCRIPT -->
    <script src="{{ asset('public/backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('public/backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('public/backend/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('public/backend/assets/js/app.js') }}"></script>

</body>



</html>
