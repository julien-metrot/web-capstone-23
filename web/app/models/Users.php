<?php

class Users {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function register($user) {
        $this->db->query("insert into user_profile(firstname, lastname, email, passwordhash) 
                                                values(:firstname, :lastname, :email, :passwordhash)");
        $this->db->bind(":firstname", $user["firstname"]);
        $this->db->bind(":lastname", $user["lastname"]);
        $this->db->bind(":email", $user["email"]);
        $this->db->bind(":passwordhash", password_hash($user["password1"], PASSWORD_DEFAULT));
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function findUserByEmail($email) {
        $this->db->query("select * from user_profile where email = :email");
        $this->db->bind(":email", $email);
        return $this->db->single();
    }
}