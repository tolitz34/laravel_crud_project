@extends('layouts.app')
@section('content')
    <div class="text-center mt-5">
        <h1>Create Doctors Profile</h1>
    </div>
@endsection

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card bg-dark text-white mt-4">
                <div class="card-body border border-light rounded">
                    <h2 class="text-center">Add New Doctor</h2>
                    <form action="{{ route('doctors.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Doctor's Name</label>
                            <input type="docname" 
                            name="docname" class="form-control bg-dark text-white" @error('docname') is-invalid @enderror>
                            @error('docname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Doctor's Email Address</label>
                            <input type="email" 
                            name="email" class="form-control bg-dark text-white" @error('email') is-invalid @enderror>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Doctor's Phone</label>
                            <input type="phone" 
                            name="phone" class="form-control bg-dark text-white" @error('phone') is-invalid @enderror>
                            @error('phone')
                               <div class="invalid-feedback">
                                    {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-success text-white">Add Doctor</button>
                
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>