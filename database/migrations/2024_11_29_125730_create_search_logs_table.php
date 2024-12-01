<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchLogsTable extends Migration
{
    public function up()
    {
        Schema::create('search_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->string('search_term');
            $table->unsignedBigInteger('user_id')->nullable(); // Optional if tracking users
            $table->timestamps();
        
            // Foreign key constraint
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade');
        });
        
    }

    public function down()
    {
        // Drop the table if this migration is rolled back
        Schema::dropIfExists('search_logs');
    }
}
