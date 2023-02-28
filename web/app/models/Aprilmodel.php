<?php

class Aprilmodel {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllUsers(){
        $this->db->query("SELECT * FROM user_profile");
        return $this->db->resultSet();
    }
}
