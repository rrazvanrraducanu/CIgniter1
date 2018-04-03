<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function index()
    {
        echo "Welcome to my home controller";
    }
    public function home_view(){

        $this->load->view('my_home_view');
    }
}
