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
        Schema::create('inquiry_replies', function (Blueprint $table) {
            $table->id();
            $table->integer('inquiry_id');
            $table->text('reply');
            $table->integer('user_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('from')->default('admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiry_replies');
    }
};
