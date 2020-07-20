<?php namespace VimirLab\Faqs\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use Vimirlab\Faqs\Models\Question;
use Vimirlab\Faqs\Components\FaqsAll;

class FaqsAll extends ComponentBase
{
	public $questions;
	
	public function componentDetails()
	{
		return [
			'name' => 'Faqs All',
			'description' => 'View all faqs questions and answers.'
		];
	}
	
	public function onRun()
	{
		$this->questions = $this->faqList();
		$this->addJs('/plugins/vimirlab/faqs/assets/js/faqs.js');
	}
	
	public function faqList()
	{
		$question = Question::where('is_active', 1)->get();
		
		return $question;
	}
}