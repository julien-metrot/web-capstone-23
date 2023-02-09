<?php

class Post {
    private $db; // this refers to a PHP data object (PDO) that talks to the database

    public function __construct() {
        $this->db = new Database();
    }
}