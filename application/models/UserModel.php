<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class UserModel extends CI_Model {

    public function set_form_add() {
//        $i_Source = array(
//            'name' => 'Source',
//            'value' => $source,
//            'placeholder' => 'ต้นทาง',
//            'readonly' => '',
//            'class' => 'form-control'
//        );

        $form_add = array(
            'form' => form_open('user/add/', array('class' => 'form-horizontal', 'id' => 'form_station')),
        );
        

        return $form_add;
    }

    public function set_form_edit($data) {

//        $i_Destination = array(
//            'name' => 'Destination',
//            'placeholder' => 'ปลายทาง',
//            'readonly' => '',
//            'class' => 'form-control text-center',
//            'value' => $desination
//        );

        $form_edit = array(
            'form' => form_open('user/edit/', array('class' => 'form-horizontal', 'id' => 'form_station')),
        );

        return $form_edit;
    }

}
