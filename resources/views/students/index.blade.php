@extends('layouts.master')
@section('title', 'Students')
@section('css')
​
@endsection
@section('content-header')
     <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">All Students</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="{{ route('students.create') }}">Add New Students</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Students</li>
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
    <h3 class="card-title">All Students</h3>
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
            {{-- <th style="width: 10px">#</th> --}}
            <th>S.No</th>
            <th>Students Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Class</th>
            <th>Edit</th>
            <th style="width: 40px">Delete</th>
        </tr>
        </thead>
        <tbody>
        {{-- Loop through authors --}}
        @php
        $coun = 0;
        @endphp
        @foreach ($students as $student)
        <tr class="align-middle">
            <td>{{$coun+=1}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            <td>{{$student->class}}</td>
            <td>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success">Edit</a>
            </td>
            <td>
                <button class="btn btn-danger delete-author" data-toggle="modal" data-target="#exampleModal">
                    <input type="hidden" name="student_id" id="student_id" value="{{ $student->id }}">
                    <input type="hidden" name="student_name" id="student_name" value="{{ $student->name }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
        @if ($students->isEmpty())
        {{-- If there are no authors, show a message --}}
        <tr>
            <td colspan="4" class="text-center">
                <h5><i>No Author in table!</i></h5>
            </td>
        </tr>
        @endif
        </tbody>
    </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this student?</p>
        <p class="text-danger">This action cannot be undone.</p>
        <p class="text-muted">Student Name: <b><span id="student-name"></span></b></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="" method="POST" id="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- end of Delete Confirmation Modal --}}
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.delete-author').on('click', function() {
            var studentsId = $(this).find('input[name="student_id"]').val();
            var studentsName = $(this).find('input[name="student_name"]').val();

            $('#student-name').text(studentsName);

            // Base route with placeholder
            var baseRoute = "{{ route('students.destroy', ':id') }}";
            var finalRoute = baseRoute.replace(':id', studentsId);

            $('#delete-form').attr('action', finalRoute);
        });
    });
</script>
@endsection
