<?php

class Julienmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllUsers() {
        $this->db->query("select * from user_profile;");
        return $this->db->resultSet();
    }
}