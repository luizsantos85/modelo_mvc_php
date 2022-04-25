<?php
namespace App\Controllers;

use MF\Init\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $data = ['Sofá', 'Cadeira', 'Cama'];
        // $this->redirect('/sobre');
        $this->render('home/index', ['dados' => $data]);
    }

    public function about()
    {
        $data = ['Computador', 'Teclado', 'Mouse'];
        $this->render('about/index', ['data' => $data]);
    }

}
