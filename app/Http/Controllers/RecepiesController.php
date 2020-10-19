<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecepiesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $recepies = ['Pizza', 'Spaguetti', 'Calzone'];
        $categories = ['Comida Italiana', 'Comida Francesa', 'Comida Mexicana'];

        return view('recepies.index')
            ->with('recepies', $recepies)
            ->with('categories', $categories);

        /* return view('recepies.index', compact('recepies', 'categories')); */
    }
}
