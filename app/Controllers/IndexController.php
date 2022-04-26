<?php

namespace App\Controllers;

use MF\Core\Controller;
use App\Models\Produto;
use App\Connection;

class IndexController extends Controller
{

    public function index()
    {
        //Instancia de conexão;
        $conn = Connection::getDb();

        //instancia model
        $produto = new Produto($conn);
        $produtos = $produto->getProducts();

        
        // $this->redirect('/sobre');
        $this->render('home/index', ['produtos' => $produtos]);
    }

}
