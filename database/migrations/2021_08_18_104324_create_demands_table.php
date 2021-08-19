<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('project_type_id');  
            $table->foreign('project_type_id')->references('id')->on('project_types');
            $table->unsignedBigInteger('service_type_id');  
            $table->foreign('service_type_id')->references('id')->on('service_types');
            $table->unsignedBigInteger('subject_id');  
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->string('pageNbr');
            $table->string('limitdate');
            $table->string('topic');
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('demands');
    }
}
