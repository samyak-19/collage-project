<?php
   // include 'Server_Connection.php';

   // if(isset($_POST['register_Button']))
   // {
   //    $reg_first_name=$_POST['reg_first_name'];
   //    $reg_last_name=$_POST['reg_last_name'];
   //    $reg_username=$_POST['reg_username'];
   //    $reg_email_id=$_POST['reg_email_id'];
   //    $reg_gender=$_POST['reg_gender'];
   //    $reg_password=$_POST['reg_password'];
   //    $reg_confirm_password=$_POST['reg_confirm_password'];
   //    $reg_age=$_POST['reg_age'];
   //    $reg_address=$_POST['reg_address'];
   //    $reg_phone_no=$_POST['reg_phone_no'];
   //    $reg_city=$_POST['reg_city'];
   //    $reg_state=$_POST['reg_state'];
   
   //    $sql_add ="INSERT INTO registration VALUES('$reg_first_name','$reg_last_name','$reg_username','$reg_email_id','$reg_gender','$reg_password','$reg_confirm_password','$reg_age','$reg_address','$reg_phone_no','$reg_city','$reg_state')";
    
   //    mysqli_query($connect_db,$sql_add);
   // }
?> 


<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width , initial-scale=1.0">
       <title> Registration Page </title>
       <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="Containerdiv_registrationpage">
        <div class="wrapper_registrationpage">
           <div class="inner_registrationpage">
              <div class="image-holder_registrationpage">
                  <img class="img_registationpage1" src="./images/background/set1.jpg" alt="image">
                  <img class="img_registationpage2" src="./images/background/flower1.jpg" alt="image">
              </div>
              <form action=./login.php method=post>
                 <h3>Register Here</h3>
                 <div class="form_registration_group_registration">
                    <input onkeyup="regin_fname()" id="reg_fname" name="reg_first_name" type="text" placeholder="First Name" class="form_registration_control_registration" required>
                    <input onkeyup="regin_lname()" id="reg_lname" name="reg_last_name" type="text" placeholder="Last Name" class="form_registration_control_registration" required>
                 </div>
                 <div class="form_registration-wrapper_registrationpage">
                    <input onkeyup="regin_usename()" id="reg_usename" name="reg_username" type="text" placeholder="Username" class="form_registration_control_registration" required> 
                 </div> 
                 <div class="form_registration-wrapper_registrationpage">
                    <input onkeyup="regin_email()" id="reg_email" name="reg_email_id" type="text" placeholder="Email Address" class="form_registration_control_registration" required>
                 </div>
                 <div class="form_registration-wrapper_registrationpage">
                    <select name="reg_gender" id="" class="form_registration_control_registration">
                       <option value="" disabled selected >Gender </option> 
                       <option name="reg_gender" value="male" >Male</option> 
                       <option name="reg_gender" value="female">Female</option> 
                       <option name="reg_gender" value="other">Other</option>
                    </select>
                 </div>
                 <div class="form_registration-wrapper_registrationpage">
                    <input onkeyup="regin_pass()" id="reg_pass" name="reg_password" type="password" placeholder="Password" class="form_registration_control_registration" required> 
                 </div>

                 <div class="form_registration-wrapper_registrationpage">
                    <input name="reg_confirm_password" type="password" placeholder="Confirm Password" class="form_registration_control_registration" required>
                 </div>

                 <div class="form_registration-wrapper_registrationpage">
                 <span >Date Of Birth :
                    <input onkeyup="regin_birth()" id="reg_birth" name="reg_date_of_birth" type="date" placeholder="DOB: dd/mm/yyyy"  class="form_registration_control_registration" required>
                 </span>

                 </div>

                 <div class="form_registration-wrapper_registrationpage">
                    <input onkeyup="regin_addr()" id="reg_addr" name="reg_address" type="text" placeholder="Address" class="form_registration_control_registration" required>
                 </div>

                 <div class="form_registration-wrapper_registrationpage">
                     <input onkeyup="regin_pho_no()" id="reg_pho_no"  name="reg_phone_no" type="text" placeholder="Phone No." class="form_registration_control_registration" required>
                 </div>

                 <div class="form_registration-wrapper_registrationpage">
                    <input  onkeyup="regin_cit()" id="reg_cit"  name="reg_city" type="city" placeholder="City" class="form_registration_control_registration" required>
                 </div>
                 <div class="form_registration_control_registration">
                 <select name="reg_state" id="" class="form-control_addbusinesspage">
                     <option value="" disabled selected >State (OR) Union Territories</option> 
                     <option name="reg_state" value="andhra pradesh" >Andhra Pradesh</option> 
                     <option name="reg_state" value="arunachal pradesh">Arunachal Pradesh</option> 
                     <option name="reg_state" value="assam" >Assam</option> 
                     <option name="reg_state" value="andaman & nicobar island" >Andaman & Nicobar island(UT)</option> 
                     <option name="reg_state" value="bihar">Bihar</option>  
                     <option name="reg_state" value="chhattisgarh" >Chhiattisgarh</option> 
                     <option name="reg_state" value="chandigarh">Chandigarh(UT)</option>  
                     <option name="reg_state" value="dabra & nagar haveli & daman & diu" >Dabra & nagar haveli & Daman & diu(UT)</option> 
                     <option name="reg_state" value="delhi">Dehli</option>  
                     <option name="reg_state" value="goa" >Goa</option> 
                     <option name="reg_state" value="gujrat">Gujarat</option>  
                     <option name="reg_state" value="haryana" >Haryana</option> 
                     <option name="reg_state" value="himachal pradesh">Himachal Pradesh</option>  
                     <option name="reg_state" value="jharkhand" >Jharkhand</option> 
                     <option name="reg_state" value="jammu & kashmir">Jammu & Kashmir(UT)</option> 
                     <option name="reg_state" value="karnataka">Karnataka</option>
                     <option name="reg_state" value="kerala">Kerala</option>
                     <option name="reg_state" value="ladakh">Ladaka(UT)</option>
                     <option name="reg_state" value="lakshadweep">Lakshadweep</option>
                     <option name="reg_state" value="madhya pradesh">Madhya Pradesh</option>
                     <option name="reg_state" value="maharashtra">Maharashtra</option>
                     <option name="reg_state" value="manipur">Manipur</option>
                     <option name="reg_state" value="meghalaya">Megalaya</option>
                     <option name="reg_state" value="mizoram">Mizoram</option>
                     <option name="reg_state" value="nagaland">Nagaland</option>
                     <option name="reg_state" value="odisha">Odisha</option>
                     <option name="reg_state" value="punjab">Punjab</option>
                     <option name="reg_state" value="puducherry">Puducherry(UT)</option>
                     <option name="reg_state" value="rajasthan">Rajasthan</option>
                     <option name="reg_state" value="sikkim">Sikkim</option>
                     <option name="reg_state" value="tamil nadu">Tamil Nadu</option>
                     <option name="reg_state" value="telangana">Telangana</option>
                     <option name="reg_state" value="tripura">Tripura</option>
                     <option name="reg_state" value="uttar pradesh">Uttar Pradesh</option>
                     <option name="reg_state" value="uttarakhand">Uttarakhand</option>
                     <option name="reg_state" value="west bengal">West Bengal</option>
                </select>

                 </div>
                 <button id="reg_button" name="register_Button" disabled>Register</button>
              </form>
           </div>
        </div>
   </div>
   </body>
</html>
  

<script>
   let name_regx = /^[a-z A-Z]{0,15}$/
   let username = /^[a-z A-Z 0-9]{0,15}$/
   let email_regx = /^[a-z A-Z 0-9+_.-]+@[a-z A-Z 0-9.-]{0,30}$/
   let password_regx = /^[a-z A-Z 0-9 /@/#]{6,15}$/
   let DOB_regx = /^[0-9]{6,6}$/
   let registation_addr = /^[a-z A-Z 0-9]{0,50}$/
   let phone_no_regx = /^[0-9]{10}$/
   let city_regx = /^[a-z A-Z]{0,30}$/

   var reg_fname =   document.getElementById("reg_fname");
   var reg_lname =   document.getElementById("reg_lname");
   var reg_usename = document.getElementById("reg_usename");
   var reg_email = document.getElementById("reg_email");
   var reg_pass = document.getElementById("reg_pass");
   var reg_birth = document.getElementById("regin_birth");
   var reg_addr = document.getElementById("reg_addr");
   var reg_pho_no = document.getElementById("reg_pho_no");
   var reg_cit = document.getElementById("reg_cit");
   var reg_button = document.getElementById("reg_button");
   

   function regin_fname()
   {
      if(name_regx.test(reg_fname.value))
      {
         reg_fname.classList.add("right");
         reg_fname.classList.remove("wrong");
         check();
      }
      else
      {
         reg_fname.classList.add("wrong");
         reg_fname.classList.remove("right");
         check();
      }
      if(reg_fname.value == "")
      {
         reg_fname.classList.remove("right");
         reg_fname.classList.remove("wrong");
      }
   }
   function regin_lname()
   {
      if(name_regx.test(reg_lname.value))
      {
         reg_lname.classList.add("right");
         reg_lname.classList.remove("wrong");
         check();
      }
      else
      {
         reg_lname.classList.add("wrong");
         reg_lname.classList.remove("right");
         check();
      }
      if(reg_lname.value == "")
      {
         reg_lname.classList.remove("right");
         reg_lname.classList.remove("wrong");
      }
   }
   function regin_usename()
   {
      if(username.test(reg_usename.value))
      {
         reg_usename.classList.add("right");
         reg_usename.classList.remove("wrong");
         check();
      }
      else
      {
         reg_usename.classList.add("wrong");
         reg_usename.classList.remove("right");
         check();
      }
      if(reg_usename.value == "")
      {
         reg_usename.classList.remove("right");
         reg_usename.classList.remove("wrong");
      }
   }
   function regin_email()
   {
      if(email_regx.test(reg_email.value))
      {
         reg_email.classList.add("right");
         reg_email.classList.remove("wrong");
         check();
      }
      else
      {
         reg_email.classList.add("wrong");
         reg_email.classList.remove("right");
         check();
      }
      if(reg_email.value == "")
      {
         reg_email.classList.remove("right");
         reg_email.classList.remove("wrong");
      }
   }
   function regin_pass()
   {
      if(password_regx.test(reg_pass.value))
      {
         reg_pass.classList.add("right");
         reg_pass.classList.remove("wrong");
         check();
      }
      else
      {
         reg_pass.classList.add("wrong");
         reg_pass.classList.remove("right");
         check();
      }
      if(reg_pass.value == "")
      {
         reg_pass.classList.remove("right");
         reg_pass.classList.remove("wrong");
      }
   }
   function regin_birth()
   {
      if(DOB_regx.test(reg_birth.value))
      {
         reg_birth.classList.add("right");
         reg_birth.classList.remove("wrong");
         check();
      }
      else
      {
         reg_birth.classList.add("wrong");
         reg_birth.classList.remove("right");
         check();
      }
      if(reg_birth.value == "")
      {
         reg_birth.classList.remove("right");
         reg_birth.classList.remove("wrong");
      }
   }
   function regin_addr()
   {
      if(registation_addr.test(reg_addr.value))
      {
         reg_addr.classList.add("right");
         reg_addr.classList.remove("wrong");
         check();
      }
      else
      {
         reg_addr.classList.add("wrong");
         reg_addr.classList.remove("right");
         check();
      }
      if(reg_addr.value == "")
      {
         reg_addr.classList.remove("right");
         reg_addr.classList.remove("wrong");
      }
   }
   function regin_pho_no()
   {
      if(phone_no_regx .test(reg_pho_no.value))
      {
         reg_pho_no.classList.add("right");
         reg_pho_no.classList.remove("wrong");
         check();
      }
      else
      {
         reg_pho_no.classList.add("wrong");
         reg_pho_no.classList.remove("right");
         check();
      }
      if(reg_pho_no.value == "")
      {
         reg_pho_no.classList.remove("right");
         reg_pho_no.classList.remove("wrong");
      }
   }
   function regin_cit()
   {
      if(city_regx .test(reg_cit.value))
      {
         reg_cit.classList.add("right");
         reg_cit.classList.remove("wrong");
         check();
      }
      else
      {
         reg_cit.classList.add("wrong");
         reg_cit.classList.remove("right");
         check();
      }
      if(reg_cit.value == "")
      {
         reg_cit.classList.remove("right");
         reg_cit.classList.remove("wrong");
      }
   }
   function check()
   {
      if(name_regx.test(reg_fname.value))
      {
         reg_button.disabled = false;
      }
      else
      {
         reg_button.disabled = true;
      }
   }
</script>
  