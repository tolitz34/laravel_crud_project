@extends('layouts.app')

@section('title', 'Doctor Edit Profile')

@section('content')
    <div class="text-center text-dark mt-5">
        <h1>Doctors Profile</h1>
        <a href="{{ route('doctors.index') }}" class="text-dark">Back to Doctors List</a>
    </div>


<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
       
            <div class="card bg-secondary text-white mt-4">
                <div class="card-body border border-light rounded">
                    <h2 class="text-center">Edit Doctor</h2>
                    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Doctor's Name</label>
                            <input type="docname" 
                            name="docname" 
                            class="form-control bg-white text-dark @error('docname') is-invalid @enderror"
                            value="{{ old('docname', $doctor->docname)}}">
                            @error('docname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Doctor's Email Address</label>
                            <input type="email" 
                            name="email" 
                            class="form-control bg-white text-dark @error('email') is-invalid @enderror"
                            value="{{ old('email', $doctor->email) }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Doctor's Phone</label>
                            <input type="phone" 
                            name="phone" 
                            class="form-control bg-white text-dark @error('phone') is-invalid @enderror"
                            value="{{ old('phone', $doctor->phone)}}">
                            @error('phone')
                               <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-dark text-white">Update</button>
                
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection