<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetController extends Controller
{
    public function ip()
    {
        return request()->ip();
    }
}
