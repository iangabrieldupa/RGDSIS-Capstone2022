<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index');
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store()
    {
        // return view('brand.create');
    }

    public function edit()
    {
        // return view('brand.create');
    }

    public function update()
    {
        // return view('brand.create');
    }
}
