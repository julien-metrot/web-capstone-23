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

    public function holdUserInfo($user) {
        $this->db->query("INSERT INTO user_profile(firstname, lastname, email, passwordhash, status) 
                                                VALUES(:firstname, :lastname, :email, :passwordhash, 'inactive')");
        $this->db->bind(":firstname", $user["firstname"]);
        $this->db->bind(":lastname", $user["lastname"]);
        $this->db->bind(":email", $user["email"]);
        $this->db->bind(":passwordhash", password_hash($user["password"], PASSWORD_DEFAULT));
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function getUserId() {
        $this->db->query("SELECT LAST_INSERT_ID()");
        return $this->db->rowCount();
    }

    public function getAddressByUserId($user) {
        $this->db->query("SELECT * FROM address AS a 
         INNER JOIN user_address AS u on a.address_id = u.address_id
         INNER JOIN user_profile on :user_id = u.user_id
         WHERE current_address = 1");
        $this->db->bind(":user_id", $user["user_id"]);
        return $this->db->single();
    }

    public function addNewAddress($address) {
        $this->db->query("INSERT INTO address(street_address_1, street_address_2, city, state, zip, current_address) 
                                                VALUES(:street_address_1, :street_address_2, :city, :state, :zip, :current_address)");
        $this->db->bind(":street_address_1", $address["street_address_1"]);
        $this->db->bind(":street_address_2", $address["street_address_2"]);
        $this->db->bind(":city", $address["city"]);
        $this->db->bind(":state", $address["state"]);
        $this->db->bind(":zip", $address["zip"]);
        $this->db->bind(":current_address", $address["current_address"]);
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function addUserAddress($address) {
        $this->db->query("INSERT INTO user_address(address_id, user_id) 
                                                VALUES(LAST_INSERT_ID(), :user_id)");
        $this->db->bind(":user_id", $address["user_id"]);

        return $this->db->execute(); // will return true or false if the database processed the query
    }
}