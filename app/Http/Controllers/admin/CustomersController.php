<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Http\Requests;

class CustomersController extends Controller
{
    //
    public function index() 
    {
        $customers = Customer::paginate(10);
        return view('customers.index')->with('customers', $customers);
    }
}
