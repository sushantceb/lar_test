<?php

class HomeController extends BaseController {
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

    public function index() {
        $data['headercss'] = array('min/f=css/bootstrap.min.css','min/f=css/woripari.css','min/f=css/font-awesome/css/font-awesome.min.css');
        $this->makeView('pages.home1', $data);
    }

}