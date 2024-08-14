<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('university');
            $table->string('major');
            $table->date('start_date');
            $table->timestamps();
        });

        // 初期データの挿入
        DB::table('interns')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'university' => 'XYZ University', 'major' => 'Computer Science', 'start_date' => '2024-09-01'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'university' => 'ABC University', 'major' => 'Electrical Engineering', 'start_date' => '2024-09-15'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interns');
    }
}