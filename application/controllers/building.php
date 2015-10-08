<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class building extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('buildingmodel');
    }

    public function index() {
        $data = array(
            'page_title' => 'อาคาร สถานที่',
            'page_title_small' => '',
            'data' => $this->buildingmodel->get_data_building(),
        );
        //$this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('buildings/building_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function add() {
        $data_debug = array();

        if ($this->buildingmodel->set_validate_form_building()) {
            $form_data = $this->buildingmodel->get_post_form_building();

            $rs = $this->buildingmodel->insert_building($form_data);

            if ($rs) {
                $alert['alert_message'] = "บันทึกข้อมูลสำเร็จ";
                $alert['alert_mode'] = "success";
            } else {
                $alert['alert_message'] = "บันทึกข้อมูลผิดพลาด";
                $alert['alert_mode'] = "danger";
            }
            $this->session->set_flashdata('alert', $alert);
            redirect('building/');

//            $data_debug['form_data'] = $form_data;
//            $data_debug['rs']=$rs;
        }

        $data = array(
            'page_title' => 'เพิ่ม อาคาร/สถานที่',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_add_building(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        //$this->TemplateModel->set_Debug($data_debug);
        $this->TemplateModel->set_Content('buildings/building_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function edit($BuildingID) {
        $building = $this->buildingmodel->get_Building($BuildingID);
        if ($BuildingID == NUll || $building == NULL)
            redirect('building');
        if ($this->buildingmodel->set_validate_form_building()) {
            $form_data = $this->buildingmodel->get_post_form_building();
            $rs = $this->buildingmodel->update_building($BuildingID, $form_data);
            if ($rs) {
                $alert['alert_message'] = "บันทึกข้อมูลสำเร็จ";
                $alert['alert_mode'] = "success";
                $this->session->set_flashdata('alert', $alert);
                redirect('building/');
            } else {
                $alert['alert_message'] = "บันทึกข้อมูลผิดพลาด";
                $alert['alert_mode'] = "danger";
                $this->session->set_flashdata('alert', $alert);
            }
        }
        $data = array(
            'page_title' => 'แก้ไข อาคาร/สถานที่',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_edit_building($BuildingID, $building),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        // $this->TemplateModel->set_Debug($building);
        $this->TemplateModel->set_Content('buildings/building_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function delete($BuildingID) {
        
    }

    public function add_room($BuildingID, $FloorNo) {

        $data_debug = array();
        if ($this->buildingmodel->set_validate_form_room()) {
            $form_data = $this->buildingmodel->get_post_form_room();
            $rs = $this->buildingmodel->insert_room($BuildingID, $form_data);
            if ($rs) {
                $alert['alert_message'] = "บันทึกข้อมูลสำเร็จ";
                $alert['alert_mode'] = "success";
            } else {
                $alert['alert_message'] = "บันทึกข้อมูลผิดพลาด";
                $alert['alert_mode'] = "danger";
            }
            $this->session->set_flashdata('alert', $alert);
            redirect('building/');
//            $data_debug['form_data'] = $form_data;
//            $data_debug['rs']=$rs;
        }

        $data = array(
            'page_title' => 'เพิ่ม ห้อง',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_add_room($BuildingID, $FloorNo),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        //$this->TemplateModel->set_Debug($data_debug);
        $this->TemplateModel->set_Content('buildings/building_room_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function edit_room($BuildingID, $RoomID) {

        $room = $this->buildingmodel->get_rooms($BuildingID, NULL, $RoomID);
        if ($room == NULL) {
            redirect('building/');
        }
        $data_debug = array();
        if ($this->buildingmodel->set_validate_form_room()) {
            $form_data = $this->buildingmodel->get_post_form_room($RoomID);
            $rs = $this->buildingmodel->update_room($RoomID, $form_data);
            if ($rs) {
                $alert['alert_message'] = "บันทึกข้อมูลสำเร็จ";
                $alert['alert_mode'] = "success";
            } else {
                $alert['alert_message'] = "บันทึกข้อมูลผิดพลาด";
                $alert['alert_mode'] = "danger";
            }
            $this->session->set_flashdata('alert', $alert);
            redirect('building/');
//            $data_debug['form_data'] = $form_data;
//            $data_debug['rs']=$rs;
        }

        $data = array(
            'page_title' => 'แก้ไข ห้อง',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_edit_room($BuildingID, $RoomID, $room),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        //$this->TemplateModel->set_Debug($room);
        $this->TemplateModel->set_Content('buildings/building_room_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }

    public function delete_room($RoomID) {
        $rs = $this->buildingmodel->delete_room($RoomID);
        if ($rs) {
            $alert['alert_message'] = "ลบข้อมูลสำเร็จ";
            $alert['alert_mode'] = "success";
        } else {
            $alert['alert_message'] = "ลบข้อมูลผิดพลาด";
            $alert['alert_mode'] = "danger";
        }
        $this->session->set_flashdata('alert', $alert);
        redirect('building/');
    }

}
