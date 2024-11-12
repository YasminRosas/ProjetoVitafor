<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailCharacterController;
use Illuminate\Http\Request;


class DetailCharacterController extends Controller
{
   public function index()
    { 
        $url = 'https://rickandmortyapi.com/api/character';
        
        $response = file_get_contents($url);

        $data = json_decode($response, true);

        $characters = array_slice($data['results'], 0, 1);

        return view('detailCharacter.index', compact('characters'));
    }
    
}
