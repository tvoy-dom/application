<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

    public $template = 'admin/tpla_main';
    private $_model;
    
    public function before() 
    {
        parent::before();
//        $this->_model = Model::factory('admin_modaMain');
    }
    public function action_index()
    {
    }

} // End Main
