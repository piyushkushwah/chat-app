<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $data['styles'] = array('chat');
      $data['header']= false;
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }