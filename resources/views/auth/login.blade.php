<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 21:17:52 GMT -->

<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('../../dist/images/logos/favicon.ico') }}" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('../../dists/css/style.min.css') }}" />

    {{-- alert --}}
    <link rel="stylesheet" href="{{ asset('../../dists/libs/sweetalert2/dist/sweetalert2.min.css') }}">
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="m-4 d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-sm-8 col-md-4 col-lg-5 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                    <h1 class="text-center fs-9 fw-900">Login</h1>
                                    {{-- <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt=""> --}}
                                </a>

                                @error('loginError')
                                    <div class="alert alert-danger">
                                        <b>Error</b>
                                        <p>{{ $message }}</p>

                                    </div>
                                @enderror

                                <form method="post">
                                    @csrf
                                   
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="masukan Email..">
                                            @error('email')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                        @error('password')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        
                                        <a class="text-primary fw-medium"
                                            href="authentication-forgot-password.html">Forgot Password ?</a>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-8 mb-4  rounded-2">Login</button>

                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-medium">New to Modernize?</p>
                                        <a class="text-primary fw-medium ms-2"
                                            href="/register">Create an account</a>
                                    </div>
                                </form>
                            </div>



                            <div class="row">
                                <div class="col-6 mb-2 mb-sm-0">
                                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                                        href="javascript:void(0)" role="button">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg"
                                            alt="" class="img-fluid me-2" width="18" height="18">
                                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8"
                                        href="javascript:void(0)" role="button">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/facebook-icon.svg"
                                            alt="" class="img-fluid me-2" width="18" height="18">
                                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                                    </a>
                                </div>
                            </div>
                            <div class="position-relative text-center my-4">
                                <p
                                    class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                                    or sign in with</p>
                                <span
                                    class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Import Js Files -->
    <script src="{{ asset('../../dists/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('../../dists/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('../../dists/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--  core files -->
    <script src="{{ asset('../../dists/js/app.min.js') }}"></script>
    <script src="{{ asset('../../dists/js/app.init.js') }}"></script>
    <script src="{{ asset('../../dists/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('../../dists/js/sidebarmenu.js') }}"></script>

    <script src="{{ asset('../../dists/js/custom.js') }}"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 21:17:52 GMT -->

</html>
