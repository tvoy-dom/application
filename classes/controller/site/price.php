<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Price extends Controller_Template {

    public $template = 'tpl_price';
    private $_model;
    
    public function before() 
    {
        parent::before();
        $this->_model = Model::factory('modPrice');
    } 
    public function action_index()
    {
        $this->template->vids = $this->_model->get_vids();
        $this->template->data = $this->_model->get_data();
    }

} // End Main
