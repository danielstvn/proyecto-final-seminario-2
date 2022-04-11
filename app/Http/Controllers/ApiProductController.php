<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ApiProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::orderBy('id')->get());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

   
        try{
            Product::create([
                'nombre' => request('nombre'),
                'tipo' => request('tipo'),
                'material'=> request('material'),
                'color' => request('color'),
                'detalle' => request('detalle'),
                'img' => request('img'),
                'valor' => request('valor'),
            ]);

          
           
            return response()->json( ['error'=>false, 'msg'=>'Producto Agreagado Correctamente' ]);

        }catch(\Exception $e ){

            return response()->json( ['error'=>true, 'msg'=>'Error al agregar el producto']);
        }
    }

    
  
    public function update(Request $request, $id)
    {
       try{
        $product = Product::findOrFail(request('id'));
        $product -> nombre = request('nombre');
        $product -> tipo = request('tipo');
        $product -> material= request('material');
        $product -> color = request('color');
        $product -> detalle = request('detalle');
        $product -> img = request('img');
        $product -> valor = request('valor');
        


                try{
                    $product->save();
    
                    return response()->json( ['error'=>false, 'msg'=>'Producto Actualizada Correctamente' ]);
                }catch(\Exception $e ){

                    return response()->json( ['error'=>true, 'msg'=>'Error al Actualizar el producto']);
                }

       }catch(\Exception $e ){

        return response()->json( ['error'=>true, 'msg'=>'Producto  no existe']);
    }

       
    }
    
    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
    
        $Product->delete();

        return response()->json( ['error'=>false, 'msg'=>'Producto Eliminado Correctamente' ]);
     
    }
}
