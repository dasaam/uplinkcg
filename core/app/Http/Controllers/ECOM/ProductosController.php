<?php

namespace App\Http\Controllers\ECOM;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
