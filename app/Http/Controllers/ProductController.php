<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products['products'] = Product::paginate(5);

        return view('product.index', $products)->with('i');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        
        $categories = Category::pluck('name', 'id');
        return view('product.create', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $campos = [
            'category_id'=>'required|int|max:100',

            'name'=>'required|string|max:100',
            'description'=>'required|string|max:100',
            'quantity'=>'required|int|max:100',
            'state'=>'required|string|max:100',
            'price'=>'required|int|max:1000000000|',
            'discount_price'=>'required|int|max:1000000000|',
            'image'=>'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $mensaje = [
            'required'=>'El :attribute es obligatorio',
            'image.required'=>'La imagen es requerida',
            'discount_price.required' => 'El precio descuento es requerido',
            'price.required'=>'El precio es obligatorio',
            'state.required'=>'El estado de producto es obligatorio',
            'quactity.required'=>'La cantidad es obligatoria',
            'description.required'=>'La descripcion es obligatoria',
            'name.required'=>'El nombre del producto es obligatorio',

            'category_id.required'=>'La categoria es obligatoria'
        ];

        $this->validate($request, $campos, $mensaje);

        $product = request()->except('_token');
        
        if($request->hasFile('image')){
            $product['image']=$request->file('image')->store('upload', 'public');
        }
        Product::insert($product);
        return redirect()->route('products.index')
            ->with('success', 'Producto creado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('name', 'id');
        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {

        $campos = [
            'category_id'=>'required|int|max:100',
            'name'=>'required|string|max:100',
            'description'=>'required|string|max:100',
            'quantity'=>'required|int|max:100',
            'state'=>'required|string|max:100',
            'price'=>'required|int|max:1000000000|',
            'discount_price'=>'required|int|max:1000000000|',
            
        ];
        $mensaje = [
            'required'=>'El :attribute es obligatorio',   
            'discount_price.required' => 'El precio descuento es requerido',
            'price.required'=>'El precio es obligatorio',
            'state.required'=>'El estado de producto es obligatorio',
            'quactity.required'=>'La cantidad es obligatoria',
            'description.required'=>'La descripcion es obligatoria',
            'name.required'=>'El nombre del producto es obligatorio',

            'category_id.required'=>'La categoria es obligatoria'
        ];

        if($request->hasFile('image')){
            $campos = ['image'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje =['image.required'=>'La imagen es requerida'];  
        }

        $this->validate($request, $campos, $mensaje);
        $datosProduct =  request()->except(['_token', '_method']);

        if($request->hasFile('image')){
            $product=Product::findOrFail($id);
            Storage::delete('public/'. $product->image);
            $datosProduct['image']=$request->file('image')->store('upload', 'public');
        }
        Product::where('id', '=',$id)->update($datosProduct);

        $product=Product::findOrFail($id);
        // $product->update($request->all());
        

        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    public function getMostSelled () {
        $data['mostSelled'] = Product::paginate(5);
        return view('index', $data);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto borrado correctamente');
    }
}
