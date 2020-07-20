<?php namespace VimirLab\Faqs\Models;

use Model;

class Question extends Model
{
    use \October\Rain\Database\Traits\Validation;
	
	public $table = 'vimirlab_faqs_questions';
	
	protected $guarded = ['*'];	 
	
	public $belongsTo = [
		'category' => ['Vimirlab\Faqs\Models\Category']
	];
	
    public $rules = [
        'user_email' => 'email',
    ];
}