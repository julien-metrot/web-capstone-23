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

            "INSERT INTO events (title, date, description)
            VALUES (:title, :date, :description)");

        $this->db->query(
            "INSERT INTO locations (name, address)
            VALUES (:name, :address)");

        $this->db->bind("title", $data["event_title"]);
        $this->db->bind("description", $data["event_description"]);
        $this->db->bind("date", $data["event_date"]);
        return $this->db->execute();
    }

    public function updateEvent($data){
        $this->db->query("UPDATE events SET event_title = :event_title, menu_description = :menu_description, menu_price = :menu_price  WHERE menu_item_name = :menu_item_name");
        $this->db->bind("title", $data["event_title"]);
        $this->db->bind("description", $data["event_description"]);
        $this->db->bind("date", $data["event_date"]);
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
        $this->db->bind("event_id", $id);
        return $this->db->resultSet();
    }


    public function deleteEvent($event_id) {
        $this->db->query("DELETE FROM events WHERE event_id = :event_id");
        $this->db->bind(":event_id", $event_id);
        return $this->db->execute();

    }


}