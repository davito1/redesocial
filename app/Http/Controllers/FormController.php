<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('signup');
    }

    /**
     * Mostrar tela de signup com confirmação de criação.
     *
     * @return \Illuminate\Http\Response
     */
    public function signUpForm(Resquest $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required'
        ]);

        $name_request = $request->first_name;
        $last_request = $request->last_name;
        $email_request = $request->email;
        $phone_request = $request->phone;
        $password_request = $request->password;
        $confirmPassword_request = $request->confirmPassword;

        return redirect('signup')->with('status', 'Cadastrado com sucesso');
    }
}
