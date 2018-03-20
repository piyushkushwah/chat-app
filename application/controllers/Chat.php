<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $data['styles'] = array('chat');
      $data['header']= false;
      $data['token'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1YWIwOTExMmIyYWIyYTZjMjAxN2UzYWIiLCJ1c2VybmFtZSI6ImFtYXJuYXRoIiwiaWF0IjoxNTIxNTIxMDY1fQ.zLwvVVPaJ_fm_qUORBenQkr_WDRWusHpoiazv_Jr_g8';
      //echo SERVER_URL;
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }