<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $JobList=UserRegistration::all();
        return view('JobListpage' , compact('JobList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UserRegistration::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role, 
        'phone'=> $request->phone,
        'city'=>$request->city,
        'qualification'=>$request->qualification,
        'experience'=>$request->experience,
        'languages'=> $request->languages,
        ]);
        return redirect()->route('main.index');
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
