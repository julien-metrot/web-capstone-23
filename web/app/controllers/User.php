<?php
class User extends Controller {
    public function __construct() {
        $this->userModel = $this->model("Users");
    }

    public function register() {
        if (isLoggedIn()) {
            redirect("/pages/home");
        }
        $data = [
            "title" => "Register an Account",
            // Include default values for form inputs
            "firstname" => "",
            "lastname" => "",
            "email" => "",
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
                                                && empty($data["email_error"]) && empty($data["password1_error"]) && empty($data["password2_error"])) {
                if ($this->userModel->register($data)) {
                    // will run if the user is added to the database
                    flash("register_success", "Welcome! Please login to continue.");
                    header("location: " . URLROOT . "/user/login");
                } else {
                    // will run if the user is not added to the database
                }
            }

        }
        $this->view("user/register", $data);
    }

    public function login() {
        if (isLoggedIn()) {
            redirect("/pages/home");
        }
        $data = [
            "title" => "Login",
            // Include default values for form inputs
            "email" => "",
            "password1" => ""
        ];
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["email"] = $_POST["email"];
            $data["password1"] = $_POST["password1"];
            $userFromDatabase = $this->userModel->findUserByEmail($data["email"]);
            if(!empty($userFromDatabase) && password_verify($data["password1"], $userFromDatabase->passwordhash)) {
                // The email and password matched
                $_SESSION["user_id"] = $userFromDatabase->user_id;
                $_SESSION["user_firstname"] = $userFromDatabase->firstname;
                $_SESSION["user_lastname"] = $userFromDatabase->lastname;
                $_SESSION["user_email"] = $userFromDatabase->email;
                $_SESSION["admin"] = $userFromDatabase->admin;
                flash("login-success", "Good " . getTimeOfDayMessage() . ", " . $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"] . "!");
                redirect("/page/home");
            } else {
                // One or both were incorrect
                flash("login-fail", "Email or password you entered is not correct", "alert alert-warning");
            }
        }
        $this->view("user/login", $data);
    }

    public function logout() {
        //        session_destroy();
        unset($_SESSION["user_id"]);
        unset($_SESSION["user_firstname"]);
        unset($_SESSION["user_lastname"]);
        unset($_SESSION["user_email"]);
        flash("logout-success", "You have been logged out. Have a nice day!");
        redirect("/user/login");
    }
}