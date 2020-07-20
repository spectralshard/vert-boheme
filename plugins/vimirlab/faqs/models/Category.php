<?php namespace VimirLab\Faqs\Models;

use Model;

class Category extends Model
{
	public $table = 'vimirlab_faqs_categories';
	
	protected $guarded = ['*'];
}