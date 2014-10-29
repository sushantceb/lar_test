<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected $layout = 'layouts.master';

    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    public function makeView($view, $data = array()) {
        $this->layout->static_url = Config::get('app.static_url');
        $this->layout->static_version = Config::get('app.static_version');
        $this->layout->meta = array();
        $this->layout->page_title = Config::get('app.site_title');
        $this->layout->meta_desc = Config::get('app.site_desc');

        //$defaultHeadercss = array('min/g=maincss');
        $defaultHeadercss = array();
        $defaultHeaderjs = array('min/g=mainjs');
        
        $defaultFooterjs = array();
        
        $this->layout->headercss = isset($data['headercss']) ? array_merge($defaultHeadercss, $data['headercss']) : $defaultHeadercss;
        $this->layout->headerjs = isset($data['headerjs']) ? array_merge($defaultHeaderjs, $data['headerjs']) : $defaultHeaderjs;
        $this->layout->footerjs = isset($data['footerjs']) ? array_merge($defaultFooterjs, $data['footerjs']) : $defaultFooterjs;
        //print_r($data['headercss']);
        //print_r($this->layout->headerjs); exit;
        $this->layout->content = View::make($view);
        return $this->layout;
    }

}