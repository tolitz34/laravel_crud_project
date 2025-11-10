<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display a list of doctors
    }

    public function create()
    {
        // Logic to show the form for creating a new doctor
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'docname' => 'required|string|min:2|max:255',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|digits:10|unique:doctors,phone',
        ]);

        // Logic to store the doctor information in the database
        // ...

       dd('Doctor information stored successfully!');

        // Redirect back to the create form with a success message
       // return redirect()->route('doctors.create')->with('success', 'Doctor added successfully!');  //
    }
}
