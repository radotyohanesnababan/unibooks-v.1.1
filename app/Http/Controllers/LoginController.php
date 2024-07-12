<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\books;
use App\Models\publisher;

class LoginController extends Controller
{
    public function login(){
        $books = books::orderBy('judul')->paginate(10);
        $publisher = publisher::all();
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('login',compact('books','publisher'));
        }
    }

    public function actionlogin(Request $request) {
        $data=[
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::Attempt($data)) {
            return redirect('/admin');
        }else{  
            Session()->flash('error', 'Email atau Password salah');
            return redirect('/');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}
