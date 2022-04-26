<?php

namespace App\Controllers;

use MF\Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $data = ['Computador', 'Teclado', 'Mouse'];
        $this->render('about/index', ['data' => $data]);
    }
}
