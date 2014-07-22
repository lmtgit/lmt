<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/core/MY_Admin.php';

class Province extends MY_Admin {

    public function index()
    {
        $this->load_view('province/list', 'footer_table');
    }

    public function add()
    {
        $this->load_view('province/add', 'footer_table');
    }
}