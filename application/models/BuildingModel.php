<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class BuildingModel extends CI_Model {

    public function get_building($BuildingID = NULL) {
        if ($BuildingID != NULL) {
            $this->db->where('BuildingID', $BuildingID);
        }
        $query = $this->db->get('tbm_building');
        if ($BuildingID == NULL) {
            $buildings = $query->result_array();
        } else {
            $buildings = $query->row_array();
        }
        return $buildings;
    }

    public function get_data_building($BuildingID = NULL) {

        $rs = array();
        $data = array();
        if ($BuildingID != NULL) {
            $this->db->where('BuildingID', $BuildingID);
        }
        $query = $this->db->get('tbm_building');
        $buildings = $query->result_array();
        $number_floor = 1;
        foreach ($buildings as $building) {
            $BuildingID = $building['BuildingID'];
            $NumberFloor = $building['NumberFloor'];
            $data_floor = array();
            for ($i = 1; $i <= $NumberFloor; $i++) {
                $data_room = array(
                    'FloorName' => "ชั้นที่ $i",
                    'FloorNo' => $i,
                    'Rooms' => $this->get_rooms($BuildingID, $i)
                );
                array_push($data_floor, $data_room);
            }
            $data = array(
                'BuildingID' => $building['BuildingID'],
                'BuildingName' => $building['BuildingName'],
                'BuildingNo' => $building['BuildingNo'],
                'NumberFloor' => $building['NumberFloor'],
                'Note' => $building['NumberFloor'],
                'Floors' => $data_floor,
            );
            array_push($rs, $data);
            $number_floor++;
        }

        return $rs;
    }

    public function get_rooms($BuildingID, $Floor = NULL, $RoomID = NULL) {
        $this->db->join('building_has_room', 'tbm_room.RoomID  = building_has_room.RoomID', 'left');
        $this->db->where('BuildingID', $BuildingID);

        if ($Floor != NULL) {
            $this->db->where('Floor', $Floor);
        }

        if ($RoomID != NULL) {
            $this->db->where('tbm_room.RoomID', $RoomID);
        }

        $query = $this->db->get('tbm_room');

        if ($RoomID == NULL) {
            $rs = $query->result_array();
        } else {
            $rs = $query->row_array();
        }
        return $rs;
    }

    public function insert_building($data) {

        $data['CreateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['CreateBy'] = $name = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->insert('tbm_building', $data);
        $id = $this->db->insert_id();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $rs = FALSE;
        } else {
            $this->db->trans_commit();
            $rs = TRUE;
        }
        return $rs;
    }

    public function update_building($BuildingID, $data) {
        $data['UpdateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['UpdateBy'] = $name = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->where('BuildingID', $BuildingID);
        $this->db->update('tbm_building', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $rs = FALSE;
        } else {
            $this->db->trans_commit();
            $rs = TRUE;
        }
        return $rs;
    }

    public function set_form_add_building() {

        $i_BuildingNo = array(
            'type' => 'text',
            'name' => 'BuildingNo',
            'value' => set_value('BuildingNo'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_BuildingName = array(
            'type' => 'text',
            'name' => 'BuildingName',
            'value' => set_value('BuildingName'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberFloor = array(
            'type' => 'number',
            'name' => 'NumberFloor',
            'value' => set_value('NumberFloor'),
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_Note = array(
            'name' => 'Note',
            'value' => set_value('Note'),
            'placeholder' => 'อื่นๆ',
            'class' => 'form-control',
            'rows' => '3'
        );
        $form_add = array(
            'form_open' => form_open(base_url('building/add/'), array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'BuildingNo' => form_input($i_BuildingNo),
            'BuildingName' => form_input($i_BuildingName),
            'NumberFloor' => form_input($i_NumberFloor),
            'Note' => form_textarea($i_Note),
            'form_close' => form_close(),
        );

        return $form_add;
    }

    public function set_form_edit_building($BuildingID, $data) {

        $i_BuildingNo = array(
            'type' => 'text',
            'name' => 'BuildingNo',
            'value' => $data['BuildingNo'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_BuildingName = array(
            'type' => 'text',
            'name' => 'BuildingName',
            'value' => $data['BuildingName'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberFloor = array(
            'type' => 'number',
            'name' => 'NumberFloor',
            'value' => $data['NumberFloor'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_Note = array(
            'name' => 'Note',
            'value' => $data['Note'],
            'placeholder' => 'อื่นๆ',
            'class' => 'form-control',
            'rows' => '3'
        );
        $form_edit = array(
            'form_open' => form_open(base_url("building/edit/$BuildingID"), array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'BuildingNo' => form_input($i_BuildingNo),
            'BuildingName' => form_input($i_BuildingName),
            'NumberFloor' => form_input($i_NumberFloor),
            'Note' => form_textarea($i_Note),
            'form_close' => form_close(),
        );

        return $form_edit;
    }

    public function get_post_form_building() {
        $form_data = array(
            "BuildingNo" => $this->input->post('BuildingNo'),
            "BuildingName" => $this->input->post('BuildingName'),
            "NumberFloor" => $this->input->post('NumberFloor'),
            "Note" => $this->input->post('Note'),
        );
        return $form_data;
    }

    public function set_validate_form_building() {
        $this->form_validation->set_rules('BuildingNo', 'หมายเลขอาคาร', 'trim|required');
        $this->form_validation->set_rules('BuildingName', 'ชื่ออาคาร', 'trim|required');
        $this->form_validation->set_rules('NumberFloor', 'จำนวนชั้น', 'trim|required');
        $this->form_validation->set_rules('Note', 'อื่นๆ', 'trim');

        $rs = $this->form_validation->run();

        return $rs;
    }

//form room



    public function insert_room($BuildingID, $data) {
        $data['CreateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['CreateBy'] = $name = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->insert('tbm_room', $data);
        $RoomID = $this->db->insert_id();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
        }


        //building_has_room
        $this->db->trans_begin();
        $data_building_has_room = array(
            'BuildingID' => $BuildingID,
            'RoomID' => $RoomID
        );
        $this->db->insert('building_has_room', $data_building_has_room);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
        }
        return TRUE;
    }

    public function update_room($RoomID, $data) {

        $data['UpdateDate'] = $this->DatetimeModel->getDatetimeNow();
        $data['UpdateBy'] = $name = $this->session->userdata('MemberID');

        $this->db->trans_begin();
        $this->db->where('RoomID', $RoomID);
        $this->db->Update('tbm_room', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
        }
    }

    public function delete_room($RoomID) {
        $this->db->trans_begin();
        $this->db->delete('building_has_room', array('RoomID' => $RoomID));
        $this->db->delete('tbm_room', array('RoomID' => $RoomID));
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
        }
        return TRUE;
    }

    public function set_form_add_room($BuildingID, $FloorNO) {

        $building = $this->get_building($BuildingID);

        $i_BuildingNo = array(
            'type' => 'text',
            'name' => 'BuildingNo',
            'value' => $building['BuildingNo'],
            'placeholder' => '',
            'class' => 'form-control',
            'readonly' => ''
        );
        $i_BuildingName = array(
            'type' => 'text',
            'name' => 'BuildingName',
            'value' => $building['BuildingName'],
            'placeholder' => '',
            'class' => 'form-control',
            'readonly' => ''
        );
        $i_Floor = array(
            'name' => 'Floor',
            'value' => $FloorNO,
            'placeholder' => '',
            'readonly' => '',
            'class' => 'form-control'
        );
        $i_RoomNo = array(
            'name' => 'RoomNO',
            'value' => set_value('RoomNO'),
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
            'rows' => '3',
            'class' => 'form-control'
        );
        $form_add = array(
            'form_open' => form_open("building/add_room/$BuildingID/$FloorNO", array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'BuildingID' => form_input($i_BuildingNo),
            'BuildingName' => form_input($i_BuildingName),
            'Floor' => form_input($i_Floor),
            'RoomNO' => form_input($i_RoomNo),
            'RoomName' => form_input($i_RoomName),
            'NumberSeat' => form_input($i_NumberSeat),
            'RoomNote' => form_textarea($i_RoomNote),
            'form_close' => form_close(),
        );

        return $form_add;
    }

    public function set_form_edit_room($BuildingID, $RoomID, $data) {

        $building = $this->get_building($BuildingID);


        $i_BuildingNo = array(
            'type' => 'text',
            'name' => 'BuildingNo',
            'value' => $building['BuildingNo'],
            'placeholder' => '',
            'class' => 'form-control',
            'readonly' => ''
        );
        $i_BuildingName = array(
            'type' => 'text',
            'name' => 'BuildingName',
            'value' => $building['BuildingName'],
            'placeholder' => '',
            'class' => 'form-control',
            'readonly' => ''
        );
        $i_Floor = array(
            'name' => 'Floor',
            'value' => $data['Floor'],
            'placeholder' => '',
            'readonly' => '',
            'class' => 'form-control'
        );
        $i_RoomNo = array(
            'name' => 'RoomNO',
            'value' => $data['RoomNO'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomName = array(
            'name' => 'RoomName',
            'value' => $data['RoomName'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_NumberSeat = array(
            'name' => 'NumberSeat',
            'value' => $data['NumberSeat'],
            'placeholder' => '',
            'class' => 'form-control'
        );
        $i_RoomNote = array(
            'name' => 'RoomNote',
            'value' => $data['RoomNote'],
            'placeholder' => '',
            'rows' => '3',
            'class' => 'form-control'
        );
        $form_add = array(
            'form_open' => form_open("building/edit_room/$BuildingID/$RoomID", array('class' => 'form-horizontal', 'id' => 'frm_building')),
            'BuildingID' => form_input($i_BuildingNo),
            'BuildingName' => form_input($i_BuildingName),
            'Floor' => form_input($i_Floor),
            'RoomNO' => form_input($i_RoomNo),
            'RoomName' => form_input($i_RoomName),
            'NumberSeat' => form_input($i_NumberSeat),
            'RoomNote' => form_textarea($i_RoomNote),
            'form_close' => form_close(),
        );

        return $form_add;
    }

    public function get_post_form_room($RoomID = NULL) {
        $form_data = array(
            "Floor" => $this->input->post('Floor'),
            "RoomNO" => $this->input->post('RoomNO'),
            "RoomName" => $this->input->post('RoomName'),
            "NumberSeat" => $this->input->post('NumberSeat'),
            "RoomNote" => $this->input->post('RoomNote'),
        );
        if ($RoomID != NULL) {
            $form_data['RoomID'] = $RoomID;
        }
        return $form_data;
    }

    public function set_validate_form_room() {

        $this->form_validation->set_rules('Floor', 'ชั้น', 'trim|required');
        $this->form_validation->set_rules('RoomNO', 'หมายเลขห้อง', 'trim|required');
//        $this->form_validation->set_rules('RoomName', 'ชื่อห้อง', 'trim|required');
//        $this->form_validation->set_rules('NumberSeat', 'จำนวนที่นั่ง', 'trim|required');
        $this->form_validation->set_rules('RoomNote', 'อื่นๆ', 'trim');

        $rs = $this->form_validation->run();

        return $rs;
    }

}
