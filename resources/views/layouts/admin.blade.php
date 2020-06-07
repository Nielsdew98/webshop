<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.adminheader')
</head>

<body id="page-top">
<!-- Begin page -->
<div id="wrapper">
    @include('includes.adminsidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('includes.admintopbar')

            <!-- Begin Page Content -->
                <div class="container-fluid">
                    @include('includes.admintopcards')
                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('includes.adminfooter')

        </div>
        <!-- End of Content Wrapper -->
     </div>
<!-- END wrapper -->
<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')
</body>
</html>
