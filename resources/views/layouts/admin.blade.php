<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.adminheader')
</head>

<body>
<!-- Begin page -->
<div id="wrapper">

    @include('includes.admintopbar')
    @include('includes.adminsidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                @include('includes.admintopcards')
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">@yield('title')</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    @include('includes.adminfooter')
</div>
<!-- END wrapper -->

<script src="{{asset('js/vendor.min.js')}}"></script>
<script src="{{asset('js/dropzone.min.js')}}"></script>
<script src="{{asset('js/style.js')}}"></script>
<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>

<!-- demo animation-->
<script src="{{asset('js/animation.init.js')}}"></script>



</body>
</html>
