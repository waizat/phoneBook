<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contacts extends CI_Controller{

  function __construct(){
    parent:: __construct();
    $this->load->model('contacts_m','m');
  }

  function index($page=0){

    $this->load->library('pagination');

    $total_users = $this->m->get_total_user();
    $limit_per_page = 4;
    $offset = $page;

    $config['base_url'] = 'http://localhost/phoneBook/contacts/index';
    $config['total_rows'] = $total_users;
    $config['per_page'] = $limit_per_page;

    $this->pagination->initialize($config);




    $data['contacts'] = $this->m->getContacts($limit_per_page, $offset);
    //print_r($data);
    $this->load->view('layouts/header');
    $this->load->view('contacts/index', $data);
    $this->load->view('layouts/footer');
  }

  public function add(){
    $this->load->view('layouts/header');
    $this->load->view('contacts/add');
    $this->load->view('layouts/footer');
  }

  public function submit(){
    $result = $this->m->submit();
    if($result){
      $this->session->set_flashdata('success_msg', 'Contact added successfully');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Failed to add contact');
    }
    redirect(base_url('contacts/index'));
  }

  public function edit($name){
    $data['contacts'] = $this->m->getContactsName($name);
    $this->load->view('layouts/header');
    $this->load->view('contacts/edit', $data);
    $this->load->view('layouts/footer');
  }

  public function update(){
    $result = $this->m->update();
    if($result){
      $this->session->set_flashdata('success_msg', 'Contact UPDATED successfully');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Failed to UPDATE contact');
    }
    redirect(base_url('contacts/index'));
  }

  public function delete($name){
    $result = $this->m->delete($name);
    if($result){
      $this->session->set_flashdata('success_msg', 'Contact Deleted successfully');
    }
    else{
      $this->session->set_flashdata('error_msg', 'Failed to UPDATE contact');
    }
    redirect(base_url('contacts/index'));
  }
}
?>
