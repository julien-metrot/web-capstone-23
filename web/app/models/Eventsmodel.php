<?php
class Eventsmodel {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllEvents(){
        $this->db->query("
    SELECT e.title, e.date, l.name, e.featured_image, l.address
    FROM events AS e INNER JOIN locations AS l
    WHERE e.location_id = l.location_id;
    ");
    return $this->db->resultSet();
    }

    public function addEvent($data) {


    }
}