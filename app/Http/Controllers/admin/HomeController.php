<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class HomeController extends Controller
{
    //Dashboard
    public function index()
    {
        return view('admin.home.index');
    }
    
}
