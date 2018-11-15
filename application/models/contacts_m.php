<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contacts_m extends CI_MODEL{

  public function getContacts($limit_per_page, $offset){
    $this->db->limit($limit_per_page);
    $this->db->offset($offset);

    $output = $this->db->get('contactlist');

    if($output->num_rows() > 0){
      return $output->result();
    }
    else{
      return false;
    }
  }

  public function submit(){
    $input = array(
      'name'=>$this->input->post('contact-name'),
      'phoneNumber'=>$this->input->post('contact-number')
    );

    $this->db->insert('contactlist', $input);
    if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function getContactsName($name){
    $this->db->where('name', $name);
    $query = $this->db->get('contactlist');
    if($query->num_rows() > 0){
      return $query->row();
    }
    else{
      return false;
    }
  }

  public function update(){
    $name = $this->input->post('txt_hidden');
    $input = array(
      'name'=>$this->input->post('contact-name'),
      'phoneNumber'=>$this->input->post('contact-number')
    );
    $this->db->where('name', $name);
    $this->db->update('contactlist', $input);
    echo $this->db->last_query();extit;
    if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function delete($name){
    $this->db->where('name', $name);
    $this->db->delete('contactlist');
    if($this->db->affected_rows() > 0){
      return true;
    }
    else{
      return false;
    }
  }

  public function get_total_user(){
    return $this->db->get('contactlist')->num_rows();
  }

}
 ?>
