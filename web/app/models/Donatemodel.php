<?php
class Donatemodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getDonationHistory() {
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

    public function getAllDonations() {
        $this->db->query(
            "SELECT u.user_id, u.firstname, u.lastname, d.amount, d.message, d.anonymous, d.donation_type, d.donation_date, d.donation_id
            FROM user_profile AS u
            INNER JOIN user_donations AS ud ON u.user_id = ud.user_id
            INNER JOIN donations AS d ON ud.donation_id = d.donation_id
            ORDER BY donation_date DESC"
        );
        return $this->db->resultSet();
    }

    public function getDonationById($donation_id) {
        $this->db->query(
            "SELECT u.user_id, u.firstname, u.lastname, u.email, d.amount, d.message, d.anonymous, d.donation_type, d.donation_date, 
                d.recurring, d.donation_id
            FROM user_profile AS u
            INNER JOIN user_donations AS ud ON u.user_id = ud.user_id
            INNER JOIN donations AS d ON ud.donation_id = d.donation_id
            WHERE ud.donation_id = :donation_id");
        $this->db->bind("donation_id", $donation_id);
        return $this->db->single();
    }

    public function addNewDonation($donation) {
        $this->db->query("INSERT INTO donations(donation_type, amount, anonymous, message, recurring) 
                                            values(:donation_type, :amount, :anonymous, :message, :recurring)");
        $this->db->bind(":donation_type", $donation["donation_type"]);
        $this->db->bind(":amount", $donation["amount"]);
        $this->db->bind(":anonymous", $donation["anonymous"]);
        $this->db->bind(":message", $donation["message"]);
        $this->db->bind(":recurring", $donation["recurring"]);

        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function addUserDonation($userDonation) {
        $this->db->query("INSERT INTO user_donations(donation_id, user_id) 
                                            values(LAST_INSERT_ID(), :user_id)");
        $this->db->bind(":user_id", $userDonation["user_id"], PDO::PARAM_INT);
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function updateDonation($donation) {
        $this->db->query("UPDATE donations SET donation_type = :donation_type, amount = :amount, recurring = :recurring, 
                     message = :message, anonymous = :anonymous WHERE donation_id = :donation_id");
        $this->db->bind(":donation_id", $donation["donation_id"]);
        $this->db->bind(":donation_type", $donation["donation_type"]);
        $this->db->bind(":amount", $donation["amount"]);
        $this->db->bind(":recurring", $donation["recurring"]);
        $this->db->bind(":message", $donation["message"]);
        $this->db->bind(":anonymous", $donation["anonymous"]);
        return $this->db->execute();
    }

    public function deleteDonation($id) {
        $this->db->query("DELETE FROM donations WHERE donation_id = :donation_id");
        $this->db->bind(":donation_id", $id );
        return $this->db->execute();
    }
}