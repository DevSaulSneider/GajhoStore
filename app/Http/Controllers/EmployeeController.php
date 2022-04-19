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
        $employee ['employees'] = Employee::paginate(5);
        return view('employee.index', $employee);
    }

    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required|max:20',
            'lastName'=>'required|max:30',
            'phone'=>'required|max:9',
            'email'=>'required',
            'userName'=>'required|max:10',
            'password'=>'required|min:8',
            'turn_id'=>'required',
        ];
        $messages = [
            'name.required'=> 'El nombre es requerido',   
            'lastName.required'=> 'El apellido es requerido',
            'phone.required'=> 'El telefono es requerido',
            'email.required'=> 'El correo es requerido',
            'userName.required'=> 'El usuario es requerido',
            'password.required'=> 'La contraseña es requerida',
            'turn_id.required'=> 'El turno_id es requerido',
        ];

        $this->validate($request,$rules,$messages);

        $employeeData= request()->except('_token');
        Employee::insert($employeeData);
        return redirect('employee')->with('message', 'Empleado creado con exito');

        //$employee = new Employee();
        //$employee->name = $request->name;
        //$employee->lastName = $request->lastName;
        //$employee->phone = $request->phone;
        //$employee->email = $request->email;
        //$employee->userName = $request->userName;
        //$employee->password = $request->password;
        //$employee->turn_id = $request->turn_id;
        //$employee->save();
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

    public function edit($id)
    {
        $employeeData = Employee::findOrFail($id);
        return view('employee.edit', compact('employeeData'));
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
        $employeeData = request()->except(['_token', '_method']);
        Employee::where('id', '=', $id)->update($employeeData);
        return redirect('employee')->with('message','Empleado actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('employee')->with('message', 'Empleado borrada con exito');
    }
}
