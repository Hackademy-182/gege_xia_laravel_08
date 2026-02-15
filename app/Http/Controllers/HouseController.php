<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::latest()->get();

        return view('houses.index', compact('houses'));
    }

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

        $request->user()->houses()->create($data);

        return redirect()->to('/houses');
    }

    public function show(House $house)
    {
        return view('houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, House $house)
    {
        abort_unless($request->user()->id === $house->user_id, 403);

        return view('houses.edit', compact('house'));
    }

    public function update(Request $request, House $house)
    {
        abort_unless($request->user()->id === $house->user_id, 403);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'floor' => 'nullable|integer|min:0',
        ]);

        $house->update($data);

        return redirect()->route('houses.show', $house);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        abort_unless(auth()->id() === $house->user_id, 403);

        $house->delete();

        return redirect()->route('houses.index');
    }
}
