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
    Schema::create('ebooks', function (Blueprint $table) {
        $table->id();
        $table->string('header')->nullable();
        $table->string('message')->nullable();
        $table->text('pdf')->nullable();     // better for long file paths / URLs
        $table->text('images')->nullable();
        $table->string('price')->nullable();
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
        Schema::dropIfExists('ebooks');
    }
};
