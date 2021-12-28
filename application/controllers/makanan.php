<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Makanan extends REST_Controller{

    //declare constructor
    function __construct(){
        parent::__construct();
        $this->load->model('Makanan_model');
    }

    //function get/show data pengguna
    function index_get(){
        //cek token
        //$this->token_check();

        //value paramater nama
        $nama = $this->get('nama_makanan');
        //call function getPengguna from model
        $data = $this->Makanan_model->getMakanan($nama);

        /*response / result
        $result = array(
            'success' => true,
            'message' => 'data found',
            'data' => array('pengguna' => $data)
        );*/
        $result = $data;

        //show response
        $this->response($result, REST_Controller::HTTP_OK);
    }

}