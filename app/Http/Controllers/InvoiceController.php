<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index');
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function store()
    {
        // return view('invoice.create');
    }

    public function edit()
    {
        return view('invoice.edit');
    }

    public function update()
    {
        // return view('invoice.create');
    }
}
