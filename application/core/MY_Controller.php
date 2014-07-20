<?php
/**
* Main Controller
* Dùng để load những cấu hình của Website
* 
* @author Tiểu Tinh
* 2012/02/23
*/
class MY_Controller extends CI_Controller {
    
    /**
    * Main Value
    * 
    * @var mixed
    */
    public $_data = array();
    
    //----------------------------------------------------------------------------------------------------------------------
    /**
    * Construct
    *  
    */
    function __construct()
    {
    	//Construct
        parent::__construct();
        
		//Load cache
		//$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		
        //Setting of Website on Database - CACHE
        $this->_data['settings'] = $this->Msettings->getSettings();
    }
}

//----------------------------------------------------------------------------------------------------------------------
/**
* Function dùng cho Debug
* 
* @author Tiểu Tinh
* 2011/12/16
* 
*/
function debug2($var)
{
	echo '<pre>';
		print_r($var);
	echo '</pre>';
}

//----------------------------------------------------------------------------------------------------------------------
/**
* Function dùng cho Debug
* 
* @author Tiểu Tinh
* 2011/12/16
* 
*/
function debug($var)
{
    echo '<pre>';
        var_dump($var);
    echo '</pre>';    
}

//----------------------------------------------------------------------------------------------------------------------
/**
* Function dùng cho Debug
* 
* @author Tiểu Tinh
* 2011/12/16
* 
*/
function debugArr($var)
{
    foreach($var as $var2)
    {
        echo '<pre>';
        var_dump($var2);
        echo '</pre>';    
    }    
}