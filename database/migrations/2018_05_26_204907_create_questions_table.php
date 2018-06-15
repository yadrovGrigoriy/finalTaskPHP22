<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('category_id');
<<<<<<< HEAD
            $table->boolean('publish')->nullable();
=======
            $table->boolean('publish');
>>>>>>> 79627eb0f710424b4c9a0fde2381cf3eb891b884
            $table->string('user_name');
            $table->string('user_email');
            $table->text('question');
            $table->text('answer')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
