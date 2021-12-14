<?php

    class MData extends CI_Model{
        function simpan($table,$where){
            return $this->db->insert($table,$where);
        }
        function tampilData(){
            return $this->db->get('tbl_inventaris');
        }
    }

?>