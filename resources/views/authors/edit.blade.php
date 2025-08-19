@extends('layouts.master')

@section('title', 'Edit Author') <!-- Changed to match edit action -->

@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Edit Author</h3></div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ route('authors.index') }}">Authors List</a></li> <!-- Changed to use route helper -->
           <li class="breadcrumb-item active" aria-current="page">Edit Author</li> <!-- Updated text -->
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
                    <div class="card-title">Edit Author</div>
                </div>

                <!-- Form for editing existing author -->
                <form action="{{ route('authors.update', $author->id) }}" method="POST"> <!-- Added proper action -->
                    @csrf
                    @method('PUT') <!-- Added method spoofing for PUT request -->

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Author Name</label>
                            <input
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                placeholder="Enter author name"
                                value="{{ old('name', $author->name) }}"
                                required
                            />
                            @error('name') <!-- Added error message display -->
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update Author</button> <!-- Changed button text -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
