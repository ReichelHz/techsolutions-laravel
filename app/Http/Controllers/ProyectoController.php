<?php

namespace App\Http\Controllers;
use App\Services\UFService;
use Illuminate\Http\Request;
use App\Models\Proyecto;  

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $proyectos = Proyecto::all();
    $valorUF = UFService::obtenerValorUF();  // Obtener valor UF desde el servicio

    return view('proyectos.index', compact('proyectos', 'valorUF'));  // Pasar ambas variables
}

    /**
     * Show the form for creating a new resource.
     */
  public function create()
{
    return view('proyectos.create'); 
}


    /**
     * Store a newly created resource in storage.
     */
  public function store(Request $request)
{
    // Validar datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'fecha_inicio' => 'required|date',
        'estado' => 'required|string|max:50',
        'responsable' => 'required|string|max:255',
        'monto' => 'required|numeric',
    ]);

    Proyecto::create($request-> all());

    return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente.');
}

  public function show($id)
{
    $proyecto = Proyecto::findOrFail($id);
    return view('proyectos.show', compact('proyecto'));
}

   public function edit(string $id)
{
    $proyecto = Proyecto::findOrFail($id);
    return view('proyectos.edit', compact('proyecto'));
}
  
   public function update(Request $request, string $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'fecha_inicio' => 'required|date',
        'estado' => 'required|string|max:50',
        'responsable' => 'required|string|max:255',
        'monto' => 'required|numeric',
    ]);

    $proyecto = Proyecto::findOrFail($id);
    $proyecto->update($request->all());

    return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado correctamente.');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $proyecto = Proyecto::findOrFail($id);
    $proyecto->delete();

    return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado correctamente.');
}

}
