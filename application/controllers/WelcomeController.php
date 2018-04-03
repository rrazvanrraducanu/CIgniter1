<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends CI_Controller {

    public function index()
    {
        echo "Welcome to my first controller";
    }
    public function first_view(){

        $this->load->view('welcome_view');
    }

}