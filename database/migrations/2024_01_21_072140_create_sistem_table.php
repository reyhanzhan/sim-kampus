<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\sistem;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sistem', function (Blueprint $table) {
            // $table->id();
            // $table->string('sistemmhs')->unique();
            // $table->primary('sistemmhs');
            $table->string('id')->primary();
            $table->string('namasistem',50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sistem');
    }
};