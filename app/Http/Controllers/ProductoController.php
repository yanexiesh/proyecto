<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('producto.index')->with([
            'productos' => Producto::orderBy('id', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // return 'hola';
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request->hasFile('imagen');

        // $lapsoAcademico = $request->year . '-' . $request->periodo;
        $producto = new Producto;
        $producto->name  = $request->nombre;
        $producto->slug    = $request->Slug;
        $producto->price  = $request->precio;
        $producto->shipping_cost  = $request->shopping;
        $producto->description = $request->descripcion;
        $producto->category_id = $request->categoria;
        $producto->brand_id  = $request->marca;
            
        $files = $request->file('imagen');
        $nombreimg=$files->getClientOriginalName();
        $files->move('images/',$nombreimg);
        $producto->image_path = $nombreimg;
        $producto->save();
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
