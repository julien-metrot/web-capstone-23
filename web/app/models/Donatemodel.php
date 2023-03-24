<?php
class Donatemodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllDonations() {
        $this->db->query(
            "SELECT u.firstname, u.lastname, d.amount, d.message, d.anonymous, d.donation_type, d.donation_date
            FROM user_profile AS u
            INNER JOIN user_donations AS ud ON u.user_id = ud.user_id
            INNER JOIN donations AS d ON ud.donation_id = d.donation_id
            ORDER BY donation_date DESC
            LIMIT 10"
        );
        return $this->db->resultSet();

    }
}