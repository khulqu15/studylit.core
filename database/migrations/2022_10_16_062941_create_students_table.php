<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('country');
            $table->string('province');
            $table->string('district');
            $table->string('village');
            $table->string('address');
            $table->enum('type', ['student', 'colleger', 'general'])->default('student');
            $table->string('postcode');
            $table->string('instance');
            $table->string('major');
            $table->string('class');
            $table->json('interest')->nullable();
            $table->json('talent')->nullable();
            $table->json('passion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
