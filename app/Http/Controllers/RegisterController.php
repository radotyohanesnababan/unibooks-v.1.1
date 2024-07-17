<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionregister(Request $request){
        try{
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            notify()->success('Registrasi Berhasil');
            return redirect('/login');
        }
        catch(QueryException $e){
            if ($e->getCode() == '23000') {
                Session()->flash('error', 'Email sudah terdaftar');
                return redirect('/register');
            }
        }

    }
}
