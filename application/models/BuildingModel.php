<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class BuildingModel extends CI_Model {

    public function set_form_add_building() {
        $i_BuildingNo = array(
            'name' => 'BuildingNo',
            'value' => set_value('BuildingNo'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_BuildingName = array(
            'name' => 'BuildingName',
            'value' => set_value('BuildingName'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberFloor = array(
            'name' => 'NumberFloor',
            'value' => set_value('NumberFloor'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_Note = array(
            'name' => 'Note',
            'value' => set_value('Note'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $form_add = array(
            'form_open' => form_open('building/add/', array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'BuildingNo' => form_input($i_BuildingNo),
            'BuildingName' => form_input($i_BuildingName),
            'NumberFloor' => form_input($i_NumberFloor),
            'Note' => form_textarea($i_Note),
            'form_close' => form_close(),
        );
        
        return $form_add;
    }

    public function set_form_edit_building($BuildingID) {
        
    }

    public function get_post_form_building() {
        $form_data = array(
            "BuildingID" => $this->input->post('BuildingID'),
            "BuildingName" => $this->input->post('BuildingName'),
            "NumberFloor" => $this->input->post('NumberFloor'),
            "Note" => $this->input->post('Note'),
        );
        return $form_data;
    }

    public function validate_form_building() {
        $this->form_validation->set_rules('BuildingID', 'หมายเลขอาคาร', 'trim|required');
        $this->form_validation->set_rules('BuildingName', 'ชื่ออาคาร', 'trim|required');
        $this->form_validation->set_rules('NumberFloor', 'จำนวนชั้น', 'trim|required');
        $this->form_validation->set_rules('Note', 'อื่นๆ', 'trim|required');
      
        
        
        return TRUE;
    }

//form room
    public function set_form_add_room($BuildingID = NULL, $Floor = NULL) {
        $i_BuildingID = array(
            'name' => 'BuildingID',
            'value' => set_value('BuildingID'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_BuildingName = array(
            'name' => 'BuildingName',
            'value' => set_value('BuildingName'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberFloor = array(
            'name' => 'NumberFloor',
            'value' => set_value('NumberFloor'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomNo = array(
            'name' => 'RoomNo',
            'value' => set_value('RoomNo'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomName = array(
            'name' => 'RoomName',
            'value' => set_value('RoomName'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberSeat = array(
            'name' => 'NumberSeat',
            'value' => set_value('NumberSeat'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomNote = array(
            'name' => 'RoomNote',
            'value' => set_value('RoomNote'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $form_add = array(
            'form_open' => form_open('building/add_room/', array('class' => 'form-inline', 'id' => 'frm_building')),
            'BuildingID' => form_input($i_BuildingID),
            'BuildingName' => form_input($i_BuildingName),
            'NumberFloor' => form_input($i_NumberFloor),
            'RoomNo' => form_input($i_RoomNo),
            'RoomName' => form_input($i_RoomName),
            'NumberSeat' => form_input($i_NumberSeat),
            'RoomNote' => form_textarea($i_RoomNote),
            'form_close' => form_close(),
        );
       
        return $form_add;
    }

    public function set_form_edit_room($BuildingID, $RoomID) {
       
    }

    public function get_post_form_room() {
        $form_data = array(
            "BuildingID" => $this->input->post('BuildingID'),
            "BuildingName" => $this->input->post('BuildingName'),
            "BuildingFloor" => $this->input->post('BuildingFloor'),
            "RoomNo" => $this->input->post('RoomNo'),
            "RoomName" => $this->input->post('RoomName'),
            "NumberSeat" => $this->input->post('NumberSeat'),
            "RoomNote" => $this->input->post('RoomNote'),
            
        );
        return $form_data;
    }

    public function validate_form_room() {
        $this->form_validation->set_rules('BuildingID', 'หมายเลขอาคาร', 'trim|required');
        $this->form_validation->set_rules('BuildingName', 'ชื่ออาคาร', 'trim|required');
        $this->form_validation->set_rules('BuildingFloor', 'ชั้น', 'trim|required');
        $this->form_validation->set_rules('RoomNo', 'หมายเลขห้อง', 'trim|required');
        $this->form_validation->set_rules('RoomName', 'ชื่อห้อง', 'trim|required');
        $this->form_validation->set_rules('NumberSeat', 'จำนวนที่นั่ง', 'trim|required');
        $this->form_validation->set_rules('RoomNote', 'หมายเลขอาคาร', 'trim|required');
 
        return TRUE;
    }

}
