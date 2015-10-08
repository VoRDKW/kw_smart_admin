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
        $this->load->model('usermodel');
    }

    public function index() {
        $data_debug = array();
        if ($this->input->post('JobStatusID')) {
            $this->maintenancemodel->set_JobStatus($this->input->post('JobStatusID'));
        }
        if ($this->input->post('CreateDate')) {
            $CreateDate = $this->input->post('CreateDate');
            $this->maintenancemodel->set_CreateDate($this->datetimemodel->set_th_date_to_db($CreateDate));
        }

        $data = array(
            'page_title' => 'งานซ่อมบำรุงคอมพิวเตอร์',
            'page_title_small' => '',
            'form' => $this->maintenancemodel->set_form_search(),
            'data' => $this->maintenancemodel->set_data_view(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data_debug);
        $this->TemplateModel->set_Content('maintenance/maintenance_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function view($JobID) {
        $data = array(
            'page_title' => 'งานซ่อมบำรุงคอมพิวเตอร์',
            'page_title_small' => '',
            'data' => $this->maintenancemodel->set_data_view(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('maintenance/maintenance_detail_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function prove($JobID = NULL) {
        $Job_Data = $this->maintenancemodel->get_jobs($JobID);
        if ($JobID == NULL || $Job_Data == NULL) {
            redirect('maintenance');
        }
        $data_debug = array();
        if ($this->maintenancemodel->validate_form_job_prove()) {
            $form_data = array(
                'SolveDetail' => $this->input->post('SolveDetail'),
                'JobStatusID' => 3
            );
            $rs = $this->maintenancemodel->update_job($JobID, $form_data);
            if ($rs) {
                $alert['alert_message'] = "แก้ไขข้อมูลสำเร็จ";
                $alert['alert_mode'] = "success";
            } else {
                $alert['alert_message'] = "แก้ไขข้อมูลผิดพลาด";
                $alert['alert_mode'] = "danger";
            }
            $this->session->set_flashdata('alert', $alert);
            redirect('maintenance/');
            $data_debug['form_data'] = $form_data;
            $data_debug['rs'] = $rs;
        }

        $Job_Data['OpenDate'] = $this->datetimemodel->DateThai($Job_Data['OpenDate']);
        $Job_Data['CloseDate'] = $this->datetimemodel->DateThai($Job_Data['CloseDate']);
        $Job_Data['CreateDate'] = $this->datetimemodel->DateTimeThai($Job_Data['CreateDate']);

        $data = array(
            'page_title' => 'รายละเอียดงานแจ้งซ่อม',
            'page_title_small' => '',
            'Job' => $Job_Data,
            'Member' => $this->usermodel->get_user($Job_Data['CreateBy']),
            'images' => $this->imagemodel->get_job_image($JobID),
            'form' => $this->maintenancemodel->set_form_job_prove($JobID),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data_debug);
        $this->TemplateModel->set_Content('maintenance/maintenance_detail_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function update_status($JobID, $JobStatusID) {
        $data = array(
            'JobStatusID' => $JobStatusID
        );
        $rs = $this->maintenancemodel->update_job($JobID, $data);
        redirect('maintenance/prove/' . $JobID);
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
