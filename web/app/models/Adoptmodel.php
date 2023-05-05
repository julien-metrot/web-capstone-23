<?php

class Adoptmodel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllApplications() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, app.application_date, u.user_id, app.application_status, app.application_id
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

    public function getApplicantInfo($application_id) {
        $this->db->query("
            SELECT app.application_id, app.application_date, app.user_id, app.animal_id, app.application_status, app.employer_name, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets, app.has_children, u.firstname, u.lastname, app.animal_id, a.animal_id, a.name
            FROM application AS app
            INNER JOIN user_profile AS u ON u.user_id = app.user_id
            INNER JOIN animal AS a ON a.animal_id = app.animal_id
            WHERE application_id = :application_id;
        ");
        $this->db->bind("application_id", $application_id);
        return $this->db->single();
    }

    public function apply($data) {
        $this->db->query("INSERT INTO application(employer_name, has_children, home_status, landlord_name, landlord_phone, current_pets) VALUES(:employer_name, :has_children, :home_status, :landlord_name, :landlord_phone, :current_pets)");
        $this->db->bind(":employer_name", $data["employerName"]);
        $this->db->bind(":has_children", $data["hasChildren"]);
        $this->db->bind(":home_status", $data["homeStatus"]);
        $this->db->bind(":landlord_name", $data["landlordName"]);
        $this->db->bind(":landlord_phone", $data["landlordName"]);
        $this->db->bind(":current_pets", $data["currentPets"]);
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function approveApplication($application_id) {
        $this->db->query("UPDATE application SET application_status = 'Approved' WHERE application_id = :application_id");
        $this->db->bind(":application_id", $application_id );
        return $this->db->execute();
    }

    public function denyApplication($application_id) {
        $this->db->query("UPDATE application SET application_status = 'Denied' WHERE application_id = :application_id");
        $this->db->bind(":application_id", $application_id );
        return $this->db->execute();
    }

}
