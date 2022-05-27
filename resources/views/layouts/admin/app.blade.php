<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Webeesocial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta name="_token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend') }}/assets/css/custom.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/libs/toastr/build/toastr.min.css">
        <!-- include summernote css/js -->
        @yield('headerScripts')
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <x-header-component />

            <!-- ========== Left Sidebar Start ========== -->
            <x-sidebar-component />
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- subscribeModal -->
                <div class="modal fade" id="" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="text-center mb-4">
                                    <div class="avatar-md mx-auto mb-4">
                                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                                            <i class="mdi mdi-email-open"></i>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-xl-10">
                                            <h4 class="text-primary">Subscribe !</h4>
                                            <p class="text-muted font-size-14 mb-4">Subscribe our newletter and get notification to stay update.</p>

                                            <div class="input-group bg-light rounded">
                                                <input type="email" class="form-control bg-transparent border-0" placeholder="Enter Email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                
                                                <button class="btn btn-primary" type="button" id="button-addon2">
                                                    <i class="bx bxs-paper-plane"></i>
                                                </button>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                 © Webeesocial.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        <!-- Gallery Modal-->

        <div class="modal fade gallery_modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="images_list">
                            
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <input type="hidden" id="image_url" value="{{ asset('images') }}">
        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/toastr/build/toastr.min.js"></script>
        <script src="{{ asset('backend') }}/assets/js/pages/bootstrap-toastr.init.js"></script>
        <script src="{{ asset('backend') }}/assets/js/gallery.js"></script>
        @yield('footerScripts')
        @yield('script')
        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
            });
        </script>
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 13:05:30 GMT -->
</html>