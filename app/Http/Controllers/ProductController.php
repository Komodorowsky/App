<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        $products = Product::paginate(10); // Cambia el número '10' por la cantidad de elementos por página que desees.

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10); // Cambia '10' aquí también.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Valida los campos del formulario
    request()->validate(Product::$rules);

    // Crea una nueva instancia del modelo Product
    $product = new Product();
    
    // Asigna las propiedades del producto según el formulario
    $product->Nombre = $request->input('Nombre');
    $product->Paterno = $request->input('Paterno');
    $product->Materno = $request->input('Materno');
    $product->Edad = $request->input('Edad');
    $product->Sexo = $request->input('Sexo');
    $product->Calle = $request->input('Calle');
    $product->NumINT = $request->input('NumINT');
    $product->NumEXT = $request->input('NumEXT');
    $product->Colonia = $request->input('Colonia');
    $product->Municipio = $request->input('Municipio');
    $product->Estado = $request->input('Estado');

    // Convierte los campos "Intereses" y "DestinoPref" a un formato adecuado (array JSON)
    $product->Intereses = json_encode($request->input('Intereses', []));
    $product->DestinoPref = json_encode($request->input('DestinoPref', []));
    
    $product->Tipohab = $request->input('Tipohab');
    $product->IngresoMens = $request->input('IngresoMens');
    $product->Viajesalanio = $request->input('Viajesalanio');
    // Guarda el producto en la base de datos
    $product->save();

    return redirect()->route('products.index')
        ->with('success', 'Product created successfully.');
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

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
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
            ->with('success', 'Product deleted successfully');
    }
}
