<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class MaintenanceModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('imagemodel');
        $this->load->model('datetimemodel');
    }

    private $JobStatusID = 0;

    public function set_JobStatus($JobStatusID) {
        $this->JobStatusID = $JobStatusID;
    }

    public function update_job($JobID, $data) {
        $data['UpdateDate'] = $this->datetimemodel->getDatetimeNow();
        $data['UpdateBy'] = $this->session->userdata('MemberID');
        $this->db->trans_begin();
        $this->db->where('JobID', $JobID);
        $this->db->update('tbm_jobs', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $rs = FALSE;
        } else {
            $this->db->trans_commit();
            //$this->uploadmodel->upload_multi_image('img_maintenance', 'ImageName', $job_id, 'job_has_image');
            $rs = TRUE;
        }
        return $rs;
    }

    public function set_data_view($JobID = NULL) {
        $rs = array();
        $Jobs = $this->get_jobs();
        foreach ($Jobs as $Job) {
            $job_id = $Job['JobID'];
            $Job['Images'] = $this->imagemodel->get_job_image($job_id);
            $Job['CreateDate'] = $this->datetimemodel->DateTimeThai($Job['CreateDate']);
            array_push($rs, $Job);
        }
        return $rs;
    }

    public function get_jobs($JobID = NULL) {
        $this->db->select('*,tbm_jobs.Note as Note');
        $this->db->join('tbm_room', 'tbm_room.RoomID=tbm_jobs.RoomID', 'LEFT');
        $this->db->join('building_has_room', 'tbm_room.RoomID = building_has_room.RoomID', 'LEFT');
        $this->db->join('tbm_building', 'tbm_building.BuildingID = building_has_room.BuildingID', 'LEFT');
        $this->db->join('tbm_job_status', 'tbm_job_status.JobStatusID = tbm_jobs.JobStatusID', 'LEFT');
        if ($JobID != NULL) {
            $this->db->where('tbm_jobs.JobID', $JobID);
        }
        $query = $this->db->get('tbm_jobs');

        if ($JobID == NULL) {
            $rs = $query->result_array();
        } else {
            $rs = $query->row_array();
        }
        return $rs;
    }

    public function set_form_search() {
        
    }

    public function set_form_job_prove($JobID) {
        $i_SolveDetail = array(
            'name' => 'SolveDetail',
            'value' => set_value('SolveDetail'),
            'placeholder' => '',
            'rows' => '3',
            'class' => 'form-control'
        );
        $form = array(
            'form_open' => form_open('maintenance/prove/' . $JobID, array('class' => '', 'id' => 'frm_job_prove')),
            'SolveDetail' => form_textarea($i_SolveDetail),
            'form_close' => form_close()
        );
        return $form;
    }

    public function get_post_form_job_prove() {
        $form_data = array(
            "SolveDetail" => $this->input->post('JobName'),
        );
        return $form_data;
    }

    public function validate_form_job_prove() {
        $this->form_validation->set_rules('SolveDetail', 'ปัญหาที่แจ้ง', 'trim|required');
        $rs = $this->form_validation->run();
        return $rs;
    }

}
