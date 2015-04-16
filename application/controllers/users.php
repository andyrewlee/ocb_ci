<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
  public function login()
  {
    // load the user model
    // check if email exists
    // check if passwords match
    // if it matches go to new post/posts
    $this->load->view('users/login');
  }

  public function user_new()
  {
    $this->load->view('users/user_new');
  }

  public function create()
  {
  }

  public function logout()
  {
  }
}
