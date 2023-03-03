<?php
class Membersmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllMembers() {
        $this->db->query("
            select user_id, firstname, lastname, email, dateofbirth, status, job_title, job_description, job_qualification
            from user_profile;
            ");
        return $this->db->resultSet();
    }
}