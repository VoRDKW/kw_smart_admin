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
        
        //$this->load->model('usermodel');
            
    }

    public function index() {
         $data = array(
                'MemberID' => $_SESSION['MemberID']
            );
            $this->TemplateModel->set_Debug($data);
            $this->TemplateModel->set_Content('users/user_view', $data);
            $this->TemplateModel->ShowTemplate();
    }
    
    public function add(){
         $data = array(
                'MemberID' => $_SESSION['MemberID']
            );
            $this->TemplateModel->set_Debug($data);
            $this->TemplateModel->set_Content('users/user_form_view', $data);
            $this->TemplateModel->ShowTemplate();
    }

    public function edit() {
        
    }

}
