<?php

namespace App\Controllers;

class FormularioController extends BaseController
{
    public function index(): string
    {
        return view('login/registrar');
    }
}
  