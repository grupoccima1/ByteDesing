@extends('adminlte::page')

@section('title', 'Byte Desing')

@section('content_header')
    <h1>Asignar un Roll</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="h5">Nombre</h3>
            <p class="form-control">{{$user->name}}</p>

            <h3 class="h5">Lista de Roles</h3>
            
            {!!Form::model($user,['route' => ['admin.users.update', $user], 'method' => 'put' ])!!}
                
                @foreach($roles as $role)
                    <div class="">
                        <label for="">
                            {!!Form::checkbox('roles[]', $role->id, null, ['class' =>'mr-1'])  !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                
                {!!Form::submit('Asignar Rol', ['class'=>'btn btn-primary mt-2', 'placeholder'=>'Escriba Nombre' ])!!}
            
            {!!Form::close()!!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop