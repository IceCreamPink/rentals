<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = type::all();
        return view('type.tampil', ['types'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['type'=>'required']);
        $data=[
            'type'=>$request->type
        ];
        type::create($data);
        return redirect('type');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        type::where('id', $type->id)->delete();
        return redirect('type');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('type.edit', ['type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $request->validate(['type'=>'required']);
        $data=[
            'type'=>$request->type
        ];
        Type::where('id', $type->id)->update($data);
        return redirect('type');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}