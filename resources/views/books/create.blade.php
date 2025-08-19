@extends('layouts.master')
@section('title', 'Create Books')
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Create New Book</h3></div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ url('books') }}">Back to Books</a></li>
           <li class="breadcrumb-item active" aria-current="page">Books</li>
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
                <div class="card-title">Create New Book</div> <!-- Changed title -->
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('books.store') }}" method="POST"> <!-- Added form action -->
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Book name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter book name" required />
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Category</label>
                        <section>
                            <select class="form-select" name="category_id" id="category_id" required>
                                <option value="">Select Category</option>
                                    <option value="1">English book</option>
                                    <option value="1">Khmer book</option>
                            </select>
                        </section>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Author</label>
                        <section>
                            <select class="form-select" name="auther_id" id="auther_id" required>
                                <option value="">Select Author</option>
                                    <option value="1">Sokea</option>
                                    <option value="1">Roszy</option>
                            </select>
                        </section>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Publisher</label>
                        <section>
                            <select class="form-select" name="publisher_id" id="publisher_id" required>
                                <option value="">Select Publisher</option>
                                    <option value="1">Sokea</option>
                                    <option value="1">Roszy</option>
                            </select>
                        </section>
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
