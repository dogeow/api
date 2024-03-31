<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodingController extends Controller
{
    public function punycode($domain = ''): string
    {
        if (preg_match('/[^a-z-A-Z0-9-.]/', $domain)) {
            return idn_to_ascii($domain);
        } else {
            return idn_to_utf8($domain);
        }
    }

    public function md5($string = ''): string
    {
        return md5($string);
    }

    public function hash($string = ''): string
    {
        return sha1($string);
    }
}
