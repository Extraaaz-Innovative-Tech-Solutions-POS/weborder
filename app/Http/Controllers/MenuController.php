<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
     
    public function Menu()
    {
        return view('yuvraj.menu');
    }

    public function MenuDetails()
    {
        return view('yuvraj.menu_details');
    }

    public function CartView()
    {
        return view('yuvraj.cart_view');
    } 


    public function CheckOut()
    {
        return view('yuvraj.check_out');
    } 
    
    
    public function Contact()
    {
        return view('yuvraj.contact');
    }
    
    public function ForgotPassword()
    {
        return view('yuvraj.forgot_password');
    }

    public function Payment()
    {
        return view('yuvraj.payment');
    }
    
    public function Error()
    {
        return view('yuvraj.404');
    }
    public function SignIn()
    {
        return view('yuvraj.sign_in');
    }

    public function SignUp()
    {
        return view('yuvraj.sign_up');
    }
}
