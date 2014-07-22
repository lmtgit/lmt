<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Exceptions extends CI_Exceptions {

    function __construct(){
        parent::__construct();
    }

    function show_404($page = '', $log_error = TRUE)
    {
        $CI =& get_instance();
        $module = $CI->router->fetch_module();
        $data['template'] = $module.'/error_404';
        $data['title'] = '404 - Page Not Found';
        $CI->breadcrumb_front->append_crumb(trans('title_page_error'), base_url().'errors/error_404');
        $CI->load->view('home/template',$data);
        echo $CI->output->get_output();
        exit;
    }
}
?>