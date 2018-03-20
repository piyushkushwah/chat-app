<?php
   
   class Chat extends CI_Controller{

   	public function index(){
      $data['title']='Chat';
      $data['styles'] = array('chat');
      $data['header']= false;
<<<<<<< HEAD
      $data['token'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1YWIwOTExMmIyYWIyYTZjMjAxN2UzYWIiLCJ1c2VybmFtZSI6ImFtYXJuYXRoIiwiaWF0IjoxNTIxNTIxMDY1fQ.zLwvVVPaJ_fm_qUORBenQkr_WDRWusHpoiazv_Jr_g8';
      //echo SERVER_URL;
=======
      $data['token'] = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiI1Y…jU5fQ.FBrUzVabcwdBp0hbVl7crXJLLikfT8aPU5Uo0nAZwN8';
>>>>>>> dc9372429665a5bec27a0bfe04c006eabcd53a54
      $this->load->database();
      $this->load->view('templates/header',$data);	 
      $this->load->view('chat/chat',$data);	 
     
   	}
  

   }