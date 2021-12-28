<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan_model extends CI_Model{

    //declare constructor
    function __construct(){
        parent::__construct();
        //akses database
        $this->load->database();
    }

    //function utk show data pengguna (GET) & search by nama/username
    public function getMakanan($nama){
        if($nama==''){
            //show all data
            $data = $this->db->get('makanan');
        }else{
            //using like
            $this->db->like('nama_makanan', $nama);
            $data = $this->db->get('makanan');
        }

        return $data->result_array();
    }





}