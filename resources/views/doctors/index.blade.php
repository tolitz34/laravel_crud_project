@extends('layouts.app')

@section('title', 'Doctors List')
@section('content')
    <div class="text-center text-dark mt-5">
        <h1>Doctors Profile</h1>
    </div>


<div class="container mt-4">
               <h2 class="mb-4 text-dark text-center">Doctors List</h2>
               <a href="{{ route('doctors.create') }}" class="btn btn-outline-secondary mb-3">Add Doctor</a>
            <table class="table table-striped table-bordered text-dark">     
                   @session('success')
                         <div class="alert alert-success alert-dismissible fade show" role=alert>
                           <strong>Success!</strong> {{ $value}}

                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                   @endsession

               
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Doctor's Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Actions</th>
                                </tr>
                        
                           </thead>

                        <tbody>
                
                                @forelse($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->docname }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->phone }}</td>
                                        <td>
                                            <!-- Add action buttons here -->
                                             <a href="{{ route('doctors.show', $doctor->id) }}" class="btn btn-outline-success">View</a>
                                             <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-outline-primary">Edit</a>
                                             <!-- <from action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline>
                                             @csrf
                                                @method('DELETE')
                                                  <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure you want to delete this doctor?')"
                                                >Delete</button> -->

                                                <button type="button" class="btn btn-outline-danger delete-btn"
                                                   data-bs-toggle="modal" data-bs-target="#deleteDoctorModal"
                                                   data-id="{{ $doctor->id }}">Delete</button>
                                        
                                                <form id="delete-form" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No doctors found.</td>
                                    </tr>

                                @endforelse
                                    
                        
                            </tbody>
                     </table>
               <div class="d-flex justify-content-end mt-4">
                   <!-- Pagination links -->    
                  {{$doctors->links('vendor.pagination.bootstrap-5-dark')}}  <!-- Pagination links -->   
               </div>
        </div>
<!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteDoctorModal" tabindex="-1" aria-labelledby="deleteDoctorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDoctorModalLabel">Delete Doctor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <p>Are you sure you want to delete this doctor?</p>
                   <p>This action cannot be undone.</p>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteform" method="POST" action="{{ route('doctors.destroy', $doctor->id) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const deleteform = document.getElementById('deleteform');

        deleteButtons.forEach(button =>  {
            button.addEventListener('click', function() {
                const doctorId = this.dataset.id;
                deleteform.action = `/doctors/${doctorId}`;
                });
                });
            });
    

</script>


@endsection