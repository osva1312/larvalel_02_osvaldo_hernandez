<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     public $birrifici = [
        [   "id" => 1,
            "name" => "Golden Pot",
            "birra"=> "Bella Witt",
        ],
        [
            "id" => 2,
            "name" => "Amerino",
            "birra" => "Masika",
        ],
        [
            "id" => 3,
            "name" => "Rebels",
            "birra" => "Tropical Bomb",
        ]

    ];
    public function homepage() {
    return view('welcome');
}
public function chi_siamo(){
   
    return view('chi_siamo', ["all_birrifici" => $this->birrifici]);
}
public function servizi(){
    return view('servizi');
}
public function detail_page($id){
     

    foreach($this->birrifici as $birrificio){
        if($birrificio['id'] == $id){
            return view('detail_page', ['birrificio' => $birrificio]);
        }
    }
    return view('detail_page');
}
}
