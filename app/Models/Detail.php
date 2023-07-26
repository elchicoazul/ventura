<?php namespace App\Models;
use CodeIgniter\Model;
class Detail extends Model {
    public function listarDetail(){
        $Detail = $this->db->query("SELECT * FROM `detail`  order by `id_detalle_tours` desc");
        return $Detail->getResult();
    }
    public function obtenerdetalle($data) {
        $detalle = $this->db->table('tours');
        $detalle->join('detail', 'detail.id_tours = tours.tours_id', 'inner');
        $detalle->where($data);
        return $detalle->get()->getResultArray();
    }

}