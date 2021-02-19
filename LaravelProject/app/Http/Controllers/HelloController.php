<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function home()
    {
        return view('/home');
    }
}
