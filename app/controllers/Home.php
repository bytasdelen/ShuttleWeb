<?php

class Home extends Controller {

    public function __construct() {
        -
                parent::__construct();
    }

    public function index() {
        $this->front();
    }

    public function front() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/home");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function login() {
        $this->load->view("Entry/loginForm");
    }

}
?>

