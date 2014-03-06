<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
        protected $layout = 'layouts.master';   

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
        
        public function makeView($view, $data=array()) {
            $this->layout->static_url = Config::get('app.statuc_url');
            $this->layout->static_version = Config::get('app.static_version');
            $this->layout->meta = array();
            $this->layout->headercss = array('../min/g=maincss');
            $this->layout->headerjs = array('../min/g=mainjs');
            $this->layout->footerjs = array();
            $this->layout->page_title = Config::get('app.site_title');
	    $this->layout->meta_desc = Config::get('app.site_desc');
            
            $this->layout->content = View::make($view);
            return $this->layout;
        }

}