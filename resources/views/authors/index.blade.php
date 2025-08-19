@extends('layouts.master')
@section('title', 'Authors')
@section('css')
​
@endsection
@section('content-header')
     <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">All Authors</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('authors.create') }}">Add New Author</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Authors</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
<div class="card mb-4">
    <div class="card-header">
    <h3 class="card-title">All Authors</h3>
    <div class="card-tools">
        <ul class="pagination pagination-sm float-end">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
    <table class="table">
    <thead>
    <tr>
        <th>S.No</th>
        <th>Author Name</th>
        <th>Edit</th>
        <th style="width: 40px">Delete</th>
    </tr>
    </thead>
    <tbody>
    @php
    $count = 1; // Initialize counter more cleanly
    @endphp
    @foreach ($authors as $author)
    <tr class="align-middle">
        <td>{{ $count++ }}</td> <!-- Increment counter -->
        <td>{{ $author->name }}</td>
        <td>
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-success">Edit</a>
        </td>
        <td>
            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="form-hidden">
                @csrf
                @method('DELETE') <!-- Add method spoofing for DELETE -->
                <button type="submit" class="btn btn-danger delete-author"
                        onclick="return confirm('Are you sure you want to delete this author?')">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
    @if ($authors->isEmpty())
    <tr>
        <td colspan="4" class="text-center">
            <h5><i>No authors found!</i></h5>
        </td>
    </tr>
    @endif
    </tbody>
</table>
    </div>
</div>
@endsection
