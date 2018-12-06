<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMainUser;
use Illuminate\Support\Facades\Mail;

class formatarController extends Controller

{
    public function enviarEmail(Request $request) {

       Mail::to('travelershoteis.2019@gmail.com')->send(new SendMainUser($request));

    }
}
