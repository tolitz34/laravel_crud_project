<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctors; // Ensure you have the correct model namespace
//use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class DoctorController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display a list of doctors
        // $doctors = Doctors::orderBy('created_at', 'desc')->peginate(5); // Adjust the pagination as needed
        $doctors = Doctors::orderByDesc('created_at')->paginate(5);
        return view('doctors.index', compact('doctors'));
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
            'phone' => 'required|digits:11|unique:doctors,phone',
        ]);

        // Logic to store the doctor information in the database
        // ...

       //dd('ok');
        Doctors::create($request->all());
        // Redirect back to the create form with a success message
        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');  //
    }

    public function show(Doctors $doctor)
    {
       // dd($doctor);
        // Logic to show a single doctor's details
        // Logic to retrieve and display a single doctor
       // $doctor = Doctors::findOrFail($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit(Doctors $doctor)
    {
        // Logic to show the form for editing a doctor
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctors $doctor)
    {
        // Validate the request data
        $request->validate([
            'docname' => 'required|string|min:2|max:255',

              'email' => [
                         'required',
                         'email',
                         Rule::unique('doctors', 'email')->ignore($doctor->id)
                        ],
               'phone' => [
                         'required',
                         'digits:11',
                         Rule::unique('doctors', 'phone')->ignore($doctor->id)
                         ],


                          ]);



        // Logic to update the doctor information in the database
        // ...
        $doctor->update($request->all());
        // Redirect back to the edit form with a success message
        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully!');
    }

    public function destroy(Doctors $doctor)
    {
        // Logic to delete a doctor from the database
         
        $doctor->delete();

        //dd('deleted');
        // Redirect back to the index page with a success message
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully!');
    }
}
