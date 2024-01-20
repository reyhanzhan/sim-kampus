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
        Schema::table('agama', function (Blueprint $table) {
            $table->string('slug',255)->after('namaagama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agama', function (Blueprint $table) {
            if (Schema::hasColumn('agama', 'slug')){
                $table->dropColumn('slug');
            }
        });
    }
};