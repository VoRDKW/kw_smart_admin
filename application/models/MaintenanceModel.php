<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
Class MaintenanceModel extends CI_Model {
    public function set_form_add_maintenace(){
        $i_JobName = array(
            'name' => 'JobName',
            'value' => set_value('JobName'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomNo = array(
            'name' => 'RoomNo',
            'value' => set_value('RoomNo'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberKWDevice = array(
            'name' => 'NumberKWDevice',
            'value' => set_value('NumberKwDevie'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_ImageName = array(
            'name' => 'ImageName',
            'type' => 'file',
            'value' => set_value('ImageName'),
            'placeholder' => '',
            'class' => ''
        );
        $i_JobDetail = array(
            'name' => 'JobDetail',
            'value' => set_value('JobDetail'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_Note = array(
            'name' => 'Note',
            'value' => set_value('Notes'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $form_add = array(
            'form_open' => form_open('building/add/', array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'JobName' => form_input($i_JobName),
            'RoomNo' => form_input($i_RoomNo),
            'NumberKWDevice' => form_input($i_NumberKWDevice),
            'ImageName' => form_input($i_ImageName),
            'JobDetail' => form_textarea($i_JobDetail),
            'Note' => form_input($i_Note),
            'form_close' => form_close(),
        );
    }
    
    public function set_form_edit_maintenace($JobID){}
        
    public function get_post_form_maintenace(){}
        "JobName" => $this->input->post('JobName'),
        "RoomNo" => $this->input->post('RoomNo'),    
        "NumberKWDevice" => $this->input->post('NumberKWDevice'),
        "ImageName" => $this->input->post('ImageName'),
        "JobDetail" => $this->input->post('JobDetail'),
        "Note" => $this->input->post('Note'),
                
    public function validate_form_maintenace(){
        $this->form_validation->set_rules('JobName', 'หัวข้อ', 'trim|required');
        $this->form_validation->set_rules('RoomNo', 'หมายเลขห้อง', 'trim|required');
        $this->form_validation->set_rules('NumberKWDevice', 'เลขที่ กว.', 'trim|required');
        $this->form_validation->set_rules('ImageName', 'รูปภาพ', 'trim|required');
        $this->form_validation->set_rules('JobDetail', 'ปัญหาที่แจ้ง', 'trim|required');
        $this->form_validation->set_rules('Note', 'หมายเหตุ', 'trim|required');

    }
}

