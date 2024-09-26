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
        Schema::create('musician', function (Blueprint $table) {
            $table->id();
        //    example data type (name of table)
         $table->string('name',50);
         $table->string('city',50);
         $table->string('street');
         $table->string('phone');
         $table->enum('gender',['male','female']);



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musician');
    }
};
