<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glasses', function (Blueprint $table) {
            $table->id();
            $table->string('refractive_index');
            $table->string('sodium');
            $table->string('magnesium');
            $table->string('aluminum');
            $table->string('barium');
            $table->string('attribute_class');
            $table->string('type_consult');
            $table->unsignedBigInteger('project_id');
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('glasses');
    }
}
