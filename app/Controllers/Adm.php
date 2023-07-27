<?php

namespace App\Controllers;
use  App\Models\Tours;
use  App\Models\Detail;
class Adm extends BaseController
{
    public function index()
    {
        $Tours = new Tours();
        
        $AllTours=$Tours->listartour();
        
        $data =[
            "datos" => $AllTours,
                    
        ];
        return view('adm/index',$data);
    }

    public function insertar(){
        // Procesar la imagen subida
        $imagen = $this->request->getFile('url_img');

        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $rutaDestino = './assets/imagen/tour/'; // Ruta donde se guardarán las imágenes
            //$nombreArchivo = $imagen->getRandomName();
            $nombreArchivo =  $_FILES['url_img']['name'];

            // Mueve la imagen a la carpeta de destino
            $imagen->move($rutaDestino, $nombreArchivo);

            // Puedes guardar $nombreArchivo en la base de datos si lo necesitas
            // ...

            // Redirige o muestra un mensaje de éxito
            //return redirect()->to(base_url())->with('mensaje', '¡Imagen subida con éxito!');
        } else {
            // Si la subida falla, muestra un mensaje de error
            return redirect()->back()->withInput()->with('error', 'Error al subir la imagen.');
        }
        $datos = [
            "nombre" => $_POST['nombre'],
            "url_img" => $_FILES['url_img']['name'], // Nombre del archivo de imagen (debes guardar la imagen en el servidor)
            "dias" => $_POST['dias'],
            "personas" => $_POST['personas'],
            "ciudad" => $_POST['ciudad'],
            "precio" => $_POST['precio'],
        ];
        $Tours = new Tours();
        $respuesta= $Tours->insertar($datos);
        
        if($respuesta>0){
            return redirect()->to(base_url().'adm');

        }else{
            return redirect()->to(base_url().'adm');

        }
        
    }
}
