<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'saluto' => 'ciao'
        ];
        return view('home', $data);
    }

    public function vestiti(){
        $vestiti = dress::All();
        $data = [
            'dresses' => $vestiti
        ];
        return view('vestiti',$data);
    }
    public function contatti(){
        $data = [
            'email' => 'vestiti@gmail.com',
            'tel' => '800.102.120'
        ];
        return view('contatti', $data);
    }
}
