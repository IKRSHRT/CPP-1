<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // モデルが使用するテーブル名を指定
    protected $table = 'roles';

    // デフォルトでfillableプロパティを指定し、マスアサインメントを許可するカラムを定義
    protected $fillable = [
        'name',
        'memo',
    ];

    // タイムスタンプのカラムを指定（デフォルトで created_at と updated_at がありますが、必要に応じて変更できます）
    public $timestamps = true;
}