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
        Schema::table('payments', function (Blueprint $table) {
            // Add ebook_id column linked to ebooks table
            $table->foreignId('ebook_id')
                  ->nullable() // allow null for guests if needed
                  ->after('id') // place it after the primary key
                  ->constrained('ebooks')
                  ->cascadeOnDelete(); // if ebook deleted, delete payment
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['ebook_id']);
            $table->dropColumn('ebook_id');
        });
    }
};
