<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($MemberID=NULL){
        
        $this->db->join('tbm_positions','tbm_positions.PositionID = tbm_user.PositionID','left');
        
        if($MemberID!=NULL){
            $this->db->where('MemberID',$MemberID);
        }
         $query = $this->db->get('tbm_user');
        if ($MemberID == NULL) {
            $rs = $query->result_array();
        } else {
            $rs = $query->row_array();
        }
        
        return $rs;
    }


    public function set_form_add() {
        $i_PersonalID = array(
            'name' => 'PersonalID',
            'value' => set_value('PersonalID'),
            'placeholder' => 'รหัสประจำตัวประชาชน',
            'class' => 'form-control'
        );
        $i_Username = array(
            'name' => 'UserName',
            'value' => set_value('Username'),
            'placeholder' => 'ชื่อผู้ใช้',
            'class' => 'form-control'
        );
        $i_Password = array(
            'name' => 'Password',
            'value' => set_value('Password'),
            'placeholder' => 'รหัสผ่าน',
            'class' => 'form-control'
        );
        $i_Fname = array(
            'name' => 'Fname',
            'value' => set_value('Fname'),
            'placeholder' => 'ชื่อ',
            'class' => 'form-control'
        );
        $i_Lname = array(
            'name' => 'Lname',
            'value' => set_value('Lname'),
            'placeholder' => 'นามสกุล',
            'class' => 'form-control'
        );
        $i_MobilePhone = array(
            'name' => 'MobilePhone',
            'value' => set_value('MobilePhone'),
            'placeholder' => 'เบอร์โทรศัพท์',
            'class' => 'form-control'
        );
        $i_Email = array(
            'name' => 'Email',
            'value' => set_value('Email'),
            'placeholder' => 'อีเมล',
            'class' => 'form-control'
        );
        $i_ImageUserID = array(
            'name' => "ImageUserID",
            'value' => set_value('ImageUserID'),
            'placeholder' => 'รูปภาพ',
            'type' => 'file',
            'class' => ''
        );

        $form_add = array(
            'form_open' => form_open(base_url('user/add/'), array('class' => 'form-horizontal', 'id' => 'frm_user')),
            'PersonalID' => form_input($i_PersonalID),
            'UserName' => form_input($i_Username),
            'Password' => form_input($i_Password),
            'Fname' => form_input($i_Fname),
            'Lname' => form_input($i_Lname),
            'MobilePhone' => form_input($i_MobilePhone),
            'Email' => form_input($i_Email),
            'ImageUserID' => form_input($i_ImageUserID),
            'form_close' => form_close(),
        );

        return $form_add;
    }

    public function set_form_edit($MemberID,$data) {
        $i_PersonalID = array(
            'name' => 'PersonalID',
            'value' => $data['PersonalID'],
            'placeholder' => 'รหัสประจำตัวประชาชน',
            'class' => 'form-control'
        );
        $i_Username = array(
            'name' => 'UserName',
            'value' => $data['UserName'],
            'placeholder' => 'ชื่อผู้ใช้',
            'class' => 'form-control'
        );
        $i_Password = array(
            'name' => 'Password',
            'value' => $data['Password'],
            'placeholder' => 'รหัสผ่าน',
            'class' => 'form-control'
        );
        $i_Fname = array(
            'name' => 'Fname',
            'value' => $data['Fname'],
            'placeholder' => 'ชื่อ',
            'class' => 'form-control'
        );
        $i_Lname = array(
            'name' => 'Lname',
            'value' => $data['Lname'],
            'placeholder' => 'นามสกุล',
            'class' => 'form-control'
        );
        $i_MobilePhone = array(
            'name' => 'MobilePhone',
            'value' => $data['MobilePhone'],
            'placeholder' => 'เบอร์โทรศัพท์',
            'class' => 'form-control'
        );
        $i_Email = array(
            'name' => 'Email',
            'value' => $data['Email'],
            'placeholder' => 'อีเมล',
            'class' => 'form-control'
        );
        $i_ImageUserID = array(
            'name' => "ImageUserID",
            'value' => $data['ImageUserID'],
            'placeholder' => 'รูปภาพ',
            'type' => 'file',
            'class' => ''
        );

        $form_add = array(
            'form_open' => form_open(base_url("user/edit/$MemberID"), array('class' => 'form-horizontal', 'id' => 'frm_user')),
            'PersonalID' => form_input($i_PersonalID),
            'UserName' => form_input($i_Username),
            'Password' => form_input($i_Password),
            'Fname' => form_input($i_Fname),
            'Lname' => form_input($i_Lname),
            'MobilePhone' => form_input($i_MobilePhone),
            'Email' => form_input($i_Email),
            'ImageUserID' => form_input($i_ImageUserID),
            'form_close' => form_close(),
        );

        return $form_add;
    }
    
    public function insert_user($data) {

        
        $data['CreateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['CreateBy'] = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->insert('tbm_user', $data);   
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $rs = FALSE;
        } else {
            $this->db->trans_commit();
            $rs = TRUE;
        }
        return $rs;

    }
    public function update_user($MemberID,$data) {

        
        $data['UpdateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['UpdateBy'] = $name = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->where('MemberID',$MemberID);
        $this->db->update('tbm_user', $data);   
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $rs = FALSE;
        } else {
            $this->db->trans_commit();
            $rs = TRUE;
        }
        return $rs;

    }
    
    public function set_validation_form() {
        $this->form_validation->set_rules('PersonalID', 'รหัสประจำตัวประชาชน', 'trim|required');
        $this->form_validation->set_rules('UserName', 'ชื่อผู้ใช้', 'trim|required');
        $this->form_validation->set_rules('Password', 'รหัสผ่าน', 'trim|required');
        $this->form_validation->set_rules('Fname', 'ชื่อ', 'trim|required');
        $this->form_validation->set_rules('Lname', 'นามสกุล', 'trim|required');
        $this->form_validation->set_rules('MobilePhone', 'เบอร์โทรศัพท์', 'trim|required');
        $this->form_validation->set_rules('Email', 'อีเมล', 'trim|required');
        $this->form_validation->set_rules('ImageUserID', 'รูปผู้ใช้', 'trim');
        $rs = $this->form_validation->run();

        return $rs;
    }

    public function get_form_post() {

        $form_data = array(
            "PersonalID" => $this->input->post('PersonalID'),
            "UserName" => $this->input->post('UserName'),
            "Password" => $this->input->post('Password'),
            "Fname" => $this->input->post('Fname'),
            "Lname" => $this->input->post('Lname'),
            "MobilePhone" => $this->input->post('MobilePhone'),
            "Email" => $this->input->post('Email'),
        );
        if ($this->input->post('ImageUserID')) {
            $this->load->model('uploadmodel');
            $img_id = $this->uploadmodel->upload_image('img_user', 'ImageUserID');
            //$form_data['ImageUserID'] = $img_id;
        }
        return $form_data;   
    }

}
