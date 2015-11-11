<?php

class Admin extends Controller {

    public function __construct() {
        error_log("admin.php");
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {

        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/home");
        $this->load->view("Template_BackEnd/footer");
    }

}
?>

