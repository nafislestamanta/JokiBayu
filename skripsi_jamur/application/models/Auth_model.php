<?php 
class Auth_model extends CI_Model { 

    public function show ()
    {
        $this->db->select('*');
        $this->db->order_by('id_user ASC');
        return $this->db->get('user');
    }
    
    public function cek_login ($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('user');
    }

    public function get_by_id ($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('user');
    }
    
    public function insert ($data)
    {
        return $this->db->insert('user', $data);
    }
    
    public function update ($id,$data)
    {
        $this->db->where('id_user', $id);
        $this->db->update('user', $data);
    }
    
    public function delete ($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    
 }
?>