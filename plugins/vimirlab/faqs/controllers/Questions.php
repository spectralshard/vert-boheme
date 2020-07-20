<?php namespace VimirLab\Faqs\Controllers;

use Config;
use App;
use Mail;
use Flash;
use BackendMenu;
use Backend\Classes\Controller;
use VimirLab\Faqs\Models\Question;

class Questions extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['vimirlab.faqs.questions'];
	
	public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('VimirLab.Faqs', 'faqs', 'questions');
    }

	public function onSendNotification($recordId = null)
	{
		$model = $this->formFindModelObject($recordId);
        if (filter_var($model->user_email, FILTER_VALIDATE_EMAIL)){			
			
			$model->answer = $_POST['Question']['answer'];
			$model->question = $_POST['Question']['question'];
			$model->category = $_POST['Question']['category'];
			$model->question = $_POST['Question']['question'];
			$model->is_active = $_POST['Question']['is_active'];
			$model->published_date = $_POST['Question']['published_date'];
			$model->save();
			
            $user_email = $model->user_email;
            $question = $model->question;
            $answer = $model->answer;
            $questionid = $recordId;
			$link = Config::get('app.url');
			
            $params = compact('question','answer','questionid','link');
						
            Mail::send('vimirlab.faqs::mail.user_mail',$params, function ($message) use ($user_email) {
				$message->to($user_email);
			});
			
            Flash::success('Notification send sucessfully to: ' .$user_email);
            
			if ($redirect = $this->makeRedirect('update', $model)) {
                return $redirect;
            }
        }
        else 
		{ 
			Flash::error('Invalid Email for notification.'); 
		}

	}
}

