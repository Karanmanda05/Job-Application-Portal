<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeerProfile;

class EmployeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Profile = EmployeerProfile::all();
        return view('ProfileList' , compact('Profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('EmployeerForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        EmployeerProfile::create($request->all());
        return redirect()->route('emp.index');
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
        $Profile = EmployeerProfile::findorfail($id);
        return view('ProfileEditForm' , compact('Profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Profile = EmployeerProfile::findorfail($id);
        $Profile->company_name = $request->company_name;
        $Profile->company_email = $request->company_email;
        $Profile->company_phone = $request->company_phone;
        $Profile->company_address = $request->company_address;
        $Profile->company_city = $request->company_city;
        $Profile->company_state = $request->company_state;
        $Profile->company_country = $request->company_country;
        $Profile->company_zipcode = $request->company_zipcode;
        $Profile->save();
        return redirect()->route('emp.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Profile=EmployeerProfile::findorfail($id);
        $Profile->delete();
        return redirect()->route('emp.index');
    }
}
