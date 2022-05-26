<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Turn;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter');
        $employees = DB::table('employees')->where('id', 'LIKE', '%'.$filter.'%')
                                           ->paginate(10);
        return view('employee.index',compact('employees', 'filter'));  

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
            'name'=>'required|max:30|min:2|alpha',
            'lastName'=>'required|max:30|min:2|alpha',
            'phone'=>'required|digits:9',
            'email'=>'required|email',
            'username'=>'required|alpha_num',
            'password'=>'required|min:8',
            'turn_id'=>'required|numeric',
        ];
        $messages = [
            'name.required'=> 'El nombre es requerido',
            'name.max'=> 'El nombre puede tener 30 caracteres como máximo',
            'name.min'=> 'El nombre puede tener 2 caracteres como mínimo',
            'name.alpha'=> 'El nombre solo puede contener letras',   
            'lastName.required'=> 'El apellido es requerido',
            'lastName.max'=> 'El apellido puede tener 30 caracteres como máximo',
            'lastName.min'=> 'El apellido puede tener 2 caracteres como mínimo',
            'lastName.alpha'=> 'El apellido solo puede contener letras',   
            'phone.required'=> 'El telefono es requerido',
            'phone.digits'=> 'El telefono debe tener 9 digitos',
            'email.required'=> 'El correo es requerido',
            'email.email'=> 'El correo debe ser valido',
            'username.required'=>'El nombre de usuario es requerido',
            'username.alpha_num'=>'El nombre de usuario solo debe contener caracteres alfanumericos',
            'password.required'=> 'La contraseña es requerida',
            'password.min'=> 'La contraseña debe tener 8 caracteres como mínimo ',
            'turn_id.required'=> 'El turno es requerido',
            'turn_id.numeric'=> 'El turnoid debe ser numerico',
        ];

        $this->validate($request,$rules,$messages);

        $employeeData= request()->except('_token');
        Employee::insert($employeeData);
        return redirect('employee')->with('message', 'Empleado creado con exito');

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
        $rules=[
            'name'=>'required|max:30|min:2|alpha',
            'lastName'=>'required|max:30|min:2|alpha',
            'phone'=>'required|digits:9',
            'email'=>'required|email',
            'username'=>'required|alpha_num',
            'password'=>'required|min:8',
            'turn_id'=>'required|numeric',
        ];
        $messages = [
            'name.required'=> 'El nombre es requerido',
            'name.max'=> 'El nombre puede tener 30 caracteres como máximo',
            'name.min'=> 'El nombre puede tener 2 caracteres como mínimo',
            'name.alpha'=> 'El nombre solo puede contener letras',   
            'lastName.required'=> 'El apellido es requerido',
            'lastName.max'=> 'El apellido puede tener 30 caracteres como máximo',
            'lastName.min'=> 'El apellido puede tener 2 caracteres como mínimo',
            'lastName.alpha'=> 'El apellido solo puede contener letras',   
            'phone.required'=> 'El telefono es requerido',
            'phone.digits'=> 'El telefono debe tener 9 digitos',
            'email.required'=> 'El correo es requerido',
            'email.email'=> 'El correo debe ser valido',
            'username.required'=>'El nombre de usuario es requerido',
            'username.alpha_num'=>'El nombre de usuario solo debe contener caracteres alfanumericos',
            'password.required'=> 'La contraseña es requerida',
            'password.min'=> 'La contraseña debe tener 8 caracteres como mínimo ',
            'turn_id.required'=> 'El turno es requerido',
            'turn_id.numeric'=> 'El turnoid debe ser numerico',
        ];

        $this->validate($request, $rules, $messages);
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
