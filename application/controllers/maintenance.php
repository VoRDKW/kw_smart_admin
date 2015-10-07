<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class maintenance extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('maintenancemodel');
    }

    public function index() {
        $data = array(
            'page_title' => 'งานซ่อมบำรุงคอมพิวเตอร์',
            'page_title_small' => '',
                //'form' => $this->m_station->set_form_edit($rcode, $vtid),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('maintenance/maintenance_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function add() {
        $data = array(
            'page_title' => 'เพิ่มงานซ่อมบำรุง',
            'page_title_small' => '',
                'form' => $this->maintenancemodel->set_form_add(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('maintenance/maintenance_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function edit() {
        $data = array (
            
        );
        $data = array(
            'page_title' => 'รายละเอียดงานแจ้งซ่อม',
            'page_title_small' => '',
                'form' => $this->maintenancemodel->set_form_edit(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('maintenance/maintenance_detail_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function history() {
        $data = array(
            'page_title' => 'ประวัติ',
            'page_title_small' => '',
                //'form' => $this->m_station->set_form_edit($rcode, $vtid),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('maintenance/maintenance_history_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

}
