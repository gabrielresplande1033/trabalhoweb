<?php

namespace App\Http\Controllers;
use App\Repositories\HotelRepository;

/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/12/18
 * Time: 10:25
 */

class ListaHoteisController extends  Controller{

    protected $hotelRepository;

    public function __construct(HotelRepository $hotelRepository) {
        $this->hotelRepository = $hotelRepository;
    }

    public function index() {
        $hoteis = $this->hotelRepository->all();

        return view('ofertas', compact('hoteis'));
    }
}
