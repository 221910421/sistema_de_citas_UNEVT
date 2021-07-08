@extends ('layouts.header')
@section('body')
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
            </tr>
</thead>
                @foreach ($usuarios as $usuario)
            <tbody>
                <tr>
                    <td>{{$usuario->nombre}}</td>
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
                    </form>
                </tr>
            </tbody>
            @endforeach
    </table>
@endsection