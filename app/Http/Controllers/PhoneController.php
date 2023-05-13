<?php

namespace App\Http\Controllers;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones=Phone::all();
        return view('phone.index',['phones'=>$phones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $phone=Phone::create($request->all());
        $phone->save();
        return redirect()->route('phone.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
