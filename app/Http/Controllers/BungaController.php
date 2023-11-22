<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use App\Models\bunga;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BungaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bungas = bunga::all(); // Sesuaikan dengan nama model Anda, biasanya huruf pertama kapital
        return view('index', compact('bungas'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
