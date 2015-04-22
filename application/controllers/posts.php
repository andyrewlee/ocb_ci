<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
  public function index()
  {
    $data['posts']=$this->Post->all();
    $this->load->view('posts/index', $data);
  }

  public function show($id)
  {
    $data['post'] = $this->Post->find_by($id);
    $this->load->view('posts/show', $data);
  }

  public function new_post()
  {
    $this->load->view('posts/new_post');
  }

  public function create()
  {
    $post=$this->input->post();
    $this->Post->create($post);
    redirect('/');
  }

  public function edit($id)
  {
    $data['post'] = $this->Post->find_by($id);
    $this->load->view('posts/edit',$data);
  }

  public function update($id)
  {
    $post = $this->input->post();
    $this->Post->update($post, $id);
    redirect('/posts/show/' .$id);
  }

  public function destroy($id)
  {
    $this->Post->delete_item($id);
    redirect('/');
  }
}
