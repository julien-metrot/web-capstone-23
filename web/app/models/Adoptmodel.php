<?php

class Adoptmodel
{
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllApplications() {
        $this->db->query("
            SELECT u.firstname, u.lastname, a.animal_id, a.name, u.user_id, app.application_status, app.employer_name, app.has_children, app.home_status, app.landlord_name, app.landlord_phone, app.current_pets
            FROM user_profile AS u 
                INNER JOIN application AS app ON u.user_id = app.user_id
                INNER JOIN animal AS a ON app.animal_id = a.animal_id
            ORDER BY app.application_date desc
        ");

        return $this->db->resultSet();
    }
}
