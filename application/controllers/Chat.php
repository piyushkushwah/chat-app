<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $data['styles'] = array('chat');
      $data['header']= false;
      $data['token'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1Y…jU5fQ.FBrUzVabcwdBp0hbVl7crXJLLikfT8aPU5Uo0nAZwN8';
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }