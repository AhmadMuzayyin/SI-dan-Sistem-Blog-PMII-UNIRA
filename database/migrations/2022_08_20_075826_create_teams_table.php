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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->enum('jabatan', [
                'Ketua Komisariat',
                'Sekretaris',
                'Bendahara',
                'Waka I',
                'Waka II',
                'Waka III',
                'Sekretaris Waka I',
                'Sekretaris Waka II',
                'Sekretaris Waka III',
                'Co. Biro Kaderisasi',
                'Co. Biro Advokasi',
                'Co. Biro Keagamaan',
                'Co. Biro Minat & Bakat',
                'Co. Biro OKP',
                'Ketua Kopri',
                'Sekretaris Kopri',
            ]);
            $table->string('fullname');
            $table->string('images');
            $table->year('periode');
            $table->year('demisioner');
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
        Schema::dropIfExists('teams');
    }
};
