<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Produto;

class IndexController extends Controller
{

    public function index()
    {
        $produto = new Produto();
        $produtos = $produto->getProducts();

        $this->render('home/index', ['produtos' => $produtos]);

        //Modo de usar o redirect
        // $this->redirect('/sobre');
    }
}
