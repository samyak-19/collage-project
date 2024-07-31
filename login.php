<?php
   include 'Server_Connection.php';

   if(isset($_POST['register_Button']))
   {
      $reg_first_name=$_POST['reg_first_name'];
      $reg_last_name=$_POST['reg_last_name'];
      $reg_username=$_POST['reg_username'];
      $reg_email_id=$_POST['reg_email_id'];
      $reg_gender=$_POST['reg_gender'];
      $reg_password=$_POST['reg_password'];
      $reg_confirm_password=$_POST['reg_confirm_password'];
      $reg_date_of_birth=$_POST['reg_date_of_birth'];
      $reg_address=$_POST['reg_address'];
      $reg_phone_no=$_POST['reg_phone_no'];
      $reg_city=$_POST['reg_city'];
      $reg_state=$_POST['reg_state'];
   
      $sql_add ="INSERT INTO registration VALUES('$reg_first_name','$reg_last_name','$reg_username','$reg_email_id','$reg_gender','$reg_password','$reg_confirm_password','$reg_date_of_birth','$reg_address','$reg_phone_no','$reg_city','$reg_state')";
      mysqli_query($connect_db,$sql_add);
   }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <title> Login Page </title>
    <link rel="stylesheet" href="style.css">
</head>
   <body>
      
      <div class="conatainer_loginpage">
          <div class="background_image_loginpage">
             <img src="./images/background/flower1.jpg">
          </div>
           <div class="content_loginpage">
               <div class="form_loginpage">
                  <h2>Login Here</h2>
                   <form>
                         <div class="input_loginpage">
                              <span>Username</span>
                              <input onkeyup="longin_usename()" id="long_usename" type="text" name="" placeholder="Email Id">
                         </div>
                         <div class="input_loginpage">
                              <span>Password</span>
                              <input onkeyup="longin_pass()" id="long_pass" type="password" name="" placeholder="Password">
                         </div>
                         <div class="remember_loginpage">
                              <label><input type="checkbox" name="">Remember Me</label>
                         </div>
                         <div class="input_loginpage">
                              <input type="submit" value="Login" name="">
                         </div>
                         <div class="input_loginpage">
                              <p><a class="link_login" href="#">Forget Password</a></p>
                         </div>
                         <div class="input_loginpage">
                              <p>Don't have an account? <a class="link_login" href="./registration.html">Register First</a></p>
                              <p>Add Any Business? <a class="link_login" href="./add_dusiness_page.html">  Business Page</a></p>
                         </div>
                  </form>
              </div>
          </div>
     </div>
     
   </body>
</html>

<script>
   let username = /^[a-z A-Z 0-9]{0,15}$/
   let password_regx = /^[a-z A-Z 0-9 /@/#]{6,15}$/

   var long_usename = document.getElementById("long_usename");
   var long_pass = document.getElementById("long_pass");
   
   function longin_usename()
   {
      if(username.test(long_usename.value))
      {
          long_usename.classList.add("right");
          long_usename.classList.remove("wrong");
         check();
      }
      else
      {
          long_usename.classList.add("wrong");
          long_usename.classList.remove("right");
         check();
      }
      if(long_usename.value == "")
      {
          long_usename.classList.remove("right");
          long_usename.classList.remove("wrong");
      }
   }
   function longin_pass()
   {
      if(password_regx.test(long_pass.value))
      {
          long_pass.classList.add("right");
          long_pass.classList.remove("wrong");
         check();
      }
      else
      {
          long_pass.classList.add("wrong");
          long_pass.classList.remove("right");
         check();
      }
      if(long_pass.value == "")
      {
          long_pass.classList.remove("right");
          long_pass.classList.remove("wrong");
      }
   }
  </script>
  