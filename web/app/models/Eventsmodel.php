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
    public function getEventById($id){
//        die($id);
        $this->db->query("
        SELECT ev.event_id, ev.title, ev.date, ev.description, lo.name, lo.address
        FROM events AS ev INNER JOIN locations AS lo
        ON ev.location_id = lo.location_id
        WHERE ev.event_id = :event_id;
        ");
        $this->db->bind(":event_id", $id);
        return $this->db->single();
    }


    public function addEvent($data)
    {
        $this->db->query(
            "INSERT INTO locations (name, address)
            VALUES (:name, :address)");
        $this->db->bind(":name", $data["location_name"]);
        $this->db->bind(":address", $data["location_address"]);
        $this->db->execute();

        $this->db->query(
            "INSERT INTO events (title, description, date, location_id)
            VALUES (:title, :description, :date, LAST_INSERT_ID())");
        $this->db->bind(":title", $data["event_title"]);
        $this->db->bind(":description", $data["event_description"]);
        $this->db->bind(":date", $data["event_date"]);

        return $this->db->execute();
    }

    public function updateEvent($data){
        $this->db->query("UPDATE events SET event_id = :event_id, title = :title, description = :description, name = :name, address = :address, date = :date, LAST_INSERT_ID() WHERE event_id = :event_id");
        $this->db->bind(":event_id", $data["event_id"]);
        $this->db->bind(":title", $data["event_title"]);
        $this->db->bind(":date", $data["event_date"]);
        $this->db->bind(":description", $data["event_description"]);
        $this->db->bind(":name", $data["location_name"]);
        $this->db->bind(":address", $data["location_address"]);
        return $this->db->execute();
    }

    public function getsingleEvent($id)
    {
        $this->db->query("
    SELECT e.event_id, e.title, e.date, e.description, l.name, e.featured_image, l.address
    FROM events AS e INNER JOIN locations AS l
    ON e.location_id = l.location_id
    WHERE event_id = :event_id;
    ");
        $this->db->bind(":event_id", $id);
        return $this->db->resultSet();
    }


    public function deleteEvent($id) {
        $this->db->query("DELETE FROM events WHERE event_id = :event_id");
        $this->db->bind(":event_id", $id);
        return $this->db->execute();

    }


}