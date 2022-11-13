<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use File;
// use Illuminate\Contracts\Auth\Access\Gate;


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
     * 
     */
    public function index(Request $request, Product $product)
    {
        $this->authorize('product', $product);
        $filtrarNombre = $request->get('filtrarNombre');
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.id as id', 'categories.name as categoria', 'products.name', 'products.description', 'products.quantity', 'products.price', 'products.discount_price', 'products.image')
            ->where('products.name', 'LIKE', '%' . $filtrarNombre . '%')
            ->orderBy('id')
            ->paginate(5);

        return view('product.index', compact('products'))->with('i');
    }

    public function searchById(Request $request)
    {
        $products['products'] = Product::where('id', $request);
        return view('product.index', $products);
    }

    public function productById($productId)
    {
        $product['product'] = DB::table('products')->where('id', $productId)->get()->first();
        return view('productDetail', $product);
    }
    public function filterByCategory($categoryId)
    {
        $products = DB::table('products')->where([['category_id', '=', $categoryId], ['quantity', '>', '0']]);
        $products = $products->get();
        $categories = Category::all();
        return view('catalogue', compact('products', 'categories'));
    }

    public function catalogue(Request $request)
    {
        $categories = Category::all();
        if (!$request->filtrarPrecio) {
            $products = Product::where('quantity', '>', '0')->get();
        } else {
            $filtrarPrecio = $request->filtrarPrecio;
            $products = DB::table('products')
                ->where([['price', '<', $filtrarPrecio], ['quantity', '>', '0']])->get();
        }
        return view('catalogue', compact('products', 'categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        $this->authorize('product', $product);
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
            'category_id' => 'required|int|max:100',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'quantity' => 'required|int|max:100',
            'state' => 'required|string|max:100',
            'price' => 'required|int|max:1000000000|',
            'discount_price' => 'required|int|max:1000000000|',
            'image' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $mensaje = [
            'required' => 'El :attribute es obligatorio',
            'image.required' => 'La imagen es requerida',
            'discount_price.required' => 'El precio descuento es requerido',
            'price.required' => 'El precio es obligatorio',
            'state.required' => 'El estado de producto es obligatorio',
            'quantity.required' => 'La cantidad es obligatoria',
            'description.required' => 'La descripcion es obligatoria',
            'name.required' => 'El nombre del producto es obligatorio',
            'category_id.required' => 'La categoria es obligatoria',
            'image.required' => 'La imagen es requerida',
            'image.mimes' => 'Solo formato jpg,png y jpeg'
        ];

        $this->validate($request, $campos, $mensaje);

        $product = request()->except(['_token', 'quantity']);
        $product["published"] = $request->quantity;
        $product["sold"] = 0;
        $product["status"] = ($product['sold'] == $product["published"]) ? "Vendido" : "Publicado";

        if ($request->hasFile('image')) {
            $product['image'] = $request->file('image')->store('upload', 'public');
            File::copy(storage_path() . '\app\public\\' . $product['image'], public_path() . '\storage\\' . $product['image']);
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
        $products = new Product();
        $this->authorize('product', $products);
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
    public function update(Request $request, $id)
    {

        $campos = [
            'category_id' => 'required|int|max:100',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'quantity' => 'required|int|max:100',
            'state' => 'required|string|max:100',
            'price' => 'required|int|max:1000000000|',
            'discount_price' => 'required|int|max:1000000000|',

        ];
        $mensaje = [
            'required' => 'El :attribute es obligatorio',
            'discount_price.required' => 'El precio descuento es requerido',
            'price.required' => 'El precio es obligatorio',
            'state.required' => 'El estado de producto es obligatorio',
            'quactity.required' => 'La cantidad es obligatoria',
            'description.required' => 'La descripcion es obligatoria',
            'name.required' => 'El nombre del producto es obligatorio',

            'category_id.required' => 'La categoria es obligatoria'
        ];

        if ($request->hasFile('image')) {
            $campos = ['image' => 'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje = ['image.required' => 'La imagen es requerida'];
        }

        $this->validate($request, $campos, $mensaje);
        $datosProduct =  request()->except(['_token', '_method']);

        $datosProduct["published"] = $request->published + $datosProduct['quantity'];
        $datosProduct["status"] = ($request->sold == $datosProduct["published"]) ? "Vendido" : "Publicado";
        unset($datosProduct['quantity']);

        if ($request->hasFile('image')) {
            $product = Product::findOrFail($id);
            Storage::delete('public/' . $product->image);
            $datosProduct['image'] = $request->file('image')->store('upload', 'public');
            File::copy(storage_path() . '\app\public\\' . $datosProduct['image'], public_path() . '\storage\\' . $datosProduct['image']);
        }
        Product::where('id', '=', $id)->update($datosProduct);

        $product = Product::findOrFail($id);
        // $product->update($request->all());


        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado correctamente');
    }

    public function getMostSelled()
    {
        $offer =  DB::table('products')
            ->where('quantity', '>', '0')
            ->orderBy('discount_price')
            ->paginate(5);
        $mostSelled = Product::where('quantity', '>', '0')->paginate(5);
        return view('index', compact('mostSelled', 'offer'));
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

    public function consultarProductoPorID(Request $request)
    {
        $consultaID = $request->get("consultaID");
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->where('products.id', '=', $consultaID)
            ->select('products.id as id', 'categories.name as categoria', 'users.name as user', 'products.name', 'products.description', 'products.quantity', 'products.state', 'products.price', 'products.discount_price', 'products.image')
            ->paginate();
        return view('product.index', compact('products'))->with('i');
    }

    public function listarPrecioEntre(Request $request)
    {
        // $idCat = $request->get("idCategoria");
        // return $idCat;
        return "no";
        // return $request;
        // $products = DB::table('products')->where('category_id', '=', $categoryId);
        // $products = $products->get();
        // $categories = Category::all();
        // return view('catalogue', compact('products', 'categories'));
    }

    public function historialVentas()
    {
        $products = Product::where('user_id', '=', auth()->id())->get();
        return view('product.historialVentas', compact('products'));
    }

    public function updateProducto(Request $request)
    {
        $campos = [
            'category_id' => 'required|int|max:100',
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:100',
            'quantity' => 'required|int|max:100',
            'state' => 'required|string|max:100',
            'price' => 'required|int|max:1000000000|',
            'discount_price' => 'required|int|max:1000000000|',

        ];
        $mensaje = [
            'required' => 'El :attribute es obligatorio',
            'discount_price.required' => 'El precio descuento es requerido',
            'price.required' => 'El precio es obligatorio',
            'state.required' => 'El estado de producto es obligatorio',
            'quantity.required' => 'La cantidad es obligatoria',
            'description.required' => 'La descripcion es obligatoria',
            'name.required' => 'El nombre del producto es obligatorio',

            'category_id.required' => 'La categoria es obligatoria'
        ];

        if ($request->hasFile('image')) {
            $campos = ['image' => 'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje = ['image.required' => 'La imagen es requerida'];
        } 

        $this->validate($request, $campos, $mensaje);
        $datosProduct =  request()->except(['_token', '_method']);
        
        $product = Product::findOrFail($request->id);
        $datosProduct["published"] = $product->published + $datosProduct['quantity'];
        $datosProduct["status"] = ($product->sold == $datosProduct["published"]) ? "Vendido" : "Publicado";
        unset($datosProduct['quantity']);

        if ($request->hasFile('image')) {
            
            Storage::delete('public/' . $product->image);
            $datosProduct['image'] = $request->file('image')->store('upload', 'public');
            File::copy(storage_path().'\app\public\\'.$datosProduct['image'], public_path().'\storage\\'.$datosProduct['image']);
        }
        
        Product::where('id', '=', $request->id)->update($datosProduct);
        return redirect()->route('historial');
    }

    public function editProducto(Request $request)
    {
        $products = new Product();
        $product = Product::find($request->id);
        $category=DB::table('categories')->get();
        return view('product.editPublicaciones', compact('product', 'category'));

    }

    public function filtrarProductosPorNombre(Request $request)
    {
        $value = $request->get("txtBuscarProducto");
        $categories = Category::all();
        $products = DB::table('products')
        ->where('name', 'LIKE', "%".$value ."%")->get();

        return view('catalogue', compact('products', 'categories'));
    }
}
