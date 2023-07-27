<?php namespace App\Models;
use CodeIgniter\Model;
class Tours extends Model {
    public function listartour(){
        $Tour = $this->db->query("SELECT * FROM `tours`  order by `tours_id` asc");
        return $Tour->getResult();
    }
    public function listartourtop(){
        $Tour = $this->db->query("SELECT  * FROM `tours`  order by `tours_id` desc LIMIT 4;");
        return $Tour->getResult();
    }

    public function insertar($datos){
        $Categoria = $this->db->table('tours');
        $Categoria->insert($datos);
        return $this->db->InsertId();
    }
    public function listarmenu(){
        $Tour = $this->db->query("SELECT DISTINCT `ciudad` FROM `tours`  order by `ciudad` desc;");
        return $Tour->getResult();
    }
    public function listarciudad($ciudad){
        $Tour = $this->db->query("SELECT * FROM `tours` where `ciudad` ='$ciudad'");
        return $Tour->getResult();
    }

}