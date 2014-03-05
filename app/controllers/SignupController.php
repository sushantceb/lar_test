<?php

class SignupController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
        protected $layout = 'layouts.master';

        public function signup()
	{   
            $this->layout->static_url = 'http://lar.org/';
            $this->layout->static_version = 101;
            $this->layout->meta = array();
            $this->layout->headercss = array(
                    'bootstrap.min.css',
                    'bootstrap-responsive.min',
                    'base-admin-3.css',
                    'base-admin-3-responsive.css',
                    'font-awesome.min.css',
                    'dashboard.css',
                );
            $this->layout->headerjs = array();
            $this->layout->footerjs = array();
            $this->layout->page_title = 'Register';
	    $this->layout->meta_desc = 'Register';
            $this->layout->content = View::make('signup.signup');
	}

}