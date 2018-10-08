<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mous', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenismou');
            $table->string('moulevel');
            $table->string('pjk');
            $table->string('nopjk');
            $table->string('pji');
            $table->string('nopji');
            $table->string('pejabatpenandatangan');
            $table->date('mulai');
            $table->date('berakhir');
            $table->string('manfaat');
            $table->string('kerjasama');
       
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
        Schema::dropIfExists('mous');
    }
}
