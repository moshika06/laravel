<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $title ?? ' Dashboard' }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('asset_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('asset_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap.min.css-2.min.css') }}">
    <script src="{{ asset('asset/js/bootstrap.min.css-2.min.js') }}"></script>
    <!-- DataTable -->
    <link href="https://cdn.datatables.net/buttons/4.0.1/css/buttons.dataTables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('asset_admin/css/datatables.min.css') }}">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('inc.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('inc.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">@yield('tittle')</h1>
                    @yield('content')
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    @include('inc.footer')


                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('asset_admin/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('asset_admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- Core plugin JavaScript-->
            <script src="{{ asset('asset_admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('asset_admin/js/sb-admin-2.min.js') }}"></script>

            <!-- Page level plugins -->
            <script src="{{ asset('asset_admin/vendor/chart.js/Chart.min.js') }}"></script>
            <!-- DataTables -->
            <script src="{{ asset('asset_admin/js/datatables.min.js') }}"></script>
            <!-- Page level custom scripts -->
            <script src="{{ asset('asset_admin/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('asset_admin/js/demo/chart-pie-demo.js') }}"></script>


            <!--- DataTable Button --->
            <!-- JSZip for Excel export -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
            <!-- pdfmake for PDF export -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
            <!-- Buttons core -->
            <script src="https://cdn.datatables.net/buttons/4.0.1/js/dataTables.buttons.min.js"></script>
            <!-- Optional button libraries -->
            <script src="https://cdn.datatables.net/buttons/4.0.1/js/buttons.colVis.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/4.0.1/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/4.0.1/js/buttons.print.min.js"></script>
            </script>

            <!--- DataTable --->
            <script>
                new DataTable('#database',{
                    fixedHeader: true,
                    responsive: true,
                    layout: {
                        topStart: {
                            buttons: ['copy', 'excel', 'pdf', 'print']
                        },
                        topEnd: 'search',
                    }
                });
            </script>
            
</body>

</html>