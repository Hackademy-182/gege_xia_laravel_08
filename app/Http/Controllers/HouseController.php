<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = \App\Models\House::latest()->get();

        return view('houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'floor' => 'nullable|integer|min:0',
        ]);

        $data['user_id'] = auth()->id();

        auth()->user()->houses()->create($data);

        return redirect()->to('/houses');
    }

    /**
     * Store a newly created resource in storage.
     *

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
