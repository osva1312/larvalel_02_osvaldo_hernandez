<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     public $breweries = [
        [   "id" => 1,
            "name" => "Golden Pot",
            "location" => "Guidonia Montecelio",
            "birra"=> "Bella Witt",
        ],
        [
            "id" => 2,
            "name" => "Amerino",
            "location" => "Amelia",
            "birra" => "Masika",
        ],
        [
            "id" => 3,
            "name" => "Rebels",
            "location" => "Roma",
            "birra" => "Tropical Bomb"
        ]
        ];

        public $services = [
         ["id" => 1,
         "name" => "Golden Pot",
         "food" => "Bbq low and slow",
         "bar" => "Completo",
         "img" => "/media/goldenPot.jpeg",
         ],
         ["id" => 2,
         "name" => "Amerino",
         "food" => "Smash Burguers",
         "bar" => "TapRom",
         "img" => "/media/amerino.jpeg",
         ],
         ["id" => 3,
         "name" => "Rebels",
         "food" => "Street Food",
         "bar" => "Beer Garden",
         "img" => "/media/rebels.jpeg",
         ],


    ];

    
    public function homepage() {
    return view('welcome');
}
public function chi_siamo(){
   
    return view('about_us', ["all_breweries" => $this->breweries]);
}
public function servizi(){
   
    return view('services', ['services' => $this->services]);
}
public function detail_page($id){
     

    foreach($this->breweries as $brewery){
        if($brewery['id'] == $id){
            return view('detail_page', ['brewery' => $brewery]);
        }
    }
    return view('detail_page');
}
public function services_detail($id){
     foreach($this->services as $service){
        if($service['id'] == $id){
            return view('services_detail', ['service' => $service]);
        }
    }
}
}
