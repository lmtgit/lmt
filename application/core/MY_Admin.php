<?php
class MY_Admin extends MY_Controller
{
    /**
    * Main Value
    * 
    * @var mixed
    */
	public $_data = array('content' => '');
    //----------------------------------------------------------------------------------------------
    /**
    * Construct
    * 
    */
    function __construct()
    {
        parent::__construct();
        //Load Model
        $this->load->model('Authcheck');
		
        //$this->checkLogin();
		
		//Load thông báo
        $this->load->library('messenge');
    } 
    
    //----------------------------------------------------------------------------------------------
    /**
    * Check login to administrators
    * 
    */
    protected function checkLogin()
    {
        if(!$this->Authcheck->checkSessionAdmin())
        {
            redirect($this->config->item('url_admin').'/login');
        }    
    }
}
