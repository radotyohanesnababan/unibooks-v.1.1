<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\books;
use App\Models\publisher;
use Mckenziearts\Notify\Facades\LaravelNotify;
use Mckenziearts\Notify\LaravelNotifyServiceProvider;


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
            notify()->success('Login Berhasil');
            return redirect('/admin');
        }else{
            notify()->error('Login Gagal');
            return redirect('/login');
        }
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('/');
    }
}
