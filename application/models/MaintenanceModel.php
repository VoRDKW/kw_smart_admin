<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class MaintenanceModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->model('imagemodel');
        $this->load->model('datetimemodel');
    }

    private $JobStatusID = NULL;
    private $CreateDate = NUll;

    public function set_JobStatus($JobStatusID) {
        $this->JobStatusID = $JobStatusID;
    }

    public function set_CreateDate($CreateDate) {
        $this->CreateDate = $CreateDate;
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

    public function set_data_view() {
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
        $this->db->select('*,tbm_jobs.Note as Note,tbm_jobs.CreateDate as CreateDate');
        $this->db->join('tbm_room', 'tbm_room.RoomID=tbm_jobs.RoomID', 'LEFT');
        $this->db->join('building_has_room', 'tbm_room.RoomID = building_has_room.RoomID', 'LEFT');
        $this->db->join('tbm_building', 'tbm_building.BuildingID = building_has_room.BuildingID', 'LEFT');
        $this->db->join('tbm_job_status', 'tbm_job_status.JobStatusID = tbm_jobs.JobStatusID', 'LEFT');
        if ($this->JobStatusID != NULL) {
            $this->db->where('tbm_jobs.JobStatusID', $this->JobStatusID);
        }
        if ($this->CreateDate != NULL) {
            $this->db->like('tbm_jobs.CreateDate', $this->CreateDate);
        }
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
        $job_status = $this->get_job_status();
        $i_JobStatusID = array();
        $i_JobStatusID[0] = 'ทั้งหมด';
        foreach ($job_status as $status) {
            $i_JobStatusID[$status['JobStatusID']] = $status['JobStatusName'];
        }

        $i_CreateDate = array(
            'name' => 'CreateDate',
            'type' => 'text',
            'value' => set_value('CreateDate'),
            'class' => 'form-control datepicker'
        );

        $dropdown = ' class="form-control" '; //'class="selecter_3" data-selecter-options = \'{"cover":"true"}\' ';
        $form = array(
            'form_open' => form_open('maintenance/', array('class' => 'form-inline', 'id' => 'frm_search_job')),
            'JobStatusID' => form_dropdown('JobStatusID', $i_JobStatusID, set_value('JobStatusID'), $dropdown . 'id = "JobStatusID" '),
            'CreateDate' => form_input($i_CreateDate),
            'form_close' => form_close()
        );
        return $form;
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

    public function get_job_status() {
        $query = $this->db->get('tbm_job_status');
        return $query->result_array();
    }

}
