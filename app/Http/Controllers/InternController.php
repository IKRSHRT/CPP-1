<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Intern;
class InternController extends Controller
{
    public function index() {
    $interns = Intern::all();
    return view('interns.index', compact('interns'));
        
    }
}
