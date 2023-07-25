<?php namespace App\Models;
use CodeIgniter\Model;
class Tours extends Model {
    public function listartour(){
        $Tour = $this->db->query("SELECT * FROM `tours`  order by `tours_id` desc");
        return $Tour->getResult();
    }

}