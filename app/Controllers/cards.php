<?php

namespace App\Controllers;
use  App\Models\Tours;
class Cards extends BaseController
{
    public function index()
    {
        $Tours = new Tours();
        
        $AllTours=$Tours->listartour();
        
        $data =[
            "datos" => $AllTours,
                    
        ];
        return view('cards/index',$data);
    }
    public function contenido($parametro)
    {
                
        return view('cards/contenido');
    }
}
