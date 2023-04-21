<?php
class Donate extends Controller {
    public function __construct() {
        $this->donateModel = $this->model("Donatemodel");
        $this->userModel = $this->model("Users");
    }

    public function history() {
        $list = $this->donateModel->getAllDonations();
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
            "error_msg" => "Something went wrong."
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
            //get and validate donation type
            $data["donation_type"] = $_POST["donation_type"];
            if($data["donation_type"] == "") {
                $data["error"] = true;
                $data["error_msg"] = "Invalid Data Type";
            }
            //get and validate donation amount
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

            //if the user isn't logged in, add them to the database
            if (!isLoggedIn()) {

                $data["user_id"] = $this->saveUserInfo($data);

            }

            //If the address is new/different from current, add it to the database
            if ($data["street_address_1"] != $_POST["address1"]) {

                $this->addNewUserAddress($data);
            }

            //this adds the donation, and outputs success message if successful
            if (!$data["error"] && $data["user_id"] != 0) {
                if ($this->donateModel->addNewDonation($data)) {
                    //will run if the donation is added to the database
                    if ($this->donateModel->addUserDonation($data)) {

                        //userDonation was added to the database
                        $data["result"] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your donation!
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button></div>';
                        flash("login-success", "Thank you for your donation!", "alert alert-success fade show");
                        redirect("/donate/history");
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

        $this->view("donate/home", $data);
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