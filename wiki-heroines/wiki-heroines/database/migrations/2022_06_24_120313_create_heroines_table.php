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
        Schema::create('heroines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('gender');
            $table->integer('founder');
            $table->text('description');
            $table->text('power');
            $table->timestamps();
            $table->bigInteger('groupe_id')->unsigned();
            $table->foreign('groupe_id')
                ->references('id')
                ->on('groupes');
                $table->bigInteger('edition_id')->unsigned();
            $table->foreign('edition_id')
                ->references('id')
                ->on('editions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroines');
    }
};
