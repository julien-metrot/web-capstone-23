<?php

class Members extends Controller
{
    public function __construct()
    {
        $this->membersModel = $this->model("Membersmodel");
    }

    public function info()
    {
        $members = $this->membersModel->getAllMembers();
        $data = [
            "title" => "Members Info",
            "members" => $members,
        ];
        $this->view("members/info", $data);
    }

    public function show($id)
    {
        $member = $this->membersModel->getMember($id);
        $data = [
            "title" => $member->job_title,
            "member" => $member
        ];
        $this->view("members/show", $data);
    }

    public function add()
    {
        if ($_SESSION["user_admin"] != 1) {
            redirect("/members/info");
            return;
        }
        $data = [
            "title" => "Members Info",
            "firstname" => "",
            "lastname" => "",
            "email" => "",
            "password1" => "",
            "password2" => "",
            "dateofbirth" => "",
            "job_title" => "",
            "job_description" => "",
            "job_qualification" => "",
            "linkedin" => "",
            "github" => "",
            "firstname_error" => "",
            "lastname_error" => "",
            "email_error" => "",
            "dateofbirth_error" => "",
            "job_title_error" => "",
            "job_description_error" => "",
            "job_qualification_error" => "",
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["firstname"] = sanitize($_POST["firstname"]);
            $data["lastname"] = sanitize($_POST["lastname"]);
            $data["dateofbirth"] = sanitize($_POST["dateofbirth"]);
            $data["job_title"] = sanitize($_POST["job_title"]);
            $data["job_description"] = sanitize($_POST["job_description"]);
            $data["job_qualification"] = sanitize($_POST["job_qualification"]);

            if (empty($data["github"])) {
                $data["github"] = null;
            } else {
                $data["github"] = sanitize($_POST["github"]);
            }

            if (empty($data["linkedin"])) {
                $data["linkedin"] = null;
            } else {
                $data["linkedin"] = sanitize($_POST["linkedin"]);
            }

            if (empty($data["firstname"])) {
                $data["firstname_error"] = "First name is required";
            }

            if (empty($data["firstname"])) {
                $data["firstname_error"] = "First name is required";
            }
            if (empty($data["lastname"])) {
                $data["lastname_error"] = "Last Name is required";
            }
            $data["email"] = $_POST["email"];
            if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $data["email_error"] = "Invalid email address format";
            } else {
                // if email is valid, check if it already exists in the database
                if ($this->membersModel->findUserByEmail($data["email"])) {
                    $data["email_error"] = "That email address is already taken. Please login.";
                }
            }

            // Get and validate password
            $data["password1"] = $_POST["password1"];
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $data["password1"])) {
                $data["password1_error"] = "Your password must include a minimum eight characters, at least one uppercase letter, one lowercase letter and one number";
            }

            $data["password2"] = $_POST["password2"];
            if($data["password2"] == "") {
                $data["password2_error"] = "Password confirmation required";
            }
            if($data["password2"] != $data["password1"]) {
                $data["password2_error"] = "Passwords must match";
            }

            if (empty($data["dateofbirth"])) {
                $data["dateofbirth_error"] = "Date of Birth is required";
            }
            if (empty($data["job_title"])) {
                $data["job_title_error"] = "Job title is required";
            }
            if (empty($data["job_description"])) {
                $data["job_description_error"] = "Job description is required";
            }
            if (empty($data["job_qualification"])) {
                $data["job_qualification_error"] = "Job qualification is required";
            }

//            echo "<pre> ". print_r($data,1) ." </pre>";
//            die();
            if (empty($data["firstname_error"]) && empty($data["lastname_error"]) && empty($data["email_error"]) && empty($data["password1_error"]) && empty($data["password2_error"])
                && empty($data["dateofbirth_error"]) && empty($data["job_title_error"]) && empty($data["job_description_error"])
                && empty($data["job_qualification_error"])) {
                try {
                    if ($this->membersModel->addMember($data)) {
                        // data successfully added
                        flash("member_message", "Your member was created");
                        redirect("/members/info");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("member_message", "Your member could not be created. Try again later.", "alert alert-danger");
                }
            }
        }
        $this->view("members/add", $data);
    }

    public function edit($id)
    {
        $member = $this->membersModel->getMember($id);
        if ($_SESSION["user_admin"] != 1) {
            redirect("/members/info");
            return;
        }
        $data = [
            "title" => "Edit a member",
            "user_id" => $member->user_id,
            "firstname" => $member->firstname,
            "lastname" => $member->lastname,
            "email" => $member->email,
            "dateofbirth" => $member->dateofbirth,
            "job_title" => $member->job_title,
            "job_qualification" => $member->job_qualification,
            "job_description" => $member->job_description,
            "firstname_error" => "",
            "lastname_error" => "",
            "email_error" => "",
            "dateofbirth_error" => "",
            "job_title_error" => "",
            "job_description_error" => "",
            "job_qualification_error" => ""
        ];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data["firstname"] = sanitize($_POST["firstname"]);
            $data["lastname"] = sanitize($_POST["lastname"]);
            $data["job_title"] = sanitize($_POST["job_title"]);
            $data["job_qualification"] = sanitize($_POST["job_qualification"]);
            $data["job_description"] = sanitize($_POST["job_description"]);

            if (empty($data["firstname"])) {
                $data["firstname_error"] = "First name is required";
            }
            if (empty($data["lastname"])) {
                $data["lastname_error"] = "Last name is required";
            }
            if (empty($data["job_title"])) {
                $data["job_title_error"] = "Job title is required";
            }
            if (empty($data["job_qualification"])) {
                $data["job_qualification_error"] = "Job qualification is required";
            }
            if (empty($data["job_description"])) {
                $data["job_description_error"] = "Job description is required";
            }
            if (empty($data["dateofbirth"])) {
                $data["dateofbirth_error"] = "Date of Birth is required";
            }

            $data["email"] = $_POST["email"];
            if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
                $data["email_error"] = "Invalid email address format";
            }

            if (empty($data["firstname_error"]) && empty($data["lastname_error"]) && empty($data["email_error"])
                && empty($data["dateofbirth_error"]) && empty($data["job_title_error"]) && empty($data["job_description_error"])
                && empty($data["job_qualification_error"])) {
                try {
                    if ($this->membersModel->updateMember($data)) {
                        // data successfully added
                        flash("member_message", "Your member was updated");
                        redirect("/members/info");
                        return;
                    }
                } catch (PDOException $e) {
                    flash("member_message", "Your member could not be updated. Try again later.", "alert alert-danger");

                }
            }
        }
        $this->view("members/edit", $data);
    }

    public function delete($id) {
        $member = $this->membersModel->getMember($id);
        if ($_SESSION["user_admin"] != 1) {
            redirect("/members/info");
            return;
        }
        try {
            if ($this->membersModel->deleteMember($id)) {
                flash("member_message", "Your member was deleted");
                redirect("/members/info");
            }
        } catch (PDOException $e) {
            flash("member_message", "Your member could not be deleted. Try again later.", "alert alert-danger");
            $this->show($id);
        }
    }
}