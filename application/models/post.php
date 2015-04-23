<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model {
  public function all()
  {
    return $this->db->query("SELECT * FROM posts")->result_array();
  }

  public function find_by($id) {
    return $this->db->query("SELECT * FROM posts WHERE id = ?", array($id))->row_array();
  }
}
