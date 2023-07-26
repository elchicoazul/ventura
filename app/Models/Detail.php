<?php namespace App\Models;
use CodeIgniter\Model;
class Detail extends Model {
    public function listarDetail(){
        $Detail = $this->db->query("SELECT * FROM `detail`  order by `id_detalle_tours` desc");
        return $Detail->getResult();
    }

}