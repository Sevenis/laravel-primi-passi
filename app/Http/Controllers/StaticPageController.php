<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function prodotti(){
        $cards = config('prodotti');

        $lunghe = [];
        $corte = [];
        $cortissime = [];

        foreach ($cards as $card) {
            if ($card['tipo'] == 'lunga'){
                $lunghe[] = $card;
            }
            if ($card['tipo'] == 'corta'){
                $corte[] = $card;
            }
            if ($card['tipo'] == 'cortissima'){
                $cortissime[] = $card;
            }
        }

        return view('prodotti', compact('lunghe', 'corte', 'cortissime'));
    }

    public function contatti(){
        return view('contatti');
    }
}
