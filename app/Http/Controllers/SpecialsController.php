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
        $input = $request->all();
        $special = new Special();
        $special->name=$input['name'];
        $special->description=$input['description'];
        $special->was_price=$input['was_price'];
        $special->current_price=$input['current_price'];
        $special->brand=$input['brand'];
        $special->save();
        return redirect('/admin/specials');
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
        $special = Special::where('id',$id)->first();
        return view('admin.specials.edit',['special'=>$special]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $input = $request->all();
        $special = Special::where('id',$id)->first();
        $special->name=$input['name'];
        $special->description=$input['description'];
        $special->was_price=$input['was_price'];
        $special->current_price=$input['current_price'];
        $special->brand=$input['brand'];
        $special->save();
        return redirect('/admin/specials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $special = Special::where('id',$id)->delete();
        return redirect('/admin/specials');
    }
}
