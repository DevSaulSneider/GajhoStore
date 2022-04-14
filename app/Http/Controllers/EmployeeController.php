<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return $employee;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->lastName = $request->lastName;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->userName = $request->userName;
        $employee->password = $request->password;
        $employee->turn_id = $request->turn_id;
        $employee->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($request->id);
        $employee->name = $request->name;
        $employee->lastName = $request->lastName;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->userName = $request->userName;
        $employee->password = $request->password;
        $employee->save();
        
        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $employee = Employee::destroy($request->id);

        return $employee;
    }
}
