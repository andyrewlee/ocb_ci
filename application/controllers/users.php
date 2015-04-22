<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
  public function login()
  {
    // load the user model
    // check if email exists
    // check if passwords match
    // if it matches go to new post/posts
    $this->load->library("form_validation");
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[persons.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[confirm_password]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');
    $this->load->view('users/login');
  }

  public function user_new()
  {
    $this->load->view('users/user_new');
  }

  public function create()
  //creates user
  {
    $post=$this->input->post();
    $this->Post->create($post);
    $this->load->model('User');
    redirect('/');
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}
