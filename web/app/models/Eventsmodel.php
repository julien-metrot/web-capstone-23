<?php
class Eventsmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllEvents()
    {
        $this->db->query("
    SELECT e.event_id, e.title, e.date, l.name, e.featured_image, l.address
    FROM events AS e INNER JOIN locations AS l
    WHERE e.location_id = l.location_id;
    ");
        return $this->db->resultSet();
    }

    public function add($data)
    {
        $this->db->query(
            "INSERT INTO events (title, date, location_id, featured_image)
            VALUES (:title, :date, :location_id, :featured_image)");
        $this->db->bind("title", $data["event_title"]);
        $this->db->bind("description", $data["event_description"]);
        $this->db->bind("date", $data["event_date"]);
        $this->db->bind("address", $data["event-address"]);
        return $this->db->execute();
    }

    public function getsingleEvent($event_id)
    {
        $this->db->query("
    SELECT e.event_id, e.title, e.date, e.description, l.name, e.featured_image, l.address
    FROM events AS e INNER JOIN locations AS l
    ON e.location_id = l.location_id
    WHERE event_id = :event_id;
    ");
        $this->db->bind("event_id", $event_id);
        return $this->db->resultSet();
    }
}