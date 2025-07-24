<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>

    <!-- Mostrar errores de validación -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario para crear proyecto -->
    <form action="{{ route('proyectos.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br><br>

        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio') }}"><br><br>

        <label for="estado">Estado:</label><br>
        <input type="text" name="estado" id="estado" value="{{ old('estado') }}"><br><br>

        <label for="responsable">Responsable:</label><br>
        <input type="text" name="responsable" id="responsable" value="{{ old('responsable') }}"><br><br>

        <label for="monto">Monto:</label><br>
        <input type="number" name="monto" id="monto" value="{{ old('monto') }}" step="0.01"><br><br>

        <button type="submit">Guardar Proyecto</button>
    </form>

    <br>
    <a href="{{ route('proyectos.index') }}">Volver a la lista de proyectos</a>
</body>
</html>
