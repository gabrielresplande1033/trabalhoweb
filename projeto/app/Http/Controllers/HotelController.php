<?php

namespace App\Http\Controllers;
use App\Repositories\HotelRepository;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 03/12/18
 * Time: 13:13
 */


class HotelController extends  Controller{

    /**
     * @var HotelRepository
     */
    protected $hotelRepository;

    /**
     * HotelController constructor.
     * @param HotelRepository $hotelRepository
     */
    public function __construct(HotelRepository $hotelRepository) {
        $this->hotelRepository = $hotelRepository;
    }

    public function index() {
        $hoteis = $this->hotelRepository->all();

        return view('admin.hotel.index', compact('hoteis'));
    }

    public function paginaHotel($id) {
        $hotel = $this->hotelRepository->find($id);

        return view('hotel', compact('hotel'));
    }

    public function create()
    {
        return view('admin.hotel.create');
    }

    public function store(Request $request) {
        $this->hotelRepository->create($request->all());

        flash('Hotel inserido com sucesso.')->success();
        return redirect()->back();
    }

    public function mostrar(){
        $hoteis = $this->hotelRepository->all();

        return view('hotel', compact('hoteis'));
    }


    public function show($id) {
        $hotel = $this->hotelRepository->find($id);

        return view('admin.hotel.show', compact('hotel'));
    }

    public function update(Request $request, $id) {
        $this->hotelRepository->update($request->all(), $id);

        flash('Hotel atualizado com sucesso.')->success();
        return redirect()->back();
    }

    public function destroy(Request $request) {
        try {
            $removido = $this->hotelRepository->delete($request->id);
            return response()->json($removido);
        } catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }
}
