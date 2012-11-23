<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Sidebar extends Controller_Template {

    public $template = 'tpl_sidebar';
    private $_model;
    
    public function before() 
    {
        parent::before();
        $this->_model = Model::factory('modSidebar');
    }
    public function action_index()
    {
        $this->template->header = $this->_model->get_header();
        $this->template->comments = $this->_model->get_comments();
    }

} // End Main
