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
        Schema::create('sub_grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->foreign('grade_id')->references('id')->on('grades'); 
            $table->string('subgradeName');
            $table->string('c');
            $table->string('mn');
            $table->string('s');
            $table->string('p');
            $table->string('si');
            $table->string('cr');
            $table->string('ni');
            $table->string('mo');
            $table->string('co');
            $table->string('v');
            $table->string('w');
            $table->string('ti');
            $table->string('ai');
            $table->string('cu');
            $table->string('fe');
            $table->string('otherelement');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('sub_grades');
    }
};
