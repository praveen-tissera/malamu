<?php 
class User_model extends CI_Model
{
    public function client_registration($data){
        // Query to check whether username already exist or not
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            //$data['register_date'] = date('Y-m-d');
            
            // Query to insert data into database
            $this->db->insert('tbl_user', $data);
            
            if ($this->db->affected_rows() > 0) {
                return 'registered';
            }
        } 
        else {
            return 'duplicate';
        }      
    }
}