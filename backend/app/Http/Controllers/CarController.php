<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CarController extends Controller
{
    private function loadCars(): Collection
    {
        return collect(
            [
                [
                    "id" => 1,
                    "manufacturer" => "Audi",
                    "model" => "A6",
                    "color" => "szürke",
                    "consumption" => 10.2,
                    "background" => "gray",
                    "image" => "audi-min.jpg"
                ],
                [
                    "id" => 2,
                    "manufacturer" => "Suzuki",
                    "model" => "Swift",
                    "color" => "piros",
                    "consumption" => 6.9,
                    "background" => "red",
                    "image" => "swift-min.jpg"
                    
                ],
                [
                    "id" => 3,
                    "manufacturer" => "Suzuki",
                    "model" => "Ignis",
                    "color" => "sárga",
                    "consumption" => 7.3,
                    "background" => "yellow",
                    "image" => "ignis-min.jpg"
                ]
            ]);
    }

    public function index(Request $request)
    {
        
        $cars = $this->loadCars();

        $manufacturer = $request->query("manufacturer",null);
        $consumption = $request->query("consumption",null);

        if ($request->has("manufacturer")) {
            $cars = $cars->filter(
                fn (array $car, int $key) => $car["manufacturer"] == $manufacturer);
        }

        if ($request->has("consumption")) {
            $cars = $cars->filter(
                fn (array $car, int $key) => $car["consumption"] < $consumption);
        }


        return view("cars.index", [

            "title" => "Autok",
            "cars" => $cars->sortBy("consumption")->all()
        ]);
    }


    public function show($id){

        $auto = $this->loadCars()->firstOrFail("id", "=" ,$id);

        return view("cars.show",[
            "title" => "Autok egyesevel",
            "car" => $auto
        ]);

    }
}
