<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends  CI_Controller{

    public function index()
    {
        $this->load->view('template/inc/header.php');
        $this->load->view('template/auth/login.php');
        $this->load->view('template/inc/footer.php');
    }


}

?>