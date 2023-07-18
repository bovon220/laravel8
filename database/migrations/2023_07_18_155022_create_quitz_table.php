<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuitzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quitz', function (Blueprint $table) {
            
            $table->integer('A')->nullable();
            $table->float('B')->nullable();
            $table->string('C')->nullable();
            $table->date('D')->nullable();
            $table->text('E')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quitz');
    }
}
