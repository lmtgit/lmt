<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function load_view($mod = 'body', $footer = 'footer', $temp = 'admin_default')
    {
        //Set Load Mod
        $this->config->set_item('layout_load_mod', "{$mod}_view");
        $this->config->set_item('layout_load_footer', "{$footer}_view");
        //Load View
        $this->load->view($temp, $this->_data);
    }
}
