<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
  public function index() {
    echo "hello";
  }

  public function login_page()
  {
    $this->load->view('users/login');
  }

  public function login()
  {
    $this->load->model('User');
    $post = $this->input->post();

    $email = $this->input->post('email');
    $password =$this->input->post('password');

    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email' , 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    $user = $this->User->get_user_by_email($email);

    if($user && $user['encrypted_password'] == $password)
    {
      $this->session->set_userdata('current_user', $user['id']);
      redirect('posts/index');
    }
    else
    {
      $this->session->set_flashdata("login_error", "Invalid email or password!");
      redirect('users/login_page');
    }

  }
  public function user_new()
  {
    $this->load->view('users/user_new');
  }

  public function create()
  //creates user
  {
    $user = $this->input->post();
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email' , 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('password_confirmation', 'Confirm Password', 'required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[password_confirmation]');

    if($this->form_validation->run() == FALSE)
    {
      $errors = array(validation_errors());
      var_dump($errors);
      die();
      $this->session->set_flashdata('errors', $errors);
      redirect('/');
    }
    else
    {
      $this->load->model('User');
      $this->User->register($user);
      $this->session->set_userdata('current_user', $this->db->insert_id());
      redirect('posts/index');
    }
  }




  public function logout()
  {
    $this->session->sess_destroy();
    redirect('/');
  }
}
