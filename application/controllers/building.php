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

        //$this->load->model('usermodel');
    }
    
    public function index() {
        $data = array(
            'MemberID' => $_SESSION['MemberID']
        );
        $this->TemplateModel->set_Debug($data);
        $this->TemplateModel->set_Content('buildings/building_view', $data);
        $this->TemplateModel->ShowTemplate();
    }
    public function add() {
        
    }
    public function eidt($data) {
        
    }
    public function delete($BuildingID){
        
    }
    
    public function add_room(){
        
    }
    
    public function edit_room($BuildingID,$RoomID){
        
    }
    
}
