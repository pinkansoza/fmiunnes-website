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
        Schema::table('link_services', function (Blueprint $table) {
            $table->string('tulisan_tombol')->nullable()->default('Isi Formulir')->after('url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('link_services', function (Blueprint $table) {
            $table->dropColumn('tulisan_tombol');
        });
    }
};
