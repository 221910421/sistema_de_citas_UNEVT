@extends ('layouts.header')
@section('body')
@if(session('session_tipo') == 2)
<input type="button" onclick="location.href='{{route('registrar_nuevo_usuario')}}'" value="Registrar un nuevo usuario"><br>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>
                    <h3>Nombre</h3>
                </th>
                <th>
                    <h3>usuario</h3>
                </th>
                <th>
                    <h3>Correo</h3>
                </th>
                <th>
                    <h3>Tipo de usuario</h3>
                </th>
                <th>
                    <h3>Contraseña</h3>
                </th>
                <th>
                    <h3>Estatus</h3>
                </th>
            </tr>
</thead>
                @foreach ($usuarios as $usuario)
            <tbody>
                <tr>
                    <td>{{$usuario->nombre}} {{$usuario->apellido_paterno}} {{$usuario->apellido_materno}}</td>
                    <td>{{$usuario->usuario}}</td>
                    <td>{{$usuario->correo}}</td>
                    @if($usuario->tipo_de_sesión == 0)
                    <td>Usuario</td>
                    @elseif($usuario->tipo_de_sesión == 1)
                    <td>Administrador</td>
                    @elseif($usuario->tipo_de_sesión == 2)
                    <td>Superusuario</td>
                    @endif
                    <td>{{$usuario->contraseña}}</td>
                    <td>{{$usuario->estatus}}</td>
                    </form>
                </tr>
            </tbody>
            @endforeach
    </table>
    @else
    <META HTTP-EQUIV="REFRESH" CONTENT="0;URL=/">
    @endif
@endsection