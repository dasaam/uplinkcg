<?php

namespace App\Http\Controllers\ECOM;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ProductosController extends Controller
{
    public function ajax(Request $request)
    {
        $model = Producto::query();

        return DataTables::eloquent($model)
        ->addColumn('action',function($producto){
            return view('ECOM.productos._action', compact('producto'));
        })
        ->toJson();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ECOM.productos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ECOM.productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Producto::create([
            'idapp' => $request->input('app'),
            'producto' => $request->input('producto'),
            'url' => Str::slug($request->input('producto'), '-'),
            'modelo' => $request->input('modelo'),
            'descripcion_corta' => $request->input('descripcion')
        ]);

        session()->flash('success', 'Producto creado correctamente' );

        return redirect()->route('productos.index');
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
    public function edit($idproductoapp)
    {
        $producto = Producto::findOrFail($idproductoapp);

        return view('ECOM.productos.crear', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idproductoapp)
    {
        $producto = Producto::findOrFail($idproductoapp);
        $producto->update($request->except('_token','_method'));

        session()->flash('success', 'Producto actualizado correctamente');

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(Producto $producto)
    public function destroy(Producto $producto)
    {

        $producto->delete();

        session()->flash('success', 'Producto eliminado correctamente' );

        return redirect()->route('productos.index');
    }
}
