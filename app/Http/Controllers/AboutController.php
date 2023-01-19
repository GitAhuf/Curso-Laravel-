<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return "En esta pagina esta la informacionde la empresa";
    }
}
