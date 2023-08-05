@extends('layout')

@section('page-content')
    <br>
    <br>
    <h1 class="text-center text-primary">Welcome to Employee information System</h1>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Emplyees CRUD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<script src="{{ asset('assets/css/script.js') }}"></script>

</head>
<body>
    <a href="{{ route('/add-employee') }}" style="float:left;text-decoration:none;padding:15px;margin-left:20px;margin-top:20px;" class="btn btn-primary"> + Add Emplyee</a>
    <br>
    <br>
    <br>
@if(Session::has('success'))
    <br>
    <div style="text-align:center;background-color:aqua;padding:10px 10px 5px 10px;">
        <p>{{ Session::get('success') }}</p>
    </div>
    <br>
@endif

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <form method="get" action="{{ route('/search-employee')}}">
                            @csrf
                            <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" name="name" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Job Title</th>
                        <th>Joining Date</th>
                        <th>Salary</th>
                        <th>Email</th>
                        <th>Mobile no</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->job_title }}</td>
                        <td>{{ $employee->joining_date }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->mobile_no }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            <a href="{{ route('/employee-details',['id'=> $employee->id]) }}"" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="{{ route('/edit-employee',['id'=> $employee->id]) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="{{ route('/delete-employee',['id'=> $employee->id]) }}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $employees->links() }}
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
