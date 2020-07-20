<?php namespace VimirLab\Faqs\Components;

use Flash;
use Input;
use Mail;
use Redirect;
use Validator;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use VimirLab\Faqs\Models\Question;
use System\Models\MailSetting as MailSettings;

class AskQuestion extends ComponentBase
{	
	public function componentDetails()
	{
		return [
			'name' => 'Ask Question',
			'description' => 'Display a form to ask question.'
		];
	}
	
	public function onSend()
	{
		$validator = Validator::make(
			[
				'user_email' => Input::get('user_email')			
			],
			[
				'user_email' => 'required|email'
			]
		);
		
        if ($validator->fails())
        {
			return Redirect::back()->withErrors($validator);
		}
		else
		{		
			$data = Input::all();
			
			$question = new Question;
			$question->user_email = $data['user_email'];
			$question->question = $data['question'];
			$question->save();
		
			Mail::send('vimirlab.faqs::mail.client_mail', $data, function($m) use ($data){
				$m->to(MailSettings::get('sender_email'), MailSettings::get('sender_name'));
			});

			Flash::success('Your question was received. Thank you.');
			
			return Redirect::back();
		}
	}
}