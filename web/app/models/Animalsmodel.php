<?php

class Animalsmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllAnimals() {
        $this->db->query("
            SELECT *
            FROM animal;
        ");
        return $this->db->resultSet();
    }
}
