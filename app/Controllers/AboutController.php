<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $data = new About();
        $info = $data->getInfo();

        $this->render('about/index', ['data' => $info]);
    }
}
