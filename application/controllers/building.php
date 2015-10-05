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
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('buildings/building_view', $data);
        $this->TemplateModel->ShowTemplate();
    }
    public function add_building() {
        $data = array(
            'page_title' => 'เพิ่ม อาคาร สถานที่',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_add_building(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('buildings/building_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }
    public function edit($data) {
        
    }
    public function delete($BuildingID){
        
    }
    
    public function add_room(){
        $data = array(
            'page_title' => 'เพิ่ม/แก้ไข ห้อง',
            'page_title_small' => '',
            'form' => $this->buildingmodel->set_form_add_room(),
                //'previous_page' => 'route/time/' . $rcode . '/' . $vtid,
                //'next_page' => 'fares/add/' . $rcode . '/' . $vtid,
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('buildings/building_room_form_view', $data);
        $this->TemplateModel->ShowTemplate();
    }
    
    public function edit_room($BuildingID,$RoomID){
        
    }
    
    
}
