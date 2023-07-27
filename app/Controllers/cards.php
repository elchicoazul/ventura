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
        $menuciudad=$Tours->listarmenu();
        $menu =[ "MenuDashboard"=>$menuciudad,

        ];
            $session = session();
            $session->set($menu);
        return view('cards/index',$data);
    }

    public function ciudad($ciudad)
    {
        $Tours = new Tours();
        
        $AllTours=$Tours->listarciudad($ciudad);
        
        $data =[
            "datos" => $AllTours,
                    
        ];
         
        return view('cards/ciudad',$data);
    }

    public function contenido($idtours)
    {
        $Detail = new Detail();
        $datas=["tours.tours_id" => $idtours];
        $AllDetail=$Detail->obtenerdetalle($datas);
        $Tours = new Tours();
        $AllTours=$Tours->listartourtop();

        $data =[
            "datos" => $AllDetail,
            "tours" => $AllTours,

                    
        ];
        return view('cards/contenido',$data);
    }
}
