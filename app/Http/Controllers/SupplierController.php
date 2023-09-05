<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = supplier::all();
        return view('layouts.content.supplier', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.form.tambahsupplier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newsupplier = new Supplier();
        $newsupplier->nama_supplier = $request->input('nama_supplier');
        // $newsupplier->deskripsi = $request->input('deskripsi');
        $newsupplier->alamat = $request->input('alamat');
        $newsupplier->no_telp = $request->input('no_telp');
        $newsupplier->save();

        return redirect()->route('dashboard.supplier.index');
    }

    /**
     * Display the specified resource.
     */
    public function delete($id)
    {
        // Item::where('product_id', $id)->delete();
        // Supplier::where('Supplier_id', $id)->delete();
        // Supplier::destroy($id);
        $supplier = supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('dashboard.supplier.index');
    }

    public function show(Supplier $Supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = supplier::findOrFail($id);
        return view('layouts.form.editsupplier', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $supplier = supplier::find($id);
        $supplier ->nama_supplier = $request->input('nama_supplier');
        $supplier->alamat = $request->input('alamat');
        $supplier->no_telp = $request->input('no_telp');
        $supplier->update();    
        return redirect()->route('dashboard.supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(supplier $supplier)
    {
        //
    }
}
