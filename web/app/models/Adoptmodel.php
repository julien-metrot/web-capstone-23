<?php

class Adoptmodel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllApplications() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, app.application_date, u.user_id, app.application_status
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            ORDER BY app.application_date desc
        ");

        return $this->db->resultSet();
    }

    public function getAllPending() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, u.user_id, app.application_status, app.employer_name, app.has_children, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            WHERE app.application_status = 'Pending'
            ORDER BY app.application_date desc
        ");

        return $this->db->resultSet();
    }

    public function getAllApproved() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, u.user_id, app.application_status, app.employer_name, app.has_children, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            WHERE app.application_status = 'Approved'
            ORDER BY app.application_date desc
        ");

        return $this->db->resultSet();
    }

    public function getAllDenied() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, u.user_id, app.application_status, app.employer_name, app.has_children, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            WHERE app.application_status = 'Denied'
            ORDER BY app.application_date desc
        ");

        return $this->db->resultSet();
    }

    public function getApplicantInfo() {
        $this->db->query("
           SELECT u.firstname, u.lastname, a.animal_id, a.name, u.user_id, app.application_status, app.employer_name, app.has_children, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            WHERE u.user_id = '?'
        ");
    }

    public function apply($apply) {
        $this->db->query("INSERT INTO application(employer_name, has_children, home_status, landlord_name, landlord_phone, current_pets) VALUES(:employer_name, :has_children, :home_status, :landlord_name, :landlord_phone, :current_pets)");
        $this->db->bind(":employer_name", $apply["employerName"]);
        $this->db->bind(":has_children", $apply["hasChildren"]);
        $this->db->bind(":home_status", $apply["homeStatus"]);
        $this->db->bind(":landlord_name", $apply["landlordName"]);
        $this->db->bind(":landlord_phone", $apply["landlordName"]);
        $this->db->bind(":current_pets", $apply["currentPets"]);
        return $this->db->execute(); // will return true or false if the database processed the query
    }
}
