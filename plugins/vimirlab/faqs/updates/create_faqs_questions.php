<?php namespace VimirLab\Faqs\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateFaqsQuestions extends Migration
{
	public function up()
	{
		Schema::create('vimirlab_faqs_questions', function ($table){
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->string('question');
            $table->longText('answer')->nullable();
            $table->timestamp('published_date')->nullable();
            $table->boolean('is_active')->default(false);
            $table->string('user_email');
            $table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::dropIfExists('vimirlab_faqs_questions');
	}
}