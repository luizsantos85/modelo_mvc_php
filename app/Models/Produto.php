<?php

namespace App\Models;

use Core\Model;

class Produto extends Model
{
    public function getProducts()
    {
        $query = $this->db->prepare("SELECT id, descricao, preco FROM tb_produtos");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}
