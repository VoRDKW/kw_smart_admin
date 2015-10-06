<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('usermodel');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index() {
        $data = array(
            'page_title' => 'ผู้ใช้งานระบบ',
            'page_title_small' => '',
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('users/user_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function add() {
        $data_debug['validation_form'] = $this->usermodel->set_validation();
        $data_debug['run'] = FALSE;
        if ($data_debug['validation_form'] && $this->form_validation->run() == TRUE) {
            $data_debug['test2'] = $this->usermodel->get_post_form_add();
        }
        $data = array(
            'page_title' => 'เพิ่มผู้ใช้งาน',
            'page_title_small' => '',
            'form' => $this->usermodel->set_form_add(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );

        $this->TemplateModel->set_Debug($data_debug);
        $this->TemplateModel->set_Content('users/user_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function edit() {
        $data = array(
            'page_title' => 'แก้ไขผู้ใช้งาน',
            'page_title_small' => '',
                //'form' => $this->m_station->set_form_edit($rcode, $vtid),
                //'' => ,
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('users/user_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

}
