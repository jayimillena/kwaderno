<?php

namespace App\Http\Controllers;

use App\Models\Kwaderno;
use App\Http\Requests\KwadernoRequest;

class KwadernoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kwadernos.index', [
            'kwadernos' => Kwaderno::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kwadernos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KwadernoRequest $request)
    {
        Kwaderno::create($request->validated());
        return redirect()->route('kwadernos.index', [
            'kwadernos' => Kwaderno::all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kwaderno $kwaderno)
    {
        return view('kwadernos.show', compact('kwaderno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kwaderno $kwaderno)
    {
        return view('kwadernos.edit', compact('kwaderno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KwadernoRequest $request, Kwaderno $kwaderno)
    {
        $kwaderno->update($request->validated());
        return redirect()->route('kwadernos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kwaderno $kwaderno)
    {
        $kwaderno->delete();
        return redirect()->route('kwadernos.index', [
            'kwadernos' => Kwaderno::all()
        ]);
    }
}
