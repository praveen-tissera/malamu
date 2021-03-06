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
            $insert_id = $this->db->insert_id();
            
            if ($this->db->affected_rows() > 0) {
                //get last executed query id
                
                return $insert_id;
            }
        } 
        else {
            return 'duplicate';
        }      
    }
    public function search_phone($data){
        $condition = "phone_number =" . "'" . $data . "'";
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return 'duplicate';
        }else{
            return 'newnumber';
        }
    }
    // user login to the system using username or phone number
    public function user_login($data){
        //SELECT * FROM `tbl_user` WHERE username='sasmitha' OR phone_number ='0245632122' AND password ='7c4a8d09ca3762af61e59520943dc26494f8941b'
        $condition = "username =" . "'" . $data['username'] . "' AND password =" . "'" . $data['password'] . "'";  
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query_checkuser = $this->db->get();
        if ($query_checkuser->num_rows() == 0) {
            return 'nouser';
        }else{
            return $query_checkuser->result();
        }
    }
    // public function update_phone_verification($record_id){
    //         $this->db->set('phone_verification', 'verified');
    //         $this->db->where('user_id', $record_id);
    //         $this->db->update('tbl_user');
    //         if ($this->db->affected_rows() > 0) { 
    //             return "updated";
    //         }else{
    //             return "error";
                
    //         }
    // }
    /**
     * setting cookie 
     */
    public function set_cookie($userid,$token){
        $this->db->set('cookie', $token);
            $this->db->where('user_id', $userid);
            $this->db->update('tbl_user');
            if ($this->db->affected_rows() > 0) { 
                return "updated";
            }else{
                return "error";
                
            }
    }
}