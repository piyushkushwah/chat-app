<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $this->load->database();
      $this->load->view('templates/header1');	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }