<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User');
  }
  public function login()
  {
    $email = $this->input->post('email');
    $password =$this->input->post('password');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','Email' , 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $user = $this->User->get_user_by_id($id);
    if($user && $user['password'] == $password)
    {
      $current_user = array(
        'user_id' => $user['id'],
        'user_email' => $user['email'],
        'user_name' => $user['user_name'],
        'is_logged_in' => true
        );
      $data['user'] = $current_user;
      $this->session_set_userdata($current_user);
      $this->load->view('users/login');
    }
    else
    {
      $this->session->set_flashdata("login error", "Invalid email or password!")
      redirect('posts/index');
    }
    
  }
  public function user_new()
  {
    $user = $this->input->post();
    $this->load->library('form_validation');
    $this->form_validation->set_rules('user_name','Username' , 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|matches[confirm_password]');
    if($this->form_validation->run() == FALSE)
    {
      $errors = array(validation_errors());
      $this->session->set_flashdata('errors', $errors);
      redirect('/');
    }
    else
    {
      $this->User->register($user);
      $current_user = array(
        'user_name' => $user['user_name'],
        'student_email' => $student['email']
        );
      $data['user'] = $current_user;
      $this->load->view('users/user_new');
    }
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
