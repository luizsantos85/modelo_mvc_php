<?php

namespace App\Controllers;

use Core\Controller;

class ErrorController extends Controller
{

    public function index()
    {
        $this->render('notfound/index');
    }
}
