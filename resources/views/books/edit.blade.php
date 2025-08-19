@extends('layouts.master')
@section('title', 'Edit Books')
@section('content-header')
     <!--begin::Row-->
     <div class="row">
       <div class="col-sm-6"><h3 class="mb-0">Edit Book</h3></div>
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
    <div class="row justify-content-center">
        <!--begin::Col-->
        <div class="col-md-8 col-lg-6">
        <!--begin::Quick Example-->
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Edit Book</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form action="{{ route('books.update', $book->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Book name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name', $book->name) }}" placeholder="Enter book name" required />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" name="category_id" id="category_id" required>
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $book->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author_id" class="form-label">Author</label>
                        <select class="form-select" name="auther_id" id="auther_id" required>
                            <option value="">Select Author</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}"
                                    {{ $book->auther_id == $author->id ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('auther_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="publisher_id" class="form-label">Publisher</label>
                        <select class="form-select" name="publisher_id" id="publisher_id" required>
                            <option value="">Select Publisher</option>
                            @foreach($publishers as $publisher)
                                <option value="{{ $publisher->id }}"
                                    {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                                    {{ $publisher->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('publisher_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update Book</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Quick Example-->
    </div>
@endsection
