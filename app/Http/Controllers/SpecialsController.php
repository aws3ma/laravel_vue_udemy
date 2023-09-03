<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Special;
class SpecialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specials = Special::All();
        return view('admin.specials.index',["specials"=>$specials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specials.create');
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
