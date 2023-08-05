<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(5);
        return view('employees.index', ['employees' => $employees]);
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show', ['employee' => $employee]);
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:Employees',
            'joining_date' => 'required',
            'salary' => 'required',
            'job_title' => 'required',
            'address' => 'required',
            'mobile_no' => 'required',
        ]);
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'joining_date' => $request->joining_date,
            'salary' => $request->salary,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'mobile_no' => $request->mobile_no,
        ]);
        Session::flash('success', 'Employees added sucessfully');
        return back();
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', ['employee' => $employee]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'joining_date' => 'required',
            'salary' => 'required',
            'job_title' => 'required',
            'address' => 'required',
            'mobile_no' => 'required',
        ]);
        Employee::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'joining_date' => $request->joining_date,
            'salary' => $request->salary,
            'job_title' => $request->job_title,
            'address' => $request->address,
            'mobile_no' => $request->mobile_no,
        ]);
        Session::flash('success', 'Employees updated sucessfully');
        return back();
    }
    public function destroy($id)
    {
        Employee::where('id', $id)->delete();
        Session::flash('success', 'Employees deleted sucessfully');
        return back();
    }
    public function search(Request $request)
    {
        $name = $request->name;
        $employees = Employee::where('name', 'like', '%' . $name . '%')->paginate(5);
        return view('employees.index', ['employees' => $employees]);
    }
}
