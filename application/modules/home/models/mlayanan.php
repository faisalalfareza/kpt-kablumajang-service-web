<?php

class Mlayanan extends CI_Model {
    
    function __construct() {
        parent::__construct();  
    }
    
    function getLayanan() {
        return $this->db->get('tblayanan')->result();
    }

    function getDetailLayanan( $id ) {
        $this->db->where('id_layanan', $id);
        return $this->db->get('tblayanan')->row();
    }        

    function namaLayanan( $id ) {
        $this->db->select('nama_layanan');
        return $this->db->get_where('tblayanan', array('id_layanan' => $id));
    }    
    
}