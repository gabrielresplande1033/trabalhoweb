<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function admin_login() {
        return view('auth.login');
    }

    public function user_login() {
        return view('auth.user_login');
    }

    public function admin_register() {
        return view('auth.register');
    }

    public function user_register() {
        return view('auth.user_register');
    }

    public function user_register_store(Request $request) {
        $this->userRepository->create(['name' => $request->name, 'email' => $request->email, 'password' => bcrypt($request->password)]);

        flash('Usuário criado com sucesso.')->success();
        return redirect()->back();
    }

    public function admin_logar(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'permissao' => 1])) {
            return redirect()->route('admin.index');
        }
        flash('Email ou senha inválido.')->error();
        return redirect()->back();
    }

    public function user_logar(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'permissao' => 2])) {
            return redirect()->route('welcome.index');
        }
        flash('Email ou senha inválido.')->error();
        return redirect()->back();
    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect("/");
    }
}
