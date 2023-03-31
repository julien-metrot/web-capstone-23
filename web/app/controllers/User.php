<?php

class User extends Controller {
    public function __construct() {
        $this->userModel = $this->model("Users");
    }

    public function register() {
        $data = [
            "title" => "Register an Account",
            // Include default values for form inputs
            "firstname" => "",
            "lastname" => "",
            "email" => "",
            "dateofbirth" => "",
            "password1" => "",
            "password2" => ""
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // The user submitted the registration form

            // Get and validate first name
            $data["firstname"] = $_POST["firstname"];
            if($data["firstname"] == "") {
                $data["firstname_error"] = "First name is required";
            }

            // Get and validate last name
            $data["lastname"] = $_POST["lastname"];
            if($data["lastname"] == "") {
                $data["lastname_error"] = "Last name is required";
            }

            // Get and validate password
            $data["email"] = $_POST["email"];
            if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL))  {
                $data["email_error"] = "Invalid email address format";
            } else {
                // if email is valid, check if it already exists in the database
                if ($this->userModel->findUserByEmail($data["email"])) {
                    $data["email_error"] = "That email address is already taken. Please login.";
                }
            }

            // Get and validate date of birth
            $data["dateofbirth"] = $_POST["dateofbirth"];
            if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $data["dateofbirth"])) {
                $data["dateofbirth_error"] = "Date of birth must be in [YYYY-MM-DD] format";
            }

            // Get and validate password
            $data["password1"] = $_POST["password1"];
            if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $data["password1"])) {
                $data["password1_error"] = "Your password must include a minimum eight characters, at least one uppercase letter, one lowercase letter and one number";
            }

            $data["password2"] = $_POST["password2"];
            if($data["password2"] == "") {
                $data["password2_error"] = "Password confirmation required";
            }
            if($data["password2"] != $data["password1"]) {
                $data["password2_error"] = "Passwords must match";
            }

            if (empty($data["firstname_error"]) && empty($data["lastname_error"])
                                                && empty($data["email_error"]) && empty($data["password1_error"])) {
                if ($this->userModel->register($data)) {
                    // will run if the user is added to the database
                    header("location: " . URLROOT . "/users/login");
                } else {
                    // will run if the user is not added to the database
                }
            }

        }
        $this->view("user/register", $data);
    }
    public function login() {
        $data = [
            "title" => "Login",
        ];
        $this->view("user/login", $data);
    }
    public function update() {

    }
    public function delete() {

    }
}