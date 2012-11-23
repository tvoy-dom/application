<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Main extends Controller_Template {

    public $template = 'tpl_main';
    private $_model;
    
    public function before() 
    {
        parent::before();
        $this->_model = Model::factory('modMain');
    }
    public function action_index()
    {
        $this->template->phones = $this->_model->get_phones();
        $this->template->menues = $this->_model->get_menues();
        $this->template->realtor = $this->_model->get_realtor();
        $this->template->content = View::factory('tpl_content');
        $this->template->sidebar = Request::factory('sidebar')->execute();
        $this->template->quicklies = $this->_model->get_quicklies();
        $this->template->price = Request::factory('price')->execute();
    }

} // End Main
