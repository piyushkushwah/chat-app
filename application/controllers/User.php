<?php
   
   class User extends CI_Controller{

   	public function login(){
      $data['title']='Login';
      echo SERVER_URL;
      $data['styles'] = array('login');
      $data['header']= true;
      $this->load->database();	   
      $this->load->view('templates/header',$data);
      $this->load->view('user/login',$data);	 
      $this->load->view('templates/footer');	 
   	}
  

   }