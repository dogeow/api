<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function timestamp()
    {
        return time();
    }

    /**
     * 命名 datetime 会冲突
     * @return string
     */
    public function datetimeFunction(): string
    {
        return date('Y-m-d H:i:s');
    }

    public function date()
    {
        return date('Y-m-d');
    }
}
