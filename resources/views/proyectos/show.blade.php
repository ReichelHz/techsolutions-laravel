<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Proyecto</title>
</head>
<body>
    <h1>Detalles del Proyecto</h1>

    <p><strong>Nombre:</strong> {{ $proyecto->nombre }}</p>
    <p><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_inicio }}</p>
    <p><strong>Estado:</strong> {{ $proyecto->estado }}</p>
    <p><strong>Responsable:</strong> {{ $proyecto->responsable }}</p>
    <p><strong>Monto:</strong> ${{ number_format($proyecto->monto, 0, ',', '.') }}</p>

    <a href="{{ route('proyectos.index') }}">Volver a la lista</a>
</body>
</html>
