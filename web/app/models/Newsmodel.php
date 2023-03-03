<?php
class Newsmodel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllPosts() {
        $this->db->query("
            SELECT u.firstname, u.lastname, b.title, b.date_posted, b.date_modified, b.featured_image, b.body
            FROM user_profile AS u INNER JOIN blog_post AS b
            WHERE u.user_id = b.user_id
            ORDER BY b.date_posted DESC;
        ");
        return $this->db->resultSet();
    }
}