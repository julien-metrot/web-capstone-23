<?php

class Adopt extends Controller
{
    public function __construct()
    {
        $this->adoptModel = $this->model("Adoptmodel");
    }

    public function applications()
    {
        $applications = $this->adoptModel->getAllApplications();
        $data = [
            "title" => "All Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function application_single($application_id)
    {
        $application = $this->adoptModel->getApplicantInfo($application_id);
        $data = [
            "title" => "Single Application",
            "application" => $application,
        ];
        $this->view("adopt/application_single", $data);
    }

    public function showPending()
    {
        $applications = $this->adoptModel->getAllPending();
        $data = [
            "title" => "Pending Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showApproved()
    {
        $applications = $this->adoptModel->getAllApproved();
        $data = [
            "title" => "Approved Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function showDenied()
    {
        $applications = $this->adoptModel->getAllDenied();
        $data = [
            "title" => "Denied Applications",
            "applications" => $applications
        ];
        $this->view("adopt/applications", $data);
    }

    public function apply($id)
    {
    $animal = $this->adoptModel->getAnimal($id);
        $data = [
            "title" => "Apply for Adoption",
            // Include default values for form inputs
            "fullName" => "",
            "email" => "",
            "currentPets" => "",
            "hasChildren" => "",
            "employerName" => "",
            "homeStatus" => "",
            "landlordName" => "",
            "landlordPhone" => "",
            "referenceName" => "",
            "referencePhone" => "",
            "referenceRelationship" => "",
            "animalInterested" => $animal->name,
            "animal_id" => $id
        ];

        if (isLoggedIn()) {
            //pre-populate values in the form for logged-in users
            $data["fullName"] = $_SESSION["user_firstname"] . " " . $_SESSION["user_lastname"];
            $data["email"] = $_SESSION["user_email"];
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // The user submitted the application form

            // Get and validate first name
            $data["fullName"] = $_POST["fullName"];
            if ($data["fullName"] == "") {
                $data["fullName_error"] = "Your name is required";
            }


            // Get and validate email
            $data["email"] = $_POST["email"];
            if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $data["email_error"] = "Invalid email address format";
            }

//             Get and validate currentPets checkbox
            $data["currentPets"] = $_POST["currentPets"];
            if ($data["currentPets"] != "0" && $data["currentPets"] != "1") {
                $data["currentPets_error"] = "Must select an option";
            }

//             Get and validate hasChildren checkbox
            $data["hasChildren"] = $_POST["hasChildren"];
            if ($data["hasChildren"] == "") {
                $data["hasChildren_error"] = "Must select an option";
            } else if ($data["hasChildren"] == "Yes") {
                return 1;
            } else if ($data["hasChildren"] == "No") {
                return 0;
            }

            // Get and validate employer name
            $data["employerName"] = $_POST["employerName"];
            // not requiring employer

//             Get and validate homeStatus checkbox
            $data["homeStatus"] = $_POST["homeStatus"];
            if ($data["homeStatus"] != "Rent" && $data["homeStatus"] != "Own") {
                $data["homeStatus_error"] = "Must select a home status option";
            } else if ($data["homeStatus"] == "Rent") {
                // Get and validate landlord name
                $data["landlordName"] = $_POST["landlordName"];
                if ($data["landlordName"] == "") {
                    $data["landlordName_error"] = "Must enter a landlord";
                }
                // Get and validate landlord phone
                $data["landlordPhone"] = $_POST["landlordPhone"];
                if (!filter_var($data["landlordPhone"], FILTER_SANITIZE_NUMBER_INT)) {
                    $data["landlordPhone_error"] = "Must enter a landlord phone number";
                }
            }

            // Get and validate referenceName
            $data["referenceName"] = $_POST["referenceName"];
            if ($data["referenceName"] == "") {
                $data["referenceName_error"] = "Must select add one reference";
            }

            // Get and validate referencePhone
            $data["referencePhone"] = $_POST["referencePhone"];
            if (!filter_var($data["referencePhone"], FILTER_SANITIZE_NUMBER_INT)) {
                $data["referencePhone_error"] = "Must enter a reference phone number";
            }

            // Get and validate referenceRelationship
            $data["referenceRelationship"] = $_POST["referenceRelationship"];
            if ($data["referenceRelationship"] == "") {
                $data["referenceRelationship_error"] = "Must select add one reference relationship";
            }

//            echo "<pre>" . print_r($data, 1 ) . "</pre>";
//            die();

            if (empty($data["fullName_error"]) && empty($data["email_error"]) && empty($data["currentPets_error"]) && empty($data["hasChildren_error"]) && empty($data["landlordName_error"]) && empty($data["landlordPhone_error"]) && empty($data["referenceName_error"]) && empty($data["referencePhone_error"]) && empty($data["referenceRelationship_error"])) {
                if ($this->adoptModel->apply($data)) {
                    // Will run if the application is added to the database
                    flash("application_success", "Thank you for submitting your application! We will be in touch shortly");
                    redirect("/page/home");

                } else {
                    // Will run if the user is NOT added to the database
                    flash("application_fail", "Your application could not be submitted. Please try again later");
                }
            } else {

            }
        }
        $this->view("adopt/apply", $data);
    }


    public function edit($application_id) {
        $application = $this->adoptModel->getApplicantInfo($application_id);
        if(!isLoggedIn()) {
            redirect("/page/home");
            return;
        }
        $data = [
            "title" => "Edit Item",
            // Include default values for form inputs
            "fullName" => $_SESSION['user_firstname'] . " " . $_SESSION['user_lastname'],
            "email" => $_SESSION['user_email'],
            "currentPets" => $application->current_pets,
            "hasChildren" => $application->has_children,
            "employerName" => $application->employer_name,
            "homeStatus" => $application->home_status,
            "landlordName" => $application->landlord_name,
            "landlordPhone" => $application->landlord_phone,
            "application_id"=> $application->application_id
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // The user submitted the edit form

//             Get and validate currentPets checkbox
            $data["currentPets"] = $_POST["currentPets"];
            if ($data["currentPets"] != "0" && $data["currentPets"] != "1") {
                $data["currentPets_error"] = "Must select an option";
            }


//             Get and validate hasChildren checkbox
            $data["hasChildren"] = $_POST["hasChildren"];
            if ($data["hasChildren"] == "") {
                $data["hasChildren_error"] = "Must select an option";
            } else if ($data["hasChildren"] == "Yes") {
                return 1;
            } else if($data["hasChildren"] == "No") {
                return 0;
            }

            // Get and validate employer name
            $data["employerName"] = $_POST["employerName"];
            // not requiring employer

//             Get and validate homeStatus checkbox
            $data["homeStatus"] = $_POST["homeStatus"];
            if ($data["homeStatus"] != "Rent" && $data["homeStatus"] != "Own") {
                $data["homeStatus_error"] = "Must select a home status option";
            } else if ($data["homeStatus"] == "Rent") {
                // Get and validate landlord name
                $data["landlordName"] = $_POST["landlordName"];
                if ($data["landlordName"] == "") {
                    $data["landlordName_error"] = "Must enter a landlord";
                }
                // Get and validate landlord phone
                $data["landlordPhone"] = $_POST["landlordPhone"];
                if (!filter_var($data["landlordPhone"], FILTER_SANITIZE_NUMBER_INT)) {
                    $data["landlordPhone_error"] = "Must enter a landlord phone number";
                }
            }


            if (empty($data["currentPets_error"]) && empty($data["hasChildren_error"]) && empty($data["landlordName_error"]) && empty($data["landlordPhone_error"]) && empty($data["homeStatus_error"])) {
                if ($this->adoptModel->editApplication($data)) {
                    // Will run if the application is added to the database
                    flash("edit_message", "Your application was updated.");
                    redirect("/adopt/applications");
                    return;
                } else {
                    // Will run if the user is NOT added to the database
                    flash("edit_message", "Your application could not be edited. Try again later.");
                }
            }
        }
        $this->view("adopt/edit", $data);
    }

    public function delete($application_id) {
//        if(!isLoggedIn()) {
//            redirect("/page/home");
//            return;
//        }
        try {
            if ($this->adoptModel->deleteApplication($application_id)) {
                flash("application_message", "Your item was deleted");
                redirect("/adopt/applications");
            }
        } catch (PDOException $e) {
            flash("application_message", "Your item could not be deleted. Try again later.");
        }
    }

}
