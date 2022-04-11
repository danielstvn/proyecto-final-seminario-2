<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pedido;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index(){

        $tipo = request('tipoFilter');

        if(!empty(request('tipoFilter')) or request('tipoFilter') != null){
            $products = Product::orderBy('id','DESC')
            ->where('tipo','LIKE',"%$tipo%")
            ->paginate(5);  
        }else
        {
            $products = Product::orderBy('id','DESC')
            ->paginate(5); 
        }

        return view('products.index',compact('products'));
    }

    public function productEdit(){
       
        try {
            $product = Product::findOrFail(request('id'));
            $product -> nombre = request('nombre');
            $product -> tipo = request('tipo');
            $product -> material= request('material');
            $product -> color = request('color');
            $product -> detalle = request('detalle');
            $product -> img = request('img');
            $product -> valor = request('valor');
            
    
        
            

            $product -> save();

            
            Alert::success('Exito!', 'Se actualizaron los datos Correctamente');
            return redirect()-> back();
            
        } catch (\Exception $ex) {
            
            Alert::error('Opps!', 'Error al actualizar los datos');
            return redirect()-> back();
        }
    }
    public function productCreate(){
        try {

            Product::create([
                'nombre' => request('nombre'),
                'tipo' => request('tipo'),
                'material'=> request('material'),
                'color' => request('color'),
                'detalle' => request('detalle'),
                'img' => request('img'),
                'valor' => request('valor'),
            ]);

            Alert::success('Exito!', 'Se Agrego un nuevo Producto');
            return redirect()-> back();
            
        } catch (\Exception $ex) {
            
            Alert::error('Opps!', 'Error al agregar el Producto, verifique los campos');
            return redirect()-> back();
        }
    }
    public function productDelete(){

        try {
 
             $product = Product::findOrFail(request('id'));
         
             $product->delete();
         
             Alert::success('Exito!', 'Se Elimino el Producto Correctamente');
 
             return redirect()-> back();
        } catch (\Throwable $th) {
 
             Alert::error('Opps!', 'Error al Eliminar el Producto');
             return redirect()-> back();
        }
     }

     public function productPedidos(){

        $pedidos = Pedido::orderBy('id','DESC')
        ->paginate(5); 


        return view('products.pedidos',compact('pedidos'));
     }
}
