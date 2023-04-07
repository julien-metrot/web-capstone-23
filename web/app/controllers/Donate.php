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
        $donation_type = "";
        $amount = "";
        $anonymous = 0;
        $message = "";
        $recurring = "One-time";
        //$myTest = "We never even went into the loop.";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $donation_type = filter_var($_POST["donation_type"]);
            $message = filter_var($_POST["message"],FILTER_SANITIZE_STRING);
            $recurring = filter_var($_POST["recurring"]);
            $anonymous = (!empty($_POST['anonymous'])) ? 1 : 0;

            if (empty($_POST["amount"]) && empty($_POST["custom_amount"])) {

//                $output = json_encode(array('type'=>'error', 'text' => '<p>Please select a donation amount.</p>'));
//                die($output);

            } elseif (!empty($_POST["amount"])) {
                $amount = ($_POST["amount"]);

            } else {
                $amount = filter_var($_POST["custom_amount"], FILTER_VALIDATE_FLOAT);
            }

            $myTest = $amount;

//            $donationAdded = $this->donateModel->addNewDonation($donation_type, $amount, $anonymous, $message, $recurring);
//            if($donationAdded > 0)
//            {
//                $output = json_encode(array('type'=>'message', 'text' => '<div class="alert alert-success" role="alert">
//		        Thank you for your Donation. We will contact you soon.</div>'));
//                die($output);
//            }
        }
        else {
            $myTest = "You are in the donate method, but POST is false.";
        }

        $donation = $this->donateModel->addNewDonation($donation_type, $amount, $anonymous, $message, $recurring);
        $data = [
            "title" => $myTest,
            "donation" => $donation
        ];
        $this->view("donate/donate", $data);
    }
}