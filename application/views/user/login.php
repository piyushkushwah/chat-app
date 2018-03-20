  
   <!-- login form -->
  <div class="row  box">
       <div class="col s12  m4 offset-m4 z-depth-3 login-box white">
            
      <div class="row">
        <form id="loginform" method="post" action="">
          <div class="margin-top">

            <div class="input-field col s10">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" class="validate"  autocomplete="off" required>
              <label for="icon_prefix black">Authenticate User</label>
            </div>

            <div class="input-field col s10">
              <i class="material-icons prefix">lock</i>
              <input id="icon_telephone" type="password" class="validate" autocomplete="off" required minlength="8" value="">
              <label for="icon_telephone">Password</label>
            </div>
           <div class="row">
             <div class="col s6"> 
              <button class="btn success #880e4f pink darken-4 right">&nbspLOGIN&nbsp</button></div>
         
           
            <div class="col s4"> 
              <button class="btn success #880e4f pink darken-4" >&nbspCANCEL&nbsp</button></div>
          </div>
           </div>

        </form>
      </div>         
    </div>

  </div>

  <!-- add footer  -->

    <footer class="page-footer #c62828 red darken-4">

<div class="footer-copyright">
  <div class="container center">
  © 2014 Copyright Text
  <a class="grey-text text-lighten-4" href="#">cynix.com</a>
  </div>
</div>
</footer>

  <script src="<?php echo base_url(); ?>assets/js/login.js"></script>
 

 