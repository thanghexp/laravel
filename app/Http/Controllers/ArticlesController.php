<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    /**
     * Show data
     */
    public function index()
    {
        
        return view('articles/index');
    }
}
