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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->bigInteger('age')->unsigned()->index()->nullable();
            $table->string('profession');
            $table->string('country');
            $table->string('city');
            $table->bigInteger('zip')->unsigned()->index()->nullable();
            $table->bigInteger('phone')->unsigned()->index()->nullable();
            $table->string('email');
            $table->string('workdescription');
            $table->string('degree');
            $table->string('uni');
            $table->bigInteger('gradyear')->unsigned()->index()->nullable();
            $table->string('skills');
            $table->string('summary');
            $table->bigInteger('template_id');
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
        Schema::dropIfExists('cvs');
    }
};
