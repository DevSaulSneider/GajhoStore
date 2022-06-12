<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->role_id == 1){
            $filtrarNombre = $request->get('filtrarNombre');
            $categories = DB::table('categories')->where('name', 'LIKE', '%'.$filtrarNombre.'%')->paginate(5);
            // $data['categories'] = Category::paginate(5);
            return view('category.index', compact('categories','filtrarNombre'));
        }else{
            return redirect('/index');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        if(Auth::user()->role_id == 1){
            return view('category.create');
        }else{
            return redirect('/index');
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|alpha|max:50|min:3',
        ];

        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.alpha' => 'El nombre solo debe contener letras',
            'name.max' => 'El nombre debe tener 50 caracteres como máximo',
            'name.min' => 'El nombre debe tener 3 caracteres como mínimo',
        ];

        $this->validate($request, $rules, $messages);

        $categoryData = request()->except('_token');
        Category::insert($categoryData);
        return redirect('category')->with('message', 'Categoria creada con exito');


        // $category = new Category();
        // $category->name = $request->name;
        // echo $category;
        // $category->save();
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
    public function edit($id)
    {
        if(Auth::user()->role_id == 1){
            $categoryData = Category::findOrFail($id);
            return view('category.edit', compact('categoryData'));
        }else{
            return redirect('/index');
        }
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|alpha|max:50|min:3',
        ];

        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.alpha' => 'El nombre solo debe contener letras',
            'name.max' => 'El nombre debe tener 50 caracteres como máximo',
            'name.min' => 'El nombre debe tener 3 caracteres como mínimo',
        ];

        $this->validate($request, $rules, $messages);

        $categoryData = request()->except(['_token', '_method']);
        Category::where('id', '=', $id)->update($categoryData);
        return redirect('category')->with('message', 'Categoria actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('message', 'Categoria borrada con exito');
    }

    public function consultarCategoriaPorID(Request $request){
        $consultaID = $request->get("consultaID");
        $categories = DB::table('categories')->where('id', '=', $consultaID)->paginate();
        return view('category.index', compact('categories','consultaID'));
    }
}
