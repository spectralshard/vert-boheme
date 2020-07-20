<?php namespace VimirLab\Faqs\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateFaqsCategories extends Migration
{
	public function up()
	{
		Schema::create('vimirlab_faqs_categories', function ($table){
			$table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name');
            $table->boolean('is_active')->default(false);
            $table->timestamps();
		});
	}
	
	public function down()
	{
		Schema::dropIfExists('vimirlab_faqs_categories');
	}
}