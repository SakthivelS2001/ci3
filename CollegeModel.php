<?php

class CollegeModel extends CI_Model{

    public function updatedata($data,$id){

        $this->load->database();
        $this->db->where('id',$id);
        return  $this->db->update($data,'college_staff');
    }

    public function editdata($id){

        $this->load->database();
        $this->db->where('id',$id);
        return  $this->db->get('college_staff')->result();
    }

    public function insertdata($data){

        $this->load->database();
        return $this->db->insert('college_staff',$data);
        
    }

    public function getRecord(){

        $this->load->database();
        return $this->db->get('college_staff')->result();
       
        
    }
}
//file in models

?>