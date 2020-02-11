<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_access_model extends CI_Model {

    private $table_name = "user_access";

    public $id_user_access;
    public $user_access;
    public $description;

    public function rules()
    {
        return [
            ['field' => 'user_access',
            'label' => 'User Access Name',
            'rules' => 'required'],
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll() {
        return $this->db->get($this->table_name)->result();
    }

    public function save() {
        $post = $this->input->post(); 

        $data = array(
            "user_access" => $post["user_access"],
            "description" => $post["description"]
        );
        

        $this->db->insert($this->table_name, $data);

        // $this->db->query("INSERT INTO $this->table_name (user_access,description) VALUES ('$user_access','$description')");
    }

    public function getById($id_user_access) {
        return $this->db->get_where($this->table_name, ["id_user_access" => $id_user_access] )->row();
    }

    public function delete($id_user_access) {
        return $this->db->delete($this->table_name,array("id_user_access" => $id_user_access));
    }

    
}

/* End of file User_access_model.php */
