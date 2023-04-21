<?php

class Animalsmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAnimals()
    {
        $this->db->query("
            SELECT *
            FROM animal AS a INNER JOIN gallery_images AS g
            WHERE a.animal_id = g.animal_id;
        ");
        return $this->db->resultSet();
    }

/*    public function getAnimal($animal_id)
    {
        $this->db->query("SELECT *
            FROM animal
            WHERE animal_id = :animal_id;
       ");
        $this->db->bind("animal_id", $animal_id);
        return $this->db->single();
    }*/

    public function addAnimal($data) {
        $this->db->query(
            "INSERT INTO animal (name, breed, type, gender, dateofbirth, status, description, special_needs, friendly)
            VALUES (:name, :breed, :type, :gender, :dateofbirth, :status, :description, :special_needs, :friendly)");
        $this->db->bind("name", $data["name"]);
        $this->db->bind("breed", $data["breed"]);
        $this->db->bind("type", $data["type"]);
        $this->db->bind("gender", $data["gender"]);
        $this->db->bind("dateofbirth", $data["dateofbirth"]);
        $this->db->bind("status", $data["status"]);
        $this->db->bind("description", $data["description"]);
        $this->db->bind("special_needs", $data["special_needs"]);
        $this->db->bind("friendly", $data["friendly"]);
        return $this->db->execute();
    }
}
