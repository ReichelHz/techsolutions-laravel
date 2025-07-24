@extends('layouts.app')

@section('content')
    <h1>Lista de Proyectos</h1>

    {{-- Mostrar valor UF --}}
    @if ($valorUF)
        <div style="background-color: #e0f7fa; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <strong>Valor UF hoy:</strong> ${{ number_format($valorUF, 0, ',', '.') }}
        </div>
    @else
        <div style="background-color: #fff3cd; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            No se pudo obtener el valor de la UF en este momento.
        </div>
    @endif

    {{-- Mensaje de éxito --}}
    @if(session('success'))
        <p style="color: green; margin-bottom: 20px;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('proyectos.create') }}" style="display: inline-block; margin-bottom: 20px; text-decoration: none; background-color: #4caf50; color: white; padding: 8px 12px; border-radius: 4px;">
        Crear nuevo proyecto
    </a>

    <ul style="list-style-type: none; padding: 0;">
        @foreach($proyectos as $proyecto)
            <li style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
                <strong>{{ $proyecto->nombre }}</strong> - Responsable: {{ $proyecto->responsable }}<br><br>
                <a href="{{ route('proyectos.show', $proyecto->id) }}" style="margin-right: 10px; text-decoration: none; color: #2196f3;">Ver</a>
                <a href="{{ route('proyectos.edit', $proyecto->id) }}" style="margin-right: 10px; text-decoration: none; color: #ff9800;">Editar</a>
                
                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('¿Seguro que deseas eliminar este proyecto?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #f44336; color: white; border: none; padding: 5px 10px; border-radius: 3px; cursor: pointer;">
                        Eliminar
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
