<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Webeesocial Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend') }}/images/Favicon.png">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body text-center"> 
                                <div><img src="{{ asset('frontend') }}/images/webeesocial_logo.svg" width="150"></div>
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{ route('authentication') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                
                                        <div class="mb-3">
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror  
                                        </div>
                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                        @if(session()->has('error'))
                                        <div class="text-center">
                                            <span class="text-danger">{{ session()->get('error') }}</span>
                                        </div>
                                        @endif
                                    </form>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="{{ asset('backend') }}/assets/js/app.js"></script>
    </body>
</html>
