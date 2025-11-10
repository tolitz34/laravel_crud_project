@extends('layouts.app')

@section('title', 'Doctors List')
@section('content')
    <div class="text-center text-dark mt-5">
        <h1>Doctors Profile</h1>
    </div>


<div class="container mt-4">
    <div class="row">   
            <div class="col-md-6 offset-md-3">
               <h1 class="mb-4 text-dark text-center">Doctor Details</h1>
            <div class="card bg-secondary text-white mt-4">
                <div class="card-body border border-light rounded">
                    <h5 class="card-title">Doctor's Name: {{ $doctor->docname }}</h5>
                    <p class="card-text">Email: {{ $doctor->email }}</p>
                    <p class="card-text">Phone: {{ $doctor->phone }}</p>
                    <a href="{{ route('doctors.index', $doctor->id) }}" class="btn btn-outline-warning">Back to Doctors List</a>
               </div>
            </div>

</div>
@endsection