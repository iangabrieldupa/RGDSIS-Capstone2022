<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store()
    {
        // return view('category.create');
    }

    public function edit($id)
    {
        return view('category.edit', compact('id'));
    }

    public function update()
    {
        // return view('category.create');
    }
}
