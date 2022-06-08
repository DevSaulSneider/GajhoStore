<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrarNombre = $request->get('filtrarNombre');
        $categories = DB::table('categories')->where('name', 'LIKE', '%'.$filtrarNombre.'%')->paginate(5);
        // $data['categories'] = Category::paginate(5);
        return view('category.index', compact('categories','filtrarNombre'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('category.create');
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
        $categoryData = Category::findOrFail($id);
        return view('category.edit', compact('categoryData'));
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
