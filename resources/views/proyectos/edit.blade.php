{{-- resources/views/proyectos/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Proyecto</h1>

        {{-- Mostrar errores de validación si existen --}}
        @if ($errors->any())
            <div style="color: red;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario de edición --}}
        <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre">Nombre del Proyecto:</label><br>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $proyecto->nombre) }}" required>
            </div>

            <div>
                <label for="fecha_inicio">Fecha de Inicio:</label><br>
                <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio) }}" required>
            </div>

            <div>
                <label for="estado">Estado:</label><br>
                <input type="text" id="estado" name="estado" value="{{ old('estado', $proyecto->estado) }}" required>
            </div>

            <div>
                <label for="responsable">Responsable:</label><br>
                <input type="text" id="responsable" name="responsable" value="{{ old('responsable', $proyecto->responsable) }}" required>
            </div>

            <div>
                <label for="monto">Monto:</label><br>
                <input type="number" id="monto" name="monto" step="0.01" value="{{ old('monto', $proyecto->monto) }}" required>
            </div>

            <br>
            <button type="submit">Actualizar Proyecto</button>
        </form>

        <br>
        <a href="{{ route('proyectos.index') }}">← Volver a la lista</a>
    </div>
@endsection
