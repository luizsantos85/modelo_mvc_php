<?php

namespace App\Models;

use Core\Model;


class About extends Model
{

    public function getInfo()
    {
        $query = $this->db->prepare('select titulo, descricao from tb_info');
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
