@extends('layouts.master')
@section('title', 'Edit Student') <!-- Changed to singular -->
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Edit Student</h3></div> <!-- Changed to singular -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Back to Students</a></li> <!-- Assuming named route -->
           <li class="breadcrumb-item active" aria-current="page">Edit Student</li> <!-- More specific -->
         </ol>
       </div>
     </div>
     <!--end::Row-->
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
        <div class="card card-primary card-outline mb-4">
            <div class="card-header">
                <div class="card-title">Edit Student Information</div> <!-- More descriptive -->
            </div>
            <form action="{{ route('students.update', $students->id) }}" method="POST"> <!-- Fixed route -->
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $students->name) }}" placeholder="Enter student name" required />
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Student Age</label>
                        <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $students->age) }}" placeholder="Enter student age" required />
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Student Gender</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="" disabled>Select Gender</option>
                            <option value="M" {{ old('gender', $students->gender) == 'M' ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ old('gender', $students->gender) == 'F' ? 'selected' : '' }}>Female</option> <!-- Fixed typo -->
                            <option value="O" {{ old('gender', $students->gender) == 'O' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $students->email) }}" placeholder="Enter email" required /> <!-- Fixed id -->
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', $students->phone) }}" placeholder="Enter phone" required /> <!-- Changed to tel -->
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $students->address) }}" placeholder="Enter address" required />
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" class="form-control" id="class" name="class" value="{{ old('class', $students->class) }}" placeholder="Enter class" required />
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Student</button> <!-- More specific button text -->
                </div>
            </form>
        </div>
    </div>
@endsection
