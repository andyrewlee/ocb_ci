<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
  public function get_user_by_email($email) {
    return $this->db->query("SELECT * FROM users WHERE email = ?", array($email))->row_array();
  }

  public function register($user) {
    $query = "INSERT INTO users (level, email, encrypted_password, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";

    $values = array(1, $user['email'], $user['password']);

    return $this->db->query($query, $values);
  }
}
