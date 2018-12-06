<?php

namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/12/18
 * Time: 10:25
 */

class SobreController extends  Controller{

    public function index() {
        return view('sobre');
    }
}