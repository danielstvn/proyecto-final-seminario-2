<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {

        try {
            //$user = User::findOrFail(auth()->user()->id);
            auth()->user()->update($request->all());

            Alert::success('Exito!', 'Se actualizaron los datos Correctamente');
            return back();

        } catch (\Exception $ex) {
            Alert::erorr('Opps!', 'Algo salio mal');
            return back();
        }
        
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {

        try {
            //$user = User::findOrFail(auth()->user()->id);
            auth()->user()->update(['password' => Hash::make($request->get('password'))]);

            Alert::success('Exito!', 'Se actualizaron los datos Correctamente');
            return back();

        } catch (\Exception $ex) {
            Alert::error('Opps!', 'Algo salio mal');
            return back();
        }
       

    }
}
