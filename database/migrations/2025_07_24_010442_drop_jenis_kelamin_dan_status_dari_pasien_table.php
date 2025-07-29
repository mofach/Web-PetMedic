<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropJenisKelaminDanStatusDariPasienTable extends Migration
{
    public function up()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropColumn(['jenis_kelamin', 'status']);
        });
    }

    public function down()
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->string('jenis_kelamin')->nullable();
            $table->string('status')->nullable();
        });
    }
}
