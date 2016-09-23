<?php
namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: nal
 * Date: 9/19/16
 * Time: 3:54 PM
 */
use Illuminate\Http\Request;
use App\Http\Requests;
use Cache;

class UsersController extends Controller
{

    public function index()
    {
        $value = Cache::get('key');

        $value = Cache::get('key', 'default');

        echo $value;

        $minutes = 60;

//        $value = Cache::remember('users', $minutes, function() {
//           return DB::table('users')->get();
//        });
//
//        if(Cache::has('key'))
//        {
//            die();
//        }

//        $amount = 5;
//        Cache::increment('key');
//        Cache::increment('key', $amount);
//
//        Cache::decremenet('key');
//        Cache::decremeent('key', 'default');
    }


}