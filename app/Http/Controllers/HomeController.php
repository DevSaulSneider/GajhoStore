<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nosotros()
    {
        return view('menu.nosotros');
    }

    public function contacto()
    {
        return view('menu.contacto' );
    }
    public function register()
    {
        $category = Category::all();
        $product = Product::all();
        return view('product.register')->with(compact('category', 'product'));
    }
    public function store(Request $request){

        $campos = [
            'category_id' => 'required|int|max:100',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'quantity' => 'required|int|max:100',
            'state' => 'required|string|max:100',
            'price' => 'required|int',
            'discount_price' => 'required|int',
            'image' => 'required'
        ];
        $mensaje = [
            'name' => 'nombre',
            'category_id' => 'categoria',
            'quantity' => 'cantidad',
            'description' => 'descripcion',
            'state' => 'estado',
            'information' => 'informacion',
            'price' => 'precio',
            'image' => 'imagen',
        ];

        $this->validate($request, $campos, $mensaje);
        $product = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'state' => $request->state,
            'information' => $request->information,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'image' => $request->image,
            'user_id' => auth()->user()->id
        ];
        if ($request->hasFile('image')) {
            $product['image'] = $request->file('image')->store('upload', 'public');
            File::copy(storage_path().'\app\public\\'.$product['image'], public_path().'\storage\\'.$product['image']);
        }

        Product::insert($product);
        return redirect()->route('index');
    }
}
