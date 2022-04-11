<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use App\Models\carrito;
use App\Models\Pedido;
use App\Models\Compra;
use PhpParser\Node\Stmt\TryCatch;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        if(Auth::user()->hasRole('Administrador')){

            return view('dashboard');

        }elseif(Auth::user()->hasRole('Cliente')){
            
            return view('home_client');
        }
            
        
       
    }

    public function getVentanas(){
    
        $ventanas = Product::orderBy('id','DESC')
        ->where('nombre','LIKE',"%entan%")
        ->paginate(); 

        return view('clientes.ventanas',array('ventanas'=>$ventanas));
    
    }

    public function getPuertas(){
    
        $puertas = Product::orderBy('id','DESC')
        ->where('nombre','LIKE',"%uert%")
        ->paginate(); 

        return view('clientes.puertas',array('puertas'=>$puertas));
    
    }

    public function getVidrios(){
    
        $vidrios = Product::orderBy('id','DESC')
        ->where('nombre','LIKE',"%idrio%")
        ->paginate(); 

        return view('clientes.vidrios',compact('vidrios'));
    
    }
    public function getCarrito(){
    
        $carrito = Carrito::orderBy('id','DESC')
        ->paginate(); 

        return view('clientes.carrito',compact('carrito'));
    
    }

    public function getCompra(){
    
       try {
            $compras= Compra::orderBy('id','DESC')
            ->paginate();

        return view('clientes.compras',compact('compras'));
       } catch (\Exception $th) {

            Alert::info('Opps!', 'Aun no tienes Compras realizadas');
            
            return redirect()->back();
       }
    
    }

    public function addCarrito(){

        try {
            $productQuery = Product::findOrFail(request('id'));

            Carrito::create([
                'idCliente' => Auth()->user()->id,
                'idProducto' => $productQuery['id'],
                'nombre'=> $productQuery['nombre'],
                'tipo' => $productQuery['tipo'],
                'material' => $productQuery['material'],
                'color' => $productQuery['color'],
                'detalle' => $productQuery['detalle'],
                'img' => $productQuery['img'],
                'valor' => $productQuery['valor'],
            ]);
    
            return redirect()->back();
        } catch (\Exception $ex) {
            Alert::error('Opps!', 'Error al agregar al carrito');
            return redirect()->back();
        }
    }

    

    public function setCompra(){
        try {
            $id =Auth()->user()->id;

            $auxpedido=-1;
            $auxcompra=-1;

            $carrito = Carrito::all(); 

            $numpedido = 0;
            if(DB::table('pedidos')->select('numpedido')->where('idCliente', '=', $id)->first() === null){
                $numpedido = 0;
            }
            else {    
                $Qpedidos= Pedido::all(); 
                $pedidos= array('p'=>$Qpedidos);
                foreach ($pedidos['p'] as $key ) {
                    if($id == $key->idCliente){

                        if($auxpedido != $key->numpedido){
                            $auxpedido = $key->numpedido;
                            $numpedido +=1;
                        }
                        
                    }
                }
            } 

            $numcompra = 0;
            if(DB::table('compras')->select('numcompra')->where('idCliente', '=', $id)->first() === null){
                $numcompra = 0;
            }
            else {
                $Qcompras= Compra::all(); 
                $compras= array('p'=>$Qcompras);
                foreach ($compras['p'] as $key ) {
                    if($id == $key->idCliente){
                        if($auxcompra != $key->numcompra){
                            $auxcompra = $key->numcompra;
                            $numcompra +=1;
                        }
                    }
                }
                
            } 

            $aux= array('p'=>$carrito);

            foreach ($aux['p'] as $key ) {

                $pedido = new Pedido();
                $pedido -> idCliente = $id;
                $pedido -> idProducto = $key -> idProducto;
                $pedido -> nombre= $key -> nombre;
                $pedido -> tipo = $key -> tipo;
                $pedido -> material = $key->material;
                $pedido -> color = $key->color;
                $pedido -> detalle = $key->detalle;
                $pedido -> img = $key->img;
                $pedido -> valor = $key->valor;
                $pedido -> numpedido = $numpedido;
                $pedido -> save();

                $compra = new Compra();
                $compra -> idCliente = $id;
                $compra -> idProducto = $key->idProducto;
                $compra -> nombre= $key->nombre;
                $compra -> tipo = $key->tipo;
                $compra -> material = $key->material;
                $compra -> color = $key->color;
                $compra -> detalle = $key->detalle;
                $compra -> img = $key->img;
                $compra -> valor = $key->valor;
                $compra -> numcompra = $numcompra;
                $compra -> save();

                //eliminar el producto del carrito despues de 
                $auxcarrito = Carrito::findOrFail($key->id); 
            
                $auxcarrito -> delete();
                
            }
           
            Alert::success('Pedido exitoso!','Tu pedido se realizo satisfactoriamente');

            

             // cuando termina , elimina los productos del carrito

            return redirect()-> back();
       } catch (\Exception $ex) {

            Alert::error('Opps!', 'Error al realizar el pedido');
            return redirect()-> back();
       }
        

    }

    public function deleteProductCarrito(){

        $carrito = Carrito::findOrFail(request('id'));

        $carrito->delete();

        Alert::warning('Eliminaste un Producto del Carrito','Producto elimindado');

        return redirect()->back();


    }

    public function createDesing(){

        return view('clientes.diseños.create');
    }

    public function showDesings(){

        return view('clientes.diseños.show');
    }

}
