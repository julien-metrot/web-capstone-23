<?php
class Membersmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllMembers() {
        $this->db->query("
            select user_id, firstname, lastname, email, dateofbirth, avatar, admin, 
                   status, job_title, job_description, job_qualification, linkedin, github
            from user_profile
            where admin = 1;
            ");
        return $this->db->resultSet();
    }
}