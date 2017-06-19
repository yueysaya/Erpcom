@extends('layouts.app')

@section('content')
 <div id="page-wrapper">
            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Registro</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                 @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}      
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                @endif

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registro de Empresa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal" role="form" method="POST" action="{{route('rEmpre')}}">
                        {{ csrf_field() }} 

                        <div class="form-group{{ $errors->has('rif') ? ' has-error' : '' }}">
                            <label for="rif" class="col-md-4 control-label">Rif</label>

                            <div class="col-md-6">
                                <input id="rif" type="text" class="form-control" name="rif" value="{{ old('rif') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label for="correo" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input id="correo" type="email" class="form-control" name="correo" value="{{ old('correo') }}" required autofocus>

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">Cedula</label>

                            <div class="col-md-6">
                                <input id="cedula" type="number" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>

                               
                            </div>
                        </div>

                        

                            

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        
@endsection
