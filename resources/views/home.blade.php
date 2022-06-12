@extends('layouts.app')

@section('content')
<body class="bg-dark">
    <div class="container">
        <center>
            <h1 class="text-white">Examen Final</h1>
            <h1 class="text-white">Programación III</h1>
            <br>
            <h2 class="text-white">Listado de Empleados registrados</h2>
            <br>
        </center>
            <table class="table table-hover table-info">
                <thead>
                        <th>Codigo Empleado</th>
                        <th>Nombre</th>
                        <th>Numero</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Usuario</th>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->codigo_empleado }}</td>
                        <td>{{ $empleado->nombre_empleado }}</td>
                        <td>{{ $empleado->numero_telefono }}</td>
                        <td>{{ $empleado->correo }}</td>
                        <td>{{ $empleado->direccion }}</td>
                        <td>{{ $empleado->departamento }}</td>
                        <td>{{ $empleado->users->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
@endsection
