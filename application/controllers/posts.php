<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
  public function index()
  {
    $this->load->view('posts/index', $data);
  }

  public function show($id)
  {
    $this->load->view('posts/show');
  }

  public function new_post()
  {
    $this->load->view('posts/new_post');
  }

  public function create()
  {

  }

  public function edit($id)
  {
    $this->load->view('posts/edit');
  }

  public function update($id)
  {

  }

  public function destroy($id)
  {

  }
}
