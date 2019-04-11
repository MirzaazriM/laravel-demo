<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        die(print_r($_GET));
        $from = $_GET[""];

        return view('gallery', [
            'from' => $from
        ]);
    }
}
