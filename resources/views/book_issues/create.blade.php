@extends('layouts.master')
@section('title', 'Create Book Issues')
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Add Book Issues</h3></div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-end">
           <li class="breadcrumb-item"><a href="{{ url('book_issues') }}">Back to Book Issues</a></li>
           <li class="breadcrumb-item active" aria-current="page">Book Issues</li>
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
                <div class="card-title">Add Book Issues</div> <!-- Changed title -->
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('book_issues.store') }}" method="POST"> <!-- Added form action -->
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <section>
                            <select class="form-select" name="student_id" id="student_id" required>
                                <option value="">Select Student</option>
                                 $@foreach ($student_issues as $student_issue)
                                    <option value="{{$student_issue->id}}">{{$student_issue->name}}</option>
                                 @endforeach
                            </select>
                        </section>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Book Name</label>
                        <section>
                            <select class="form-select" name="book_id" id="book_id" required>
                                <option value="">Select Student</option>
                                 $@foreach ($book_issues as $book_issue)
                                    <option value="{{$book_issue->id}}">{{$book_issue->name}}</option>
                                 @endforeach
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
