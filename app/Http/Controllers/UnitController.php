<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('unit.index');
    }

    public function create()
    {
        return view('unit.create');
    }

    public function store()
    {
        // return view('unit.create');
    }

    public function edit()
    {
        // return view('unit.create');
    }

    public function update()
    {
        // return view('unit.create');
    }
}
