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

    public function getAnimal($animal_id) {
        $this->db->query("SELECT animal.animal_id, name, breed, type, gender, dateofbirth, status, description, special_needs, friendly
            FROM animal
            INNER JOIN adoptions
            ON adoptions.animal_id = animal.animal_id; ");
        $this->db->bind("animal_id", $animal_id);
        return $this->db->single();
    }

}
