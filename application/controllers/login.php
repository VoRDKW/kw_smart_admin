<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class login extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('http://localhost/kw_smart/');
    }

    public function check($MemberID) {
        $user_data = $this->get_user($MemberID);
        if ($MemberID != NULL && count($user_data) > 0 && $this->check_admin($MemberID)) {
            $session = array(
                'MemberID' => $MemberID,
                'IsLogin' => TRUE,
                'IsAdmin' => $this->check_admin($MemberID),
            );
            $this->session->set_userdata($session);
            redirect('home');
        } else {
            redirect('http://localhost/kw_smart/');
        }
    }

    public function check_admin($MemberID) {
        $this->db->where('PositionID', 2);
        $this->db->where('MemberID', $MemberID);
        $query = $this->db->get('tbm_user');
        $users = $query->result_array();
        if (count($users) == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_user($MemberID) {
        $this->db->join('tbm_images', 'tbm_user.ImageUserID = tbm_images.ImageID', 'left');
        $this->db->join('tbm_positions', 'tbm_user.PositionID = tbm_positions.PositionID', 'left');
        $this->db->where('MemberID', $MemberID);
        $query = $this->db->get('tbm_user');
        $rs = $query->result_array();
        return $rs;
    }

}
