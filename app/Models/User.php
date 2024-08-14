<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id', // 追加されたカラム
        'shop_id', // 追加されたカラム
        'memo',    // 追加されたカラム
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 関連するロールの取得
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * 関連するショップの取得
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    
    public function isSuperVisor()
    {
        return $this->role_id == 1; // ロールIDが1の場合にスーパーバイザーとみなす
    }
}