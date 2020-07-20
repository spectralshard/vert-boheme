<?php namespace VimirLab\Faqs\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use Vimirlab\Faqs\Models\Category;
use Vimirlab\Faqs\Models\Question;
use Vimirlab\Faqs\Components\FaqsAll;

class CategoryFaqs extends ComponentBase
{
	public $questions;
	
	public $categories;
	
	public function componentDetails()
	{
		return [
			'name' => 'Faqs with categories',
			'description' => 'View all faqs questions and answers with categories.'
		];
	}
	
	public function onRun()
	{
		$this->questions = $this->faqList();
		$this->categories = $this->categories();
		
		$this->addJs('/plugins/vimirlab/faqs/assets/js/faqs.js');
		$this->addCss('/plugins/vimirlab/faqs/assets/css/faqs.css');
	}
	
	public function faqList()
	{
		$question = Question::where('is_active', 1)->get();
			
		return $question;
	}
	
	public function categories()
	{
		$categories = Category::where('is_active', 1)->get();
		
		
		return $categories;
	}
}