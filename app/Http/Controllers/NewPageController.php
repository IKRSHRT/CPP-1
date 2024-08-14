<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPageController extends Controller
{
        public function newpage() {
        return view('newpage');
    }

}
