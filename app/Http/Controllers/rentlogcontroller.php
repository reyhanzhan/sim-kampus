<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rentlogcontroller extends Controller
{
    function agama() 
    {
        return view('agama');
    }

    function periode() 
    {
        return view('periode');
    }

    function unit() 
    {
        return view('unit');
    }

    function status() 
    {
        return view('status');
    }
}