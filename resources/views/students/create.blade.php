@extends('layouts.master')
@section('title', 'Create Students')
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Create New Students</h3></div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ url('students') }}">Back to Students</a></li>
           <li class="breadcrumb-item active" aria-current="page">Students</li>
         </ol>
       </div>
     </div>
     <!--end::Row-->
@endsection
@section('content')
    <div class="row justify-content-center"> <!-- Added justify-content-center here -->
        <!--begin::Col-->
        <div class="col-md-8 col-lg-6"> <!-- Adjusted column width for better centering -->
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Create New Students</div> <!-- Changed title -->
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('students.store') }}" method="POST"> <!-- Added form action -->
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Students Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" required />
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Students Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter student age" required />
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Students Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Fimale</option>
                            <option value="O">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emial" name="email" placeholder="Enter email" required />
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone" required />
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required />
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class" placeholder="Enter class" required />
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex justify-content-end"> <!-- Added flex justify-content-end -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Quick Example-->
    </div>
@endsection
