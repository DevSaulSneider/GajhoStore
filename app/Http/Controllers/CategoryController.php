<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::paginate(5);
        return view('category.index', $data);


        // $category = Category::all();

        // return $category;
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
        $rules=[
            'name'=>'required|max:50',
        ];

        $messages = [
            'name.required'=> 'El nombre es requerido',
        ];

        $this->validate($request,$rules,$messages);

        $categoryData = request()->except('_token');
        Category::insert($categoryData);
        return redirect('category')->with('message','Categoria creada con exito');


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
        $categoryData = request()->except(['_token', '_method']);
        Category::where('id', '=', $id)->update($categoryData);
        return redirect('category')->with('message','Categoria actualizada con exito');
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
}
