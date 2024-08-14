<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('postal');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->boolean('kramer_flag')->default(false)->comment('クレーマーフラグ');
            $table->timestamps();
        });
    $customers = [
    [
        'name' => '山田 太郎',
        'postal' => '1',
        'address' => '東京都千代田区1-1-1',
        'email' => 'taro.yamada@example.com',
        'phone' => '03-1234-5678',
        'kramer_flag' => false,
    ],
    // ... 他の顧客データ
    ];
    
    // データベースに登録
    Customer::insert($customers);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
