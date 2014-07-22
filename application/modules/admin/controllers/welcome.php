<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'application/core/MY_Admin.php';

class Welcome extends MY_Admin {

    public function index()
    {
        $this->load_view('welcome');
    }
}