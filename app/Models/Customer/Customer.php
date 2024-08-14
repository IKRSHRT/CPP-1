<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Role;
use App\Models\Shop;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'customers'; // 追加: テーブル名を指定

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'shop_id',
        'memo',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    
    public function isSuperVisor()
    {
        return $this->role_id == 1;
    }
}