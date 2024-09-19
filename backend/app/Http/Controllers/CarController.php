<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    private function loadCars(): array
    {
        return
            [
               [
                    "manufacturer" => "Audi",
                    "model" => "A6",
                    "color" => "szurke",
                    "consumption" => 10.2
                ],
                [
                    "manufacturer" => "Suzuki",
                    "model" => "Swift",
                    "color" => "piros",
                    "consumption" => 6.9
                ]
            ];
    }

    public function index()
    {
    
        return view("cars.index", [

            "title" => "Autok",
            "cars" => $this->loadCars()
        ]);
    }


    public function show($id){

        $autok = $this->loadCars();

        if (!array_key_exists($id, $autok)) {
            abort(404);
        }

        $auto = $autok[$id];

        return view("cars.show",[
            "title" => "Autok egyesevel",
            "car" => $auto
        ]);

    }
}
