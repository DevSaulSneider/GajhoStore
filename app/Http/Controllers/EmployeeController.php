<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Turn;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::paginate();
        return view('employee.index', compact('employees'))
        ->with('i', (request()->input('page', 1) - 1) * $employees->perPage());
    }

    public function create()
    {

        $employee = new Employee();
        $turns = Turn::pluck('turn', 'id');
        return view('employee.create', compact('employee', 'turns'));
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

            'password'=>'required|min:8',
            'turn_id'=>'required',
        ];
        $messages = [
            'name.required'=> 'El nombre es requerido',   
            'lastName.required'=> 'El apellido es requerido',
            'phone.required'=> 'El telefono es requerido',
            'email.required'=> 'El correo es requerido',

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
        $employee = Employee::find($id);
        $turns = Turn::pluck('turn', 'id');
        return view('employee.edit', compact('employee', 'turns'));
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
        $campos = [
            'name'=>'required|string|max:100',
            'lastName'=>'required|string|max:100',
            'phone'=>'required|string|max:100',
            'email'=>'required|string|max:100',
            'password'=>'required|string|max:100',
            'turn_id'=>'required|int|max:1000000000|',
            
        ];
        $mensaje = [
            'name'=>'El nombre es obligatorio',   
            'lastName.required' => 'El apellido es requerido',
            'phone.required'=>'El telefono es obligatorio',
            'email.required'=>'El email es obligatorio',
            'password.required'=>'La contraseña es obligatoria',
            'turn_id.required'=>'La turno es obligatoria',

        ];

        $this->validate($request, $campos, $mensaje);
        $employeeData =  request()->except(['_token', '_method']);

        Employee::where('id', '=',$id)->update($employeeData);
        $employee=Employee::findOrFail($id);

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
