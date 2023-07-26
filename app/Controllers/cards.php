<?php

namespace App\Controllers;
use  App\Models\Tours;
use  App\Models\Detail;
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
    public function contenido()
    {
        $Detail = new Detail();
        
        $AllDetail=$Detail->listarDetail();
        
        $data =[
            "datos" => $AllDetail,
                    
        ];
        return view('cards/contenido',$data);
    }
}
