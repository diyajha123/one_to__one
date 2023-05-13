<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
        //    $table->integer('contact_id');
            $table->timestamps();
            $table->string('name');
             $table->integer('number');
            $table->string('course');
            $table->string('gender');
            $table->string('hobbies');
            $table->string('joindate');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
