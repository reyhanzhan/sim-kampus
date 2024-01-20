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
        Schema::table('periode', function (Blueprint $table) {
            $table->string('slug',255)->after('periode');
            $table->string('slug',255)->after('bulanawal');
            $table->string('slug',255)->after('bulanakhir');
            $table->date('slug',255)->after('tgl_awal');
            $table->date('slug',255)->after('tgl_akhir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('periode', function (Blueprint $table) {
            if (Schema::hasColumn('periode', 'slug')){
                $table->dropColumn('slug');
            }
        });
    }
};
