<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervieweesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviewees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('interview_date');
            $table->string('status');
            $table->timestamps();
        });

        // 初期データの挿入
        DB::table('interviewees')->insert([
            ['name' => 'Alice Brown', 'email' => 'alice@example.com', 'interview_date' => '2024-08-20', 'status' => '採用'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'interview_date' => '2024-08-22', 'status' => '保留'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviewees');
    }
}