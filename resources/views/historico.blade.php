@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Historico</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID Maestra</th>
                                        <th>Nombre</th>
                                        <th>Contraseña</th>
                                        <th>Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                    <tr class="gradeX">
                                        <td>{{$usuario->id_maestra}}</td>
                                        <td>{{$usuario->nombre}}</td>
                                        <td>{{$usuario->contraseña}}</td>
                                        <td class="center">{{$usuario->telefono}}</td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

@endsection