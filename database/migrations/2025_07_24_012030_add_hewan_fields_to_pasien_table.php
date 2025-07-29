<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->string('nama_hewan')->nullable();
            $table->string('jenis_hewan')->nullable();
            $table->string('ras')->nullable();
            $table->string('jenis_kelamin_hewan')->nullable();
            $table->date('tanggal_lahir_hewan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropColumn([
                'nama_hewan',
                'jenis_hewan',
                'ras',
                'jenis_kelamin_hewan',
                'tanggal_lahir_hewan',
            ]);
        });
    }
};
