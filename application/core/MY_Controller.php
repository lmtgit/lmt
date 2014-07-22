<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $_data = array(
        'head'      => array(
            'title'          => '',
            'keywords'       => '',
            'description'    => '',
        ),
        'content'   => '',
        'widget'    => '',
        'footer'    => ''
    );

    /**
     * Construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('string');
    }

    public function load_view($mod = 'body', $temp = 'template_default')
    {
        //Set Load Mod
        $this->config->set_item('layout_load_mod', "{$mod}_view");
        //Load View
        $this->load->view($temp, $this->_data);
    }
}