@extends('layout')

@section('page-content')
    <br>
    <legend>Edit Employee</legend>
    <br>
    @if(Session::has('success'))
        <br>
        <div style="text-align:center;background-color:aqua;padding:10px 10px 5px 10px;">
            <p>{{ Session::get('success') }}</p>
        </div>
        <br>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                <br>
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('/update-employee',$employee->id) }}">
        @csrf
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="name"
                       placeholder="" value="{{ $employee->name  }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Job Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="job_title"
                       placeholder="" value="{{ $employee->job_title }}" required>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Joining Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" value="{{ $employee->joining_date }}" id="title" name="joining_date"
                       placeholder="" required>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Salary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $employee->salary }}" id="title" name="salary"
                       placeholder="" required>
            </div>
        </div>
         <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" value="{{ $employee->email }}" id="title" name="email"
                       placeholder="" required>
            </div>
        </div>
         <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Mobile No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $employee->mobile_no }}" id="title" name="mobile_no"
                       placeholder="" required>
            </div>
        </div>
         <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="comment" name="address" required>{{ $employee->address }}</textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

@endsection



