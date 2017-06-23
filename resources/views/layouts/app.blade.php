<?php 
  $uid= DB::selectOne("select id from users where name =?",array(Auth::user()->name));
  $pid= DB::select("select id_maestra from permiso_empre where id_users =?",array($uid->id));
  
  $sel = DB::select("select nombre from maestra where id =?",array($pid->id_maestra));

    
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

</head>

<body>
    <header>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
            </div>  
           @if(Auth::user()->name == 'sucarlos')
                <div class="form-group dropempresa col-sm-4">
                <select class="form-control" placeholder="Empresa">
                    <option>SuperUsuario</option>                    
                </select>
            </div>
            @else
            <div class="form-group dropempresa col-sm-4">
                <select class="form-control" placeholder="Empresa">                  
                   @foreach($sel as $pos)
                   <option>
                       {{$pos->nombre}}
                   </option>
                   @endforeach   
                </select>
            </div>
            @endif
            

           <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                 <li>
                                            <a href="{{route('perfil')}}">
                                                <i class="fa fa-user fa-fw"></i>
                                                Perfil de Usuario
                                            </a>
                                        </li>

                                        <li>
                                            <a href="">
                                                <i class="fa fa-gear fa-fw"></i> Configuraciones
                                            </a>
                                        </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     
                                            <i class="fa fa-sign-out fa-fw"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
            <!-- /.navbar-top-links -->
        </nav>
    </div>
</header>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu"> 
                    <li>@include('alerts.errors')</li>
                    <li>@include('alerts.messages')</li>                    
                        <li>
                            <a href="home"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>


                            <a href="#"><i class="fa fa-edit fa-fw"></i> Registro<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('register') }}">Usuario</a>
                                </li>
                                <li>
                                    <a href="{{route('rEmpresa')}}">Empresa</a>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Indicadores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('flot')}}">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="{{route('morris')}}">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('historico')}}"><i class="fa fa-table fa-fw"></i> Historico</a>
                        </li>
                        <li>
                            <a href="{{route('obligaciones')}}"><i class="fa fa-files-o fa-fw"></i> Gestion de Obligaciones</a>
                        </li>
                        <li>
                            <a href="{{route('usuarios')}}"><i class="fa fa-user fa-fw"></i> Usuarios</a>
                        </li>
                        <li>
                            <form name="Leer" id="Leer" action="{{route('leer')}}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary">Leer</button>
                            </form>

                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        @yield('content')
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="vendor/flot/excanvas.min.js"></script>
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot/jquery.flot.pie.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>
    <script src="vendor/flot/jquery.flot.time.js"></script>
    <script src="vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
    <script src="data/flot-data.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
