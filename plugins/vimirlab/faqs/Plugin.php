<?php namespace VimirLab\Faqs;

use Event;
use Backend;
use Cms\Classes\Controller;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			'name'        => 'Frequently Asked Questions',
            'description' => 'FAQ plugin allows you to create questions with categories.',
            'author'      => 'VimirLab',
            'icon'        => 'icon-question'
		];
	}
	
	public function registerComponents()
	{
		return [
			'Vimirlab\Faqs\Components\FaqsAll' => 'faqsall',
			'Vimirlab\Faqs\Components\CategoryFaqs' => 'categoryfaqs',
			'Vimirlab\Faqs\Components\AskQuestion' => 'askquestion',
		];
	}

    public function registerPermissions()
    {
        return [
			'vimirlab.faqs.questions' => [
                'label' => 'Manage the faq questions',
                'tab' => 'Faq questions',
            ],
			
            'vimirlab.faqs.categories' => [
                'label' => 'Manage the faq categories',
                'tab' => 'Faq categories',
            ],            
        ];
    }
	
	public function registerNavigation()
    {
        return [
            'faqs' => [
                'label'       => 'FAQs',
                'url'         => Backend::url('vimirlab/faqs/questions'),
                'icon'        => 'icon-question',
                'permissions' => ['vimirlab.faqs.*'],
				'iconSvg'     => 'plugins/vimirlab/faqs/assets/images/vimirlab_faq.svg',
                'order'       => 500,
                
                'sideMenu'    => [
                    'questions'  => [
                        'label'       => 'Questions',
                        'url'         => Backend::url('vimirlab/faqs/questions'),
                        'icon'        => 'icon-question',
                        'permissions' => ['vimirlab.faqs.questions'],
                    ],
                    'categories'  => [
                        'label'       => 'Categories',
                        'url'         => Backend::url('vimirlab/faqs/categories'),
                        'icon'        => 'icon-list',
                        'permissions' => ['vimirlab.faqs.categories'],
                    ],
                ]
            ]
        ];
    }
		
	public function registerMailTemplates()
	{
		return [
			'vimirlab.faqs::mail.client_mail' => 'Notification about new question',
			'vimirlab.faqs::mail.user_mail' => 'user notification about question being answered',
		];
	}
}