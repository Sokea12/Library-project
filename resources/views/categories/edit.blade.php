@extends('layouts.master')
@section('title', 'Edit categories')
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Edit categories</h3></div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ url('categories') }}">Back to categories</a></li>
           <li class="breadcrumb-item active" aria-current="page">Categories</li>
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
                <div class="card-title">Edit categories</div> <!-- Changed title -->
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{route('categories.update', $categories->id)}}" method="POST"> <!-- Added form action -->
                @csrf
                @method('PUT') <!-- Added method to indicate PUT request for editing -->
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3"></div>
                        <label for="name" class="form-label">Categories Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name', $categories->name)}}" placeholder="Enter Categories name" required />
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
