<?php

namespace App\Controllers;
use  App\Models\Tours;
use  App\Models\Detail;
class Adm extends BaseController
{
    public function index()
    {
        return view('adm/adm');
    }
    public function detalle($idtours)
    {
        return view('adm/admdetalle');
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
        } else {
            // Si la subida falla, muestra un mensaje de error
            return redirect()->back()->withInput()->with('error', 'Error al subir la imagen.');
        }
        
        
    }
    public function insertardetalle(){
        // Procesar la imagen subida
        $imagen = $this->request->getFile('img_portada');

        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $rutaDestino = './assets/imagen/tour/'; // Ruta donde se guardarán las imágenes
            //$nombreArchivo = $imagen->getRandomName();
            $nombreArchivo =  $_FILES['img_portada']['name'];

            // Mueve la imagen a la carpeta de destino
            $imagen->move($rutaDestino, $nombreArchivo);
                      
            $datos = [
                "id_tours" => $_POST['id_tours'],
                "descripcion" => $_POST['descripcion'],
                "itinerario" => $_POST['itinerario'],
                "lista_viaje" => $_POST['lista_viaje'],
                "img_portada" => $_FILES['img_portada']['name'], // Nombre del archivo de imagen en el servidor
                "tipo_viaje" => $_POST['tipo_viaje'],
                "altitud_max" => $_POST['altitud_max'],
                "dificultad" => $_POST['dificultad'],
            ];
            $Tours = new Detail();
            $respuesta= $Tours->insertar($datos);
            
            if($respuesta>0){
                return redirect()->to(base_url().'detalle/'.$_POST['id_tours']);
    
            }else{
                return redirect()->to(base_url().'detalle/'.$_POST['id_tours']);
    
            }
        } else {
            // Si la subida falla, muestra un mensaje de error
            return redirect()->back()->withInput()->with('error', 'Error al subir la imagen.');
        }
        
        
    }
}
