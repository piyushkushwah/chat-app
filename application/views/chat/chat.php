<input type="hidden" id="token" value="<?php echo $token; ?>" >


  <!-- side nav bar -->
  <ul id="slide-out" class="side-nav">
    <li>
        <div class="user-view">
          <div class="background">
           <img src="<?php echo base_url(); ?>assets/img/img1.jpg">
          </div>
        <a href="#!user"><img class="circle" src="<?php echo base_url(); ?>assets/img/img1.jpg"></a>
        <a href="#!name"><span class="white-text name">John Doe</span></a>
        <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
       </div>
    </li>

    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
<!-- side nav end -->


<!-- main block that contain left and right box-->
 <div class="row">
    
    <!-- item on right of screen -->
    <div class="col s12 m4 l4 scrol-3">

        <ul class="collection collection-changed with-header user-hide">
          <li class="collection-header">
            <div>

              <img src="<?php echo base_url(); ?>assets/img/img1.jpg" width="45" height="45" alt="" class="circle  <?php echo base_url(); ?>assets/img-width">
              <a href="#" class="">USER</a>
              <a href="#" class="right"><i class="material-icons">list</i></a>
              <a href="#" class="right"><i class="material-icons" id="auto">add</i></a>
            </div>
          </li>


         <li class="collection-item hd">
                <div class="row row-margin-0">
                    <form method="post" class="col s12 hide-1">
                      <div class="row row-margin-0">
                        <div class="input-field col s12">
                          <i class="material-icons prefix hide-2">search</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Search for friend</label>
                        </div>
                       
                      </div>
                    </form>
                  </div>
            </li>
            
           <!--  <li class="collection-item avatar" id="toggle">
              <center>Chatting List</center>
              <a href="#!" class="secondary-content"><i class="material-icons hidden">star</i></a>
            </li> -->

 
           <div class="scrol" id="hd">

            <li class="collection-item avatar hov1" id="hov">

                <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
                <span class="title">User Name</span>
                <p>First Line</p>
                <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
            </li>
 
            <li class="collection-item avatar hov1" id="hov">
              <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
              <span class="title">User Name</span>
              <p>First Line</p>
              <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
          </li>

          <li class="collection-item avatar hov1" id="hov">
            <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
            <span class="title">User Name</span>
            <p>First Line</p>
            <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
        </li>


        <li class="collection-item avatar hov1" id="hov">
          <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
          <span class="title">User Name</span>
          <p>First Line</p>
          <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
      </li>


      <li class="collection-item avatar hov1" id="hov">
        <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
        <span class="title">User Name</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
    </li>

    <li class="collection-item avatar hov1" id="hov">
      <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
      <span class="title">User Name</span>
      <p>First Line</p>
      <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
  </li>


  <li class="collection-item avatar hov1" id="hov">
    <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
    <span class="title">User Name</span>
    <p>First Line</p>
    <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
</li>
      
            <li class="collection-item avatar hov1" id="hov">
        <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
        <span class="title">User Name</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
    </li>

    <li class="collection-item avatar hov1" id="hov">
      <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
      <span class="title">User Name</span>
      <p>First Line</p>
      <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
  </li>


  <li class="collection-item avatar hov1" id="hov">
    <img src="<?php echo base_url(); ?>assets/img/img1.jpg" alt="" class="circle">
    <span class="title">User Name</span>
    <p>First Line</p>
    <a href="#!" class="secondary-content"><i class="material-icons hidden">keyboard_arrow_down</i></a>
</li>

    
  
            </div>
         </ul>
      </div>
    
    <!-- rigth side of box -->
    <div class="col s12 l8 m8 scrol-chat chat-hide">
        <ul class="collection with-header">

           <li class="collection-header pk">
              <div>
                  <!-- name of user whom chatting with -->
                  <a class="sz bk"><i class="material-icons">arrow_back</i></a>
                  <img src="<?php echo base_url(); ?>assets/img/img1.jpg" width="45" height="45" alt="" class="circle  <?php echo base_url(); ?>assets/img-width button-collapse" data-activates="slide-out">
                  <a href="#" class="">USER NAME</a>
                  <a href="" class="right"><i class="material-icons">list</i></a>
                  <a href="#" class="right"><i class="material-icons" id="auto">add</i></a>
              </div>
            </li>

        <div class="scrol scrol-chat bg-col #bdbdbd grey lighten-1">     
            <!-- chatting division -->
            
            <!-- 1st user -->
            <div class="container-2">
                <p id="user_id_1">CYNIX</p>
                <p>Hello. How are you today? lorem100</p>
                <i class="material-icons time-right">check</i>
                <span class="time-right">11:00</span>
            </div><br>
            
            <!-- 2nd user -->
            <div class="container-2 darker">
                  <p id="user_id_2">Linux</p>
                  <p>Hey! I'm fine. Thanks ddd for asking! lorem100</p>
                  <i class="material-icons time-right">check</i>
                  <span class="time-right">11:01</span>
            </div><br>

             <!-- 1st user -->
            <div class="container-2">
                <p id="user_id_1">CYNIX</p>
                <p>Hello. How are you today? lorem100</p>
                <i class="material-icons time-right">check</i>
                <span class="time-right">11:00</span>
            </div><br>
            
            <!-- 2nd user -->
            <div class="container-2 darker">
                  <p id="user_id_2">Linux</p>
                  <p>Hey! I'm fine. Thanks ddd for asking! lorem100</p>
                  <i class="material-icons time-right">check</i>
                  <span class="time-right">11:01</span>
            </div><br>

             <!-- 1st user -->
            <div class="container-2">
                <p id="user_id_1">CYNIX</p>
                <p>Hello. How are you today? lorem100</p>
                <i class="material-icons time-right">check</i>
                <span class="time-right">11:00</span>
            </div><br>
            
            <!-- 2nd user -->
            <div class="container-2 darker">
                  <p id="user_id_2">Linux</p>
                  <p>Hey! I'm fine. Thanks ddd for asking! lorem100</p>
                  <i class="material-icons time-right">check</i>
                  <span class="time-right">11:01</span>
            </div><br>

             <!-- 1st user -->
            <div class="container-2">
                <p id="user_id_1">CYNIX</p>
                <p>Hello. How are you today? lorem100</p>
                <i class="material-icons time-right">check</i>
                <span class="time-right">11:00</span>
            </div><br>
            
            <!-- 2nd user -->
            <div class="container-2 darker">
                  <p id="user_id_2">Linux</p>
                  <p>Hey! I'm fine. Thanks ddd for asking! lorem100</p>
                  <i class="material-icons time-right">check</i>
                  <span class="time-right">11:01</span>
            </div><br>


        </div><!-- scroll end -->
              
         
                 <!--text area  -->
             <div class="row bg-col-1">
                  <form id="messageForm" action="" method="post">
                    <div class="row">
                      <div class="col s10 m11 l11 a">
                        <input type="text" name="message" placeholder="write message"> 
                      </div>
                      <div class="col s1 m1 l1 pos"><button type="submit" class="btn btn-floating btn-large cyan"><i class="material-icons pk">send</i></button></div>
                     </div>
                  </form>
             </div>
           </ul>
      </div> <!-- col s8 -->   
    </div>     
 <!-- row-->

 <script src="<?php echo base_url(); ?>assets/js/chat.js"></script>

</body>
</html>
