<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubServicesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('title_en');
            $table->text('desc_en');
            $table->string('title_ar');
            $table->text('desc_ar');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_services');
    }
}