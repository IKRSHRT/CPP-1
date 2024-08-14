<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        // 役職一覧を取得
        $roles = Role::all();

        // $roles一覧情報を渡してroles.blade.phpを呼びます
        return view('roles.index', compact('roles'));
    }
}