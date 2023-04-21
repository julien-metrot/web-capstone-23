<?php
class Donate extends Controller {
    public function __construct() {
        $this->donateModel = $this->model("Donatemodel");
    }

    public function history() {
        $list = $this->donateModel->getAllDonations();
        $data = [
            "title" => "Donations",
            "list" => $list
        ];
        $this->view("donate/history", $data);
    }

    public function donate() {

        $data = [
            "title" => "Make a Donation",
            // Include default values for form inputs
            "donation_type" => "",
            "amount" => "",
            "anonymous" => "",
            "message" => "",
            "recurring" => "",
            "result" => ""
        ];

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //get and validate donation type
            $data["donation_type"] = $_POST["donation_type"];
            if($data["donation_type"] == "") {
                $data["donation_type_error"] = "Donation Type is required";
            }

            //get and validate donation amount
            if (empty($_POST["amount"]) && empty($_POST["custom_amount"])) {
                $data["amount_error"] = "Please select a donation amount.";

            } elseif (!empty($_POST["amount"])) {
                $data["amount"] = $_POST["amount"];

            } else {
                $data["amount"] = $_POST["custom_amount"];
                if(!filter_var($data["amount"], FILTER_VALIDATE_FLOAT))  {
                    $data["custom_amount_error"] = "Invalid money format.";
                }
            }

            //get and validate anonymous
            $data["anonymous"] = (!empty($_POST['anonymous'])) ? 1 : 0;
            if($data["anonymous"] == "") {
                $data["anonymous_error"] = "Something went wrong.";
            }

            //get and validate recurring
            $data["recurring"] = $_POST["recurring"];
            if($data["recurring"] == "") {
                $data["recurring_error"] = "Please select an option";
            }

            //get and validate message
            $data["message"] = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
            if (!empty($data["message"])) {
                if(!filter_var($data["message"], FILTER_SANITIZE_STRING)) {
                    $data["message_error"] = "Your message is too long.";
                }
            }


            if (empty($data["data_type_error"]) && empty($data["amount_error"])
                && empty($data["anonymous_error"]) && empty($data["recurring_error"]) && empty($data["message_error"])) {
                if ($this->donateModel->addNewDonation($data)) {
                    // will run if the user is added to the database
                    //header("location: " . URLROOT . "/donate/donate");
                    $data["result"] ='<div class="alert alert-success alert-dismissible fade show" role="alert">Thank you for your donation!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button></div>';
                    header("location: " . URLROOT . "/donate/donate");
                    //flash("register_success", "Thank you for your donation.");

                } else {
                    // will run if the user is not added to the database
                    $data["result"] ='<div class="alert alert-danger">Sorry there was an error receiving your donation. Please try again later.</div>';
                }
            }

        }

        $this->view("donate/donate", $data);
    }
}