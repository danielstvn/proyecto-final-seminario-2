<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        $rolU = request('rolFilter');

        if(!empty(request('rolFilter')) or request('rolFilter') != null){
            $users = User::orderBy('id','DESC')
            ->where('role','LIKE',"%$rolU%")
            ->paginate(5);  
        }else
        {
            $users = User::orderBy('id','DESC')
            ->paginate(5); 
        }

        return view('users.index',compact('users'));
    }

    public function userEdit(){
       
        try {
            $user = User::findOrFail(request('id'));

            $user -> name = request('name');
            $user -> last_name = request('last_name');
            $user -> role = request('rol');
            $user -> email = request('email');
            $user -> contact = request('contact');
            $user -> genero = request('genero');
            $user -> domicilio = request('domicilio');
            $user -> ciudad = request('ciudad');

            $user -> save();

            Alert::success('Exito!', 'Se actualizaron los datos Correctamente');
            return redirect()-> back();
            
        } catch (\Exception $ex) {
            
            Alert::error('Opps!', 'Error al actualizar los datos');
            return redirect()-> back();
        }
    }

    public function userDelete(){

       try {

            $user = User::findOrFail(request('id'));
        
            $user->delete();
        
            Alert::success('Exito!', 'Se Elimino el Usuario Correctamente');

            return redirect()-> to('/users');
       } catch (\Throwable $th) {

            Alert::error('Opps!', 'Error al Eliminar el usuario');
            return redirect()-> to('/users');
       }
    }

    public function userCreate(){
        try {

           switch (request('rol')) {
               case '1':
                   $rol = 'Administrador';
                   break;

                case '2':
                   $rol = 'Secretari@';

                   break;
                
                case '3':
                   $rol = 'Auxiliar Contable';
                   break;
               
               default:
                   # code...
                   break;
           }

           switch (request('genero')) {
               case 'M':
                   $genero = 'Masculino';
                   break;

                case 'F':
                    $genero = 'Femenino';
                    break;

                case 'O':
                   $genero = 'otro';
                   break;
               
               default:
                   # code...
                   break;
           }

           


            User::create([
                'name' => request('name'),
                'last_name' => request('last_name'),
                'email' => request('email'),
                'contact' => request('contact'),
                'genero' => $genero,
                'domicilio' => request('domicilio'),
                'ciudad' => request('ciudad'),
                'email_verified_at' => now(),
                'password' => '##$$default123@',
                'role' => $rol,
                'created_at' => now(),
                'updated_at' => now()
            ])->assignRole($rol);

            Alert::success('Exito!', 'Se Agrego un nuevo Usuario');
            return redirect()-> back();
            
        } catch (\Exception $ex) {
            
            Alert::error('Opps!', 'Error al agregar el usuario, verifique los campos');
            return redirect()-> back();
        }
    }


}
