<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class RegistrationController extends Controller
{
    public function index()
    {
        return view('layout.form');
    }
    public function Register(Request $request){
        $request->validate([
            'userName' => 'required',
            'email'=> 'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            ]
        );
        echo "<prev>";
        print_r($request->all());
    }
}
