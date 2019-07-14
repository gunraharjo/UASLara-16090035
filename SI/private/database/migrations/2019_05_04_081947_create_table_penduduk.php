<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->String('kk',20);
            $table->BigInteger('nik')->primary();
            $table->String('nama',100);
            $table->String('tempat_lahir',100);
            $table->String('tanggal_lahir',100);
            $table->String('jenis_kelamin',100);
            $table->text('alamat');
            $table->String('rt',100);
            $table->String('rw',100);
            $table->String('desa',100);
            $table->String('kecamatan',100);
            $table->String('agama',100);
            $table->String('status_perkawinan',100);
            $table->String('pekerjaan',100);
            $table->String('gol_darah',10);
            $table->String('warga_negara',10);
            $table->String('deleted_at')->nullable();
            
          
           
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
        Schema::dropIfExists('penduduk');
    }
}
