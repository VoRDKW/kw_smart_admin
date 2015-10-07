<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        $is_admin = $_SESSION['IsAdmin'];
        if ($is_admin != TRUE) {
            //          redirect('http://localhost/kw_smart/');
        }
        $data = array(
            'IsAdmin' => $is_admin,
            'MemberID' => $_SESSION['MemberID']
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('home_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

}
