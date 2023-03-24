<?php

class Animalsmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllAnimals() {
        $this->db->query("
            SELECT *
            FROM animal AS a INNER JOIN gallery_images AS g
            WHERE a.animal_id = g.animal_id;
        ");
        return $this->db->resultSet();
    }

}
