<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Produto;
use App\Models\About;


class HomeController extends Controller
{

    public function index()
    {
        $produto = new Produto();
        $produtos = $produto->getProducts();

        $this->render('home/index', ['produtos' => $produtos]);

        //Modo de usar o redirect
        // $this->redirect('/sobre');
    }

    public function about()
    {
        $data = new About();
        $info = $data->getInfo();

        $this->render('about/index', ['data' => $info]);
    }
}
