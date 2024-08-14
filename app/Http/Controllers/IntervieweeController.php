<?php

namespace App\Http\Controllers;

use App\Models\Interviewee;
use Illuminate\Http\Request;

class IntervieweeController extends Controller
{
    public function index()
    {
        // すべての面接者を取得
        $interviewees = Interviewee::all();

        // ビューにデータを渡して表示
        return view('interviewees.index', compact('interviewees'));
    }
}