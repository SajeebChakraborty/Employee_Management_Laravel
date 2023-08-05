@extends('layout')

@section('page-content')
    <br>
    <h1>Employee Details</h1>
    <br>
    <div class="details">
        <p><b>Employee Name : </b>{{ $employee->name }}</p>
        <p><b>Job Title : </b>{{ $employee->job_title }}</p>
        <p><b>Joining Date : </b>{{ $employee->joining_date }}</p>
        <p><b>Salary : </b>{{ $employee->salary }}</p>
        <p><b>Email : </b>{{ $employee->email }}</p>
        <p><b>Mobile : </b>{{ $employee->mobile_no }}</p>
        <p><b>Address : </b>{{ $employee->address }}</p>
    </div>

@endsection



