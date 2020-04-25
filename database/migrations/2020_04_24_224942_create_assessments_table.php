<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('unid')->nullable();
            $table->string('title')->nullable();
            $table->string('photo')->nullable();
            $table->string('course_id')->nullable(); //not compulsory
            $table->string('mode')->nullable(); //timed, not_timed, timed_expire, timed_begin, timed_begin_expire, begin_expire
            $table->integer('duration')->nullable();//seconds [1hr = 60 * 60]
            $table->bigInteger('active_from')->nullable();
            $table->bigInteger('expire_at')->nullable();
            $table->string('type')->nullable(); //public , private
            $table->string('ans_num_mode')->nullable(); //numeric, alphabet, roman
            $table->boolean('active')->nullable();
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
        Schema::dropIfExists('assessments');
    }
}
