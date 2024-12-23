<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{

    public function index() 
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }



    public function create()
    {
        return view('employee.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'CPF' => 'required|numeric|unique:employees',
            'date_birth' => 'required|date',
            'phone' => 'required|numeric',
            'gender' => 'required|in:Male,Female,Other',
        ]);

        $employee = new Employee($validated);

        print_r($employee);

        $employee->save();


        return redirect()->route('employee.index')->with('success', 'Employee created successfully!');
    }

    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)

    {
        $employee = Employee::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'CPF' => 'sometimes|required|string|max:11|unique:employees,CPF,' . $id,
            'date_birth' => 'sometimes|required|date',
            'phone' => 'sometimes|required|string|max:15',
            'gender' => 'sometimes|required|string|in:Male,Female,Other',
        ]);

        $employee->update($request->only(['name', 'CPF', 'date_birth', 'phone', 'gender']));

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully!');

    }

    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employee.index')->with('success', 'Employee deleted successfully!');
    }
}
