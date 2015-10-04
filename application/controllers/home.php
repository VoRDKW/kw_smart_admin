<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        $is_admin = $_SESSION['IsAdmin'];
        $MemberID = $_SESSION['MemberID'];
        if ($MemberID != NULL && $is_admin == TRUE) {
            $data = array(
                'MemberID' => $MemberID
            );
            $this->TemplateModel->set_Debug($data);
            $this->TemplateModel->set_Content('home_view', $data);
            $this->TemplateModel->ShowTemplate();
        }  else {
            redirect('http://localhost/kw_smart/');
        }
    }

}
