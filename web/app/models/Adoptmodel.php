<?php

class Adoptmodel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAnimal($id){
        $this->db->query("SELECT * FROM animal WHERE animal_id = :animal_id");
        $this->db->bind(":animal_id", $id);
        return $this->db->single();
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

    public function apply($apply) {
//        echo "<pre>" . print_r($apply, 1 ) . "</pre>";
//        die();
        $this->db->query("INSERT INTO application(employer_name, has_children, home_status, landlord_name, landlord_phone, current_pets, animal_id, user_id) VALUES(:employer_name, :has_children, :home_status, :landlord_name, :landlord_phone, :current_pets, :animal_id, :user_id)");
        $this->db->bind(":employer_name", $apply["employerName"]);
        $this->db->bind(":has_children", $apply["hasChildren"]);
        $this->db->bind(":home_status", $apply["homeStatus"]);
        $this->db->bind(":landlord_name", $apply["landlordName"]);
        $this->db->bind(":landlord_phone", $apply["landlordName"]);
        $this->db->bind(":current_pets", $apply["currentPets"]);
        $this->db->bind(":animal_id", $apply['animal_id']);
        $this->db->bind(":user_id", $_SESSION['user_id']);
        return $this->db->execute(); // will return true or false if the database processed the query
    }

    public function approve() {
        $this->db->query("UPDATE application
        SET application_status = 'Approved'
        WHERE application.user_id = user.user_id");
    }

    public function deny() {
        $this->db->query("UPDATE application
        SET application_status = 'Denied'
        WHERE application.user_id = user.user_id");
    }

    public function editApplication($data)
    {
//        echo "<pre>" . print_r($data, 1 ) . "</pre>";
//        die();
        $this->db->query("UPDATE application SET current_pets = :current_pets, has_children= :has_children, employer_name = :employer_name, home_status = :home_status, landlord_name = :landlord_name, landlord_phone = :landlord_phone WHERE application_id = :application_id");
        $this->db->bind(":application_id", $data["application_id"]);
        $this->db->bind(":current_pets", $data["currentPets"]);
        $this->db->bind(":has_children", $data["hasChildren"]);
        $this->db->bind(":employer_name", $data["employerName"]);
        $this->db->bind(":home_status", $data["homeStatus"]);
        $this->db->bind(":landlord_name", $data["landlordName"]);
        $this->db->bind(":landlord_phone", $data["landlordPhone"]);
        return $this->db->execute();
    }

    public function deleteApplication($application_id)
    {
//        echo "<pre>" . print_r($application_id, 1 ) . "</pre>";
//        die();
        $this->db->query("DELETE FROM application WHERE application_id = :application_id");
        $this->db->bind(":application_id", $application_id);
        return $this->db->execute();
    }

}
