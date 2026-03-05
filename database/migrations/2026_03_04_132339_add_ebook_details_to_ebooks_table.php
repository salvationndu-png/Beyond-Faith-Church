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
        Schema::table('ebooks', function (Blueprint $table) {
            $table->integer('pages')->nullable()->after('price');
            $table->string('file_size')->nullable()->after('pages');
            $table->string('category')->nullable()->after('file_size');
            $table->decimal('rating', 2, 1)->default(0)->after('category');
            $table->integer('reviews_count')->default(0)->after('rating');
            $table->integer('downloads_count')->default(0)->after('reviews_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ebooks', function (Blueprint $table) {
            $table->dropColumn(['pages', 'file_size', 'category', 'rating', 'reviews_count', 'downloads_count']);
        });
    }
};
