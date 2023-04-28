<?php

class Membersmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMembers()
    {
        $this->db->query("
            select user_id, firstname, lastname, email, dateofbirth, avatar, admin, 
                   status, job_title, job_description, job_qualification, linkedin, github
            from user_profile
            where admin = 1;
            ");
        return $this->db->resultSet();
    }

    public function getMember($user_id)
    {
        $this->db->query("
            select user_id, firstname, lastname, email, dateofbirth, avatar, admin, 
                   status, job_title, job_description, job_qualification, linkedin, github
            from user_profile
            where user_id = :user_id;
            ");
        $this->db->bind("user_id", $user_id);
        return $this->db->single();
    }

    public function addMember($data)
    {
        $this->db->query(
            "INSERT INTO user_profile (firstname, lastname, email, passwordhash, dateofbirth, admin, 
                   job_title, job_description, job_qualification, linkedin, github)
            VALUES (:firstname, :lastname, :email, :passwordhash, :dateofbirth, 1, 
                   :job_title, :job_description, :job_qualification, :linkedin, :github)");
        $this->db->bind(":firstname", $data["firstname"]);
        $this->db->bind(":lastname", $data["lastname"]);
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":passwordhash", password_hash($data["password1"], PASSWORD_DEFAULT));
        $this->db->bind(":dateofbirth", $data["dateofbirth"]);
        $this->db->bind(":job_title", $data["job_title"]);
        $this->db->bind(":job_description", $data["job_description"]);
        $this->db->bind(":job_qualification", $data["job_qualification"]);
        $this->db->bind(":linkedin", $data["linkedin"]);
        $this->db->bind(":github", $data["github"]);
        return $this->db->execute();
    }

    public function updateMember($data)
    {
        $this->db->query("update user_profile
                                set firstname = :firstname, lastname = :lastname, email = :email,
                                    dateofbirth = :dateofbirth, job_title = :job_title, job_description = :job_description,
                                    job_qualification = :job_qualification
                                where user_id = :user_id");
        $this->db->bind(":user_id", $data["user_id"]);
        $this->db->bind(":firstname", $data["firstname"]);
        $this->db->bind(":lastname", $data["lastname"]);
        $this->db->bind(":email", $data["email"]);
        $this->db->bind(":dateofbirth", $data["dateofbirth"]);
        $this->db->bind(":job_title", $data["job_title"]);
        $this->db->bind(":job_description", $data["job_description"]);
        $this->db->bind(":job_qualification", $data["job_qualification"]);
        return $this->db->execute();
    }

    public function deleteMember($id)
    {
        $this->db->query(
            "delete from user_profile
                where user_id = :user_id;"
        );
        $this->db->bind("user_id", $id);
        return $this->db->execute();
    }

    public function findUserByEmail($email)
    {
        $this->db->query("select * from user_profile where email = :email");
        $this->db->bind(":email", $email);
        return $this->db->single();
    }
}