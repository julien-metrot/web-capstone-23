<?php
class Donate extends Controller {
    public function __construct() {
        $this->donateModel = $this->model("Donatemodel");
        $this->userModel = $this->model("Users");
    }

    public function history() {
        $list = $this->donateModel->getDonationHistory();
        $data = [
            "title" => "Donations",
            "list" => $list
        ];
        $this->view("donate/history", $data);
    }

    public function home() {

        $data = [
            "title" => "Make a Donation",
            // Include default values for form inputs
            "donation_type" => "", "amount" => "", "anonymous" => "", "message" => "", "recurring" => "",
            "user_id" => 0, "firstname" => "", "lastname" => "", "email" => "", "phoneNumber" => "", "password" => "Password123",
            "street_address_1" => "", "street_address_2" => "", "state" => "", "city" => "", "zip" => "", "current_address" => 0,
            "result" => "", "error" => false, "error_msg" => "Something went wrong."
        ];


        if (isLoggedIn()) {
            //pre-populate values in the form for logged in users
            $data["firstname"] = $_SESSION["user_firstname"];
            $data["lastname"] = $_SESSION["user_lastname"];
            $data["email"] = $_SESSION["user_email"];
            $data["user_id"] = $_SESSION["user_id"];

            //get address by user_id
            $address = $this->userModel->getAddressByUserId($data);
            if(!empty($address)) {
                // The email and password matched
                $data["address_id"] = $address->address_id;
                $data["street_address_1"] = $address->street_address_1;
                $data["street_address_2"] = $address->street_address_2;
                $data["city"] = $address->city;
                $data["state"] = $address->state;
                $data["zip"] = $address->zip;
                $data["current_address"] = $address->current_address;

            }
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //if the user isn't logged in, add them to the database
            if (!isLoggedIn()) {
                $data["user_id"] = $this->saveUserInfo($data);
            }

            //If the address is new/different from current, add it to the database
            if ($data["street_address_1"] != $_POST["address1"]) {
                $this->addNewUserAddress($data);
            }

            //Add the donation and user donation
            if ($this->addDonation($data)) {
                flash("login-success", "Thank you for your donation!", "alert alert-success fade show");
                redirect("/donate/history");
            } else {
                $data["error_msg"] = "Something went wrong. Please try again.";
                $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
            }
        }

        $this->view("donate/home", $data);
    }

    public function addDonation($data) {

        //get and validate donation type
        $data["donation_type"] = $_POST["donation_type"];
        if($data["donation_type"] == "") {
            $data["error"] = true;
            $data["error_msg"] = "Invalid Data Type";
        }
        //get and validate donation amount
        //only if donation type is Money
        if ($data["donation_type"] == "Money") {
            if (empty($_POST["amount"]) && empty($_POST["custom_amount"])) {
                $data["error"] = true;
                $data["error_msg"] = "Please select an amount.";

            } elseif (!empty($_POST["amount"])) {
                $data["amount"] = $_POST["amount"];

            } else {
                $data["amount"] = $_POST["custom_amount"];
                if(!filter_var($data["amount"], FILTER_VALIDATE_FLOAT))  {
                    $data["error"] = true;
                    $data["error_msg"] = "Invalid Amount";
                }
            }
        } else {
            $data["amount"] = null;
        }

        //get and validate anonymous
        $data["anonymous"] = (!empty($_POST['anonymous'])) ? 1 : 0;
        if($data["anonymous"] == "") {
            $data["error"] = true;
        }
        //get and validate recurring
        $data["recurring"] = $_POST["recurring"];
        if($data["recurring"] == "") {
            $data["error"] = true;
        }
        //get and validate message
        $data["message"] = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
        if (!empty($data["message"])) {
            if(!filter_var($data["message"], FILTER_SANITIZE_STRING)) {
                $data["error"] = true;
                $data["error_msg"] = "Invalid characters";
            }
        }

        //this adds the donation, and outputs success message if successful
        if (!$data["error"] && $data["user_id"] != 0) {
            if ($this->donateModel->addNewDonation($data)) {
                //will run if the donation is added to the database
                if ($this->donateModel->addUserDonation($data)) {
                    //userDonation was added to the database
                    return true;
                } else {
                    //user donation was not added
                    $data["error_msg"] = "Something went wrong. Please try again.";
                    $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
                }
            } else {
                //donation was not added to the db
                $data["error_msg"] = "Something went wrong. Please try again.";
                $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
            }
        }
        else {
            $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
        }
    }

    public function all() {
        if($_SESSION["user_admin"] != 1 || !isLoggedIn()) {
            redirect("/home");
            return;
        }

        $list = $this->donateModel->getAllDonations();
        $data = [
            "title" => "Donations",
            "list" => $list
        ];
        $this->view("donate/all", $data);
    }

    public function add() {

        if($_SESSION["user_admin"] != 1 || !isLoggedIn()) {
            redirect("/home");
            return;
        }

        $data = [
            "title" => "Add a Donation",
            // Include default values for form inputs
            "donation_id" => 0,
            "donation_type" => "",
            "amount" => "",
            "anonymous" => "",
            "message" => "",
            "recurring" => "",
            "result" => "",
            "firstname" => "",
            "lastname" => "",
            "email" => "",
            "phoneNumber" => "",
            "password" => "Password123",
            "user_id" => 0,
            "street_address_1" => "",
            "street_address_2" => "",
            "state" => "",
            "city" => "",
            "zip" => "",
            "current_address" => 0,
            "error" => false,
            "error_msg" => "Something went wrong.",
            "edit" => false
        ];

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            //add the user to the database
            $data["user_id"] = $this->saveUserInfo($data);

            //add the address to the database
            $this->addNewUserAddress($data);

            if ($this->addDonation($data)) {

                flash("login-success", "The donation was successfully added.", "alert alert-success fade show");
                redirect("/donate/all");

            } else {

                $data["error_msg"] = "Something went wrong. Please try again.";
                $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';

            }
        }

        $this->view("donate/add", $data);
    }

    public function edit($id) {

        $donation = $this->donateModel->getDonationById($id);
        if($_SESSION["user_admin"] != 1 || !isLoggedIn()) {
            redirect("/home");
            return;
        }
        $data = [
            "title" => "Edit Donation",
            // Include default values for form inputs
            "donation_id" => $donation->donation_id,
            "donation_type" => $donation->donation_type,
            "amount" => $donation->amount,
            "anonymous" => $donation->anonymous,
            "message" => $donation->message,
            "recurring" => $donation->recurring,
            "firstname" => $donation->firstname,
            "lastname" => $donation->lastname,
            "email" => $donation->email,
            "phoneNumber" => "",
            "user_id" => $donation->user_id,
            "street_address_1" => "",
            "street_address_2" => "",
            "state" => "",
            "city" => "",
            "zip" => "",
            "current_address" => 0,
            "result" => "",
            "error" => false,
            "error_msg" => "Something went wrong.",
            "edit" => true
        ];

        //get address by user_id
        $address = $this->userModel->getAddressByUserId($data);
        if(!empty($address)) {
            // The email and password matched
            $data["address_id"] = $address->address_id;
            $data["street_address_1"] = $address->street_address_1;
            $data["street_address_2"] = $address->street_address_2;
            $data["city"] = $address->city;
            $data["state"] = $address->state;
            $data["zip"] = $address->zip;
            $data["current_address"] = $address->current_address;

        }

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            //get and validate donation type
            $data["donation_type"] = $_POST["donation_type"];
            if($data["donation_type"] == "") {
                $data["error"] = true;
                $data["error_msg"] = "Invalid Data Type";
            }
            //get and validate donation amount
            //only if donation type is Money
            if ($data["donation_type"] == "Money") {
                if (empty($_POST["amount"]) && empty($_POST["custom_amount"])) {
                    $data["error"] = true;
                    $data["error_msg"] = "Please select an amount.";

                } elseif (!empty($_POST["amount"])) {
                    $data["amount"] = $_POST["amount"];

                } else {
                    $data["amount"] = $_POST["custom_amount"];
                    if(!filter_var($data["amount"], FILTER_VALIDATE_FLOAT))  {
                        $data["error"] = true;
                        $data["error_msg"] = "Invalid Amount";
                    }
                }
            } else {
                $data["amount"] = null;
            }

            //get and validate anonymous
            $data["anonymous"] = (!empty($_POST['anonymous'])) ? 1 : 0;
            if($data["anonymous"] == "") {
                $data["error"] = true;
            }
            //get and validate recurring
            $data["recurring"] = $_POST["recurring"];
            if($data["recurring"] == "") {
                $data["error"] = true;
            }
            //get and validate message
            $data["message"] = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
            if (!empty($data["message"])) {
                if(!filter_var($data["message"], FILTER_SANITIZE_STRING)) {
                    $data["error"] = true;
                    $data["error_msg"] = "Invalid characters";
                }
            }
            //get and validate donation id
            $data["donation_id"] = $_POST["donation_id"];
            if($data["donation_id"] == "") {
                $data["error"] = true;
            }

            //this adds the donation, and outputs success message if successful
            if (!$data["error"]) {

                if ($this->donateModel->updateDonation($data)) {
                    //will run if the donation is added to the database
                    flash("login-success", "The donation has been updated.", "alert alert-success fade show");
                    redirect("/donate/all");
                } else {
                    //donation was not updated to the db
                    $data["error_msg"] = "Something went wrong. Please try again.";
                    $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
                }
            }
            else {
                $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
            }
        }
        $this->view("donate/add", $data);
    }

    public function delete($id) {

        if($_SESSION["user_admin"] != 1 || !isLoggedIn()) {
            redirect("/home");
            return;
        }

        try {
            if ($this->donateModel->deleteDonation($id)) {

                flash("login-success", "The donation was deleted.", "alert alert-success fade show");
                redirect("/donate/all");
            }
        } catch(PDOException $e) {

            flash("post_message", "Your post could not be deleted. Try again later.", "alert alert-danger");
            $data["error_msg"] = "Something went wrong. Please try again.";
            $data["result"] = '<div class="alert alert-danger" role="alert">' . $data["error_msg"] . '</div>';
        }
    }



    public function saveUserInfo($data) {

        //get and validate first name
        $data["firstname"] = $_POST["firstname"];
        if($data["firstname"] == "") {
            $data["error"] = true;
        }
        //get and validate last name
        $data["lastname"] = $_POST["lastname"];
        if($data["lastname"] == "") {
            $data["error"] = true;
        }
        //get and validate email
        $data["email"] = $_POST["email"];
        if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL))  {
            $data["error"] = true;
        }

        //if there are no errors, proceed to adding to database
        if (!$data["error"]) {
            if ($this->userModel->holdUserInfo($data)) {

                $data["user_id"] = $this->userModel->getUserId();
                //var_dump($data["user_id"]);
                return $data["user_id"];

            } else {

                $data["user_id_error"] = "You failed";
                return $data["error"] = true;
            }
        }

    }

    public function addNewUserAddress($data) {

        //if this is their first address, set it as current.
        if (empty($data["street_address_1"])) {
            $data["current_address"] = 1;
        } else {
            $data["current_address"] = 0;
        }

        //get and validate street address 1
        $data["street_address_1"] = $_POST["address1"];
        if($data["street_address_1"] == "") {
            $data["error"] = true;
        }
        //get and validate street address 2
        $data["street_address_2"] = $_POST["address2"];

        //get and validate state
        $data["state"] = $_POST["state"];
        if($data["state"] == "") {
            $data["error"] = true;
        }
        //get and validate city
        $data["city"] = $_POST["city"];
        if($data["city"] == "") {
            $data["error"] = true;
        }
        //get and validate zip
        $data["zip"] = $_POST["zip"];
        if(!preg_match('/^\d{5}$/', $data["zip"])) {
            $data["error"] = true;
        }

        if(!$data["error"]) {
            if ($this->userModel->addNewAddress($data)) {

                $this->userModel->addUserAddress($data);
            }
        }
    }


}