<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Allegra App - @yield('title')</title>


    <!-- Custom styles for this template-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    
    <!-- Datatable styles -->
    @stack('css')
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- HeaderTopbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    @if(Auth::user()->workerSession->count() > 0)
                        @if(Auth::user()->workerSession->last()->action == 'out')
                            <button type="button" id="saveIn" class="btn btn-primary" style="width:120px;margin-left:10px;">
                                Entrada 
                            </button>
                            <button type="button" id="saveOut" class="btn btn-danger" style="width:120px;margin-left:10px;display:none;">
                                Salida 
                            </button>
                        @else
                            <button type="button" id="saveIn" class="btn btn-primary" style="width:120px;margin-left:10px;display:none;">
                                Entrada 
                            </button>
                            <button type="button" id="saveOut" class="btn btn-danger" style="width:120px;margin-left:10px;">
                                Salida 
                            </button>
                        @endif
                    @else
                        <button type="button" id="saveIn" class="btn btn-primary" style="width:120px;margin-left:10px;">
                            Entrada 
                        </button>
                        <button type="button" id="saveOut" class="btn btn-danger" style="width:120px;margin-left:10px;display:none;">
                                Salida 
                        </button>
                    @endif
        
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <div class="" style="
                            background-image:url(http://localhost/storage/{{Auth::user()->avatar}});
                            background-color: grey;
                            width: 30px;
                            height: 30px;
                            margin: 0 auto;
                            background-size: cover;
                            border-radius: 50%;
                            background-position: center;
                            ">
                                </div>

                                <!-- <img class="img-profile rounded-circle" src="http://localhost/storage/{{Auth::user()->avatar}}"" > -->

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                        <div class="dropdown-divider"></div>
                     -->

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of HeaderTopbar -->

                <!-- Begin Page Content -->
                <div class="cs-loader" id="loader">
                    <div class="heigh100">
                        <div class="cs-loader-inner">
                            <label> ●</label>
                            <label> ●</label>
                            <label> ●</label>
                            <label> ●</label>
                            <label> ●</label>
                            <label> ●</label>
                        </div>
                    </div>
                </div>
                @yield('content')

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Realizado con <i class="fas fa-heart"></i> para Acufade por La Isla Creativa &copy; | <i
                                class="fas fa-grin-hearts"></i> Alegra app 2019 </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cerrando sesión.</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Haz click en el botón de cerrar cesión para terminar.</div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="{{ url('/logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Script que recalcula el responsive de datatables -->
    <script>
        function recalculateDataTableResponsiveSize() {
            $($.fn.dataTable.tables(true)).DataTable().responsive.recalc();
        }
    </script>

    <!-- Select 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        $(".select2").select2({
            theme: "bootstrap"
        });
    </script>


    <!-- Custom scripts for all pages -->
    <script src="{{mix('js/customJs/custom.js')}}"></script>


    <!-- Bootstrap core JavaScript, Core plugin JavaScript, Page level plugins -->
    <script src="{{mix('js/app.js')}}"></script>


    <!-- datatable 2 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4-4.1.1/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    
    <!--scripts-->
    @stack('scripts')

    <!--reset view for datatables-->
    <script>
        var lat,lng;

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        } else {
            alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
        }

        function successFunction(position){
            lat = position.coords.latitude;
            lng = position.coords.longitude;
        }

        function errorFunction(){
            console.log("Error cannot get location");
        }
        
        $("#myTab a").click(function(e) {
            console.log('click en tab');
            setTimeout(function() {
                recalculateDataTableResponsiveSize();
            }, 0);
        });

        function store(action){
            $("#saveIn").prop('disabled',true);
            $("#saveOut").prop('disabled',true);
            var token =  $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "{{ url('workerSessions') }}",
                method : 'POST',
                data:{action: action, latitud:lat,longitud:lng},
                headers: {
                    'X-CSRF-Token': token 
               },
                success: function (data) {
                    $("#saveIn").prop('disabled',false);
                    $("#saveOut").prop('disabled',false);
                    if(action=='in'){
                        toastr.success("Entrada registrada");
                        $("#saveIn").hide();
                        $("#saveOut").show();
                    }else{
                        toastr.success("Salida registrada");
                        $("#saveOut").hide();
                        $("#saveIn").show();
                        
                    }
                },
                error: function (data) {
                    $("#saveIn").prop('disabled',false);
                    $("#saveOut").prop('disabled',false);                    
                    toastr.error("No se pudo procesar su petición");
                }
            });
        }

        $("#saveIn").click(function(){
            store("in");
        });

        $("#saveOut").click(function(){
            store("out");
        });
    </script>



</body>

</html>