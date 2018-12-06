<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMainUser;

class appControllerMail extends Controller
{


    public function index(){
        return view('mail');
    }

    public function enviarPrimeiroEmail(){
        Mail::to('travelershoteis.2019@gmail.com')->send(new SendMainUser());
        Return 'OK';

    }
}
