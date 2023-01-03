<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index');
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store()
    {
        // return view('supplier.create');
    }

    public function edit($id)
    {
        return view('supplier.edit', compact('id'));
    }

    public function update()
    {
        // return view('supplier.create');
    }
}
