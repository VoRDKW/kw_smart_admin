<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('maintenancemodel');
    }

    public function index() {
        $is_admin = $_SESSION['IsAdmin'];
        if ($is_admin != TRUE) {
            redirect('http://localhost/kw_smart/');
        }
        $this->maintenancemodel->set_JobStatus(1);
        $data = array(
            'IsAdmin' => $is_admin,
            'MemberID' => $_SESSION['MemberID'],
            'form' => $this->maintenancemodel->set_form_search(),
            'Jobs' => $this->maintenancemodel->set_data_view(),
        );
        //$this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('home_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

}
