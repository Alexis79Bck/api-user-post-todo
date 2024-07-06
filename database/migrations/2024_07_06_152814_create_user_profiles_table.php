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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string("gender");
            $table->date("birthday"); 
            $table->string("country");
            $table->string("state");
            $table->string("city");
            $table->string("zipcode");
            $table->string("phone");
            $table->string("website");
            $table->foreignId("user_id")
                    ->constrained()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
