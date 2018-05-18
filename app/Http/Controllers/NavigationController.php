<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    /**
     * Méthode d'affichage de la page Histoire
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function histoire()
    {
        return view('histoire');
    }
}
