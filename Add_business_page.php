 <?php

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
</head>
<body>
   <div class="container_addbusinesspage">
       <div class="wrapper_addbusinesspage">
           <div class="inner_addbusinesspage">
              <div class="image-holder_addbusinesspage">
                  <img class="img_businesspage1" src="./images/background/rajmahal.jpg" alt="image">
                  <img class="img_businesspage2" src="./images/background/midnight.jpg" alt="image">
              </div>
              <form action="profile_page.php" method="post" enctype="multipart/form-data">
                 <h3>Add Business</h3>
                 <div class="form-group_addbusinesspage">
                    <input onkeyup="busin_name()" id="bus_name" name="Business_name" type="text" placeholder="Business Name" class="form-control_addbusinesspage">
                 </div>
              
                 <div class="form-wrapper_addbusinesspage">
                    <input onkeyup="busin_email()" id="bus_email" name="Business_Email_id" type="text" placeholder="Business Email Id" class="form-control_addbusinesspage">
                 </div>
                 <div class="form-wrapper_addbusinesspage "  >                   
                    <div class="multi_selector_addbusinesspage">
                     <div class="form-control_addbusinesspage">
                      <select name="Business_state" id="" class="form-control_addbusinesspage" required>
                         <option name="Main Categories Related to Your Bussiness" value="Main Categories Of Your Bussiness" disabled selected>Main Categories Related to Your Bussiness</option> 
                         <option name="Main Categories Related to Your Bussiness" value="Wedding" >Wedding</option> 
                         <option name="Main Categories Related to Your Bussiness" value="Birthday">Birthday</option> 
                         <option name="Main Categories Related to Your Bussiness" value="Mangal Bhavan">Mangal Bhavan</option> 
                         <option name="Main Categories Related to Your Bussiness" value="Music System" >Music System</option> 
                         <!-- <option name="Main Categories Related to Your Bussiness" value=""></option>   -->
                         <!-- <option name="Main Categories Related to Your Bussiness" value="chhattisgarh" ></option> 
                         <option name="Main Categories Related to Your Bussiness" value="chandigarh"></option>  
                         <option name="Main Categories Related to Your Bussiness" value="dabra & nagar haveli & daman & diu" ></option> 
                           -->
                                              
                        </select>
                      </div>
                        <div class="select_field_addbusinesspage">
                           <input type="text" name="" placeholder="Choose Event Categories" class="input_selector_addbusinesspage">
                           <span class="down_arrow_addbusinesspage">&blacktriangledown;</span>
                        </div>
                       <!-- ============= choose of checkboxes and  opetions ============= -->
                       <div class="list_addbusinesspage">
                           <label for="task1" class="task_addbusinesspage">
                              <input type="checkbox" value="CATERER" name="Event_related_your_categories" id="task1">
                                 CATERER  
                           </label>
                           <label for="task2" class="task_addbusinesspage">
                              <input type="checkbox" value="CHOPROGRAPER" name="Event_related_your_categories" id="task2">
                                 CHOPROGRAPER  
                           </label>
                           <label for="task3" class="task_addbusinesspage">
                              <input type="checkbox" value="MANGAL BHAVAN" name="Event_related_your_categories" id="task3">
                                 MANGAL BHAVAN 
                           </label>
                           <label for="task4" class="task_addbusinesspage">
                              <input type="checkbox" value="MUSIC SYSTEM" name="Event_related_your_categories" id="task4">
                                 MUSIC SYSTEM  
                           </label>
                           <label for="task5" class="task_addbusinesspage">
                              <input type="checkbox" value="PHOTOGRAPER" name="Event_related_your_categories" id="task5">
                                 PHOTOGRAPER 
                           </label>
                           <label for="task6" class="task_addbusinesspage">
                              <input type="checkbox" value="DECORATION" name="Event_related_your_categories" id="task6">
                                 DECORATION
                           </label>
                           <label for="task7" class="task_addbusinesspage">
                              <input type="checkbox" value="MEHENDI VALA" name="Event_related_your_categories" id="task7">
                                 MEHENDI VALA  
                           </label>
                       </div>
                    </div>
                 </div>

                 <div class="form-wrapper_addbusinesspage addbusiness_event_categories">
                  <input  onkeyup="busin_username()" id="bus_username" name="Username" type="text" placeholder="Username" class="form-control_addbusinesspage"> 
                 </div> 

                 <div class="form-wrapper_addbusinesspage">
                    <input onkeyup="busin_pass()" id="bus_pass" name="Password" type="password" placeholder="Password" class="form-control_addbusinesspage"> 
                 </div>

                 <div class="form-wrapper_addbusinesspage">
                    <input onkeyup="busin_website()" id="bus_website" name="Business_Website" type="Business Website" placeholder="Business Website" class="form-control_addbusinesspage">
                 </div>

                 <div class="form-wrapper_addbusinesspage">
                     <input name="Business_experience_year" type="number" placeholder="Business Experiences(Year)" class="form-control_addbusinesspage">
                 </div>

                 <div class="form-wrapper_addbusinesspage">
                    <input onkeyup="busin_addr()" id="bus_addr" name="Business_Address" type="text" placeholder="Business Address" class="form-control_addbusinesspage">
                 </div>

                 <div class="form-wrapper_addbusinesspage">
                     <input onkeyup="busin_contact()" id="bus_contact" name="Business_contact" type="text" placeholder="Business Contact" class="form-control_addbusinesspage">
                  </div>

                 <div class="form-wrapper_addbusinesspage">
                    <input onkeyup="busin_city()" id="bus_city" name="Business_city" type="city" placeholder="City" class="form-control_addbusinesspage" re>
                 </div>
                 <div class="form-control_addbusinesspage">
                    <select name="Business_state" id="" class="form-control_addbusinesspage" required>
                     <option name="Business_state" value="" disabled selected>State (OR) Union Territories</option> 
                     <option name="Business_state" value="andhra pradesh" >Andhra Pradesh</option> 
                     <option name="Business_state" value="arunachal pradesh">Arunachal Pradesh</option> 
                     <option name="Business_state" value="assam" >Assam</option> 
                     <option name="Business_state" value="andaman & nicobar island" >Andaman & Nicobar island(UT)</option> 
                     <option name="Business_state" value="bihar">Bihar</option>  
                     <option name="Business_state" value="chhattisgarh" >Chhiattisgarh</option> 
                     <option name="Business_state" value="chandigarh">Chandigarh(UT)</option>  
                     <option name="Business_state" value="dabra & nagar haveli & daman & diu" >Dabra & nagar haveli & Daman & diu(UT)</option> 
                     <option name="Business_state" value="delhi">Dehli</option>  
                     <option name="Business_state" value="goa" >Goa</option> 
                     <option name="Business_state" value="gujrat">Gujarat</option>  
                     <option name="Business_state" value="haryana" >Haryana</option> 
                     <option name="Business_state" value="himachal pradesh">Himachal Pradesh</option>  
                     <option name="Business_state" value="jharkhand" >Jharkhand</option> 
                     <option name="Business_state" value="jammu & kashmir">Jammu & Kashmir(UT)</option> 
                     <option name="Business_state" value="karnataka">Karnataka</option>
                     <option name="Business_state" value="kerala">Kerala</option>
                     <option name="Business_state" value="ladakh">Ladaka(UT)</option>
                     <option name="Business_state" value="lakshadweep">Lakshadweep</option>
                     <option name="Business_state" value="madhya pradesh">Madhya Pradesh</option>
                     <option name="Business_state" value="maharashtra">Maharashtra</option>
                     <option name="Business_state" value="manipur">Manipur</option>
                     <option name="Business_state" value="meghalaya">Megalaya</option>
                     <option name="Business_state" value="mizoram">Mizoram</option>
                     <option name="Business_state" value="nagaland">Nagaland</option>
                     <option name="Business_state" value="odisha">Odisha</option>
                     <option name="Business_state" value="punjab">Punjab</option>
                     <option name="Business_state" value="puducherry">Puducherry(UT)</option>
                     <option name="Business_state" value="rajasthan">Rajasthan</option>
                     <option name="Business_state" value="sikkim">Sikkim</option>
                     <option name="Business_state" value="tamil nadu">Tamil Nadu</option>
                     <option name="Business_state" value="telangana">Telangana</option>
                     <option name="Business_state" value="tripura">Tripura</option>
                     <option name="Business_state" value="uttar pradesh">Uttar Pradesh</option>
                     <option name="Business_state" value="uttarakhand">Uttarakhand</option>
                     <option name="Business_state" value="west bengal">West Bengal</option>
                    </select>
                 </div>
                 <div class="file_input_holder">
                  <div class="please">
                   <input class="file_input" type="file" name="img[]" multiple/>
                   <div class="file_input_label">
                     <p>click to upload your only four images</p>
                   </div>
                  </div>
                 </div>
                 
                 <div class="form-wrapper_addbusinesspage">
                  <textarea  onkeyup="busin_discripation()" id="bus_discripation" name="Business_Description" placeholder="Business Description" class="aaa"></textarea>
                 </div>
                 <button id="bus_button" name="Business_Submit_button">Submit</button>
              </form>
              
            </div>
        </div>
      </div>
      <script>
         document.querySelector('.select_field_addbusinesspage').addEventListener('click',()=>
         {
            document.querySelector('.list_addbusinesspage').classList.toggle('show');
            document.querySelector('.down_arrow_addbusinesspage').classList.toggle('rotate180');
         });
      </script>
</body>
</html>

<script>
   let name_regx = /^[a-z A-Z]{0,15}$/
   let username = /^[a-z A-Z 0-9]{0,15}$/
   let email_regx = /^[a-z A-Z 0-9+_.-]+@[a-z A-Z 0-9.-]{0,30}$/
   let password_regx = /^[a-z A-Z 0-9 /@/#]{6,15}$/
   let addr_regx = /^[a-z A-Z 0-9]{0,50}$/
   let phone_no_regx = /^[0-9]{10}$/
   let city_regx = /^[a-z A-Z]{0,30}$/
   let wbsite_regx = /^((https?|ftp|smtp):\/\/)?(www.)?[a-z 0-9]+\.[a-z]+(\/[a-z A-Z 0-9#]+\/?)*$/
   let descripation_regx = /^[a-z A-Z 0-9/@/#/_]{30,100}$/

   var bus_name =   document.getElementById("bus_name");
   var reg_lnamebus_email =   document.getElementById("bus_email");
   var bus_username = document.getElementById("bus_username");
   var bus_pass = document.getElementById("bus_pass");
   var bus_website = document.getElementById("bus_website");
   var bus_addr = document.getElementById("bus_addr");
   var bus_contact = document.getElementById("bus_contact");
   var bus_city = document.getElementById("bus_city");
   var reg_birth = document.getElementById("regin_birth");
   var bus_button = document.getElementById("bus_button");
   

   function busin_name()
   {
      if(name_regx.test(bus_name.value))
      {
         bus_name.classList.add("right");
         bus_name.classList.remove("wrong");
         check();
      }
      else
      {
         bus_name.classList.add("wrong");
         bus_name.classList.remove("right");
         check();
      }
      if(bus_name.value == "")
      {
         bus_name.classList.remove("right");
         bus_name.classList.remove("wrong");
      }
   }
   function busin_email()
   {
      if(email_regx.test(bus_email.value))
      {
         bus_email.classList.add("right");
         bus_email.classList.remove("wrong");
         check();
      }
      else
      {
         bus_email.classList.add("wrong");
         bus_email.classList.remove("right");
         check();
      }
      if(bus_email.value == "")
      {
         bus_email.classList.remove("right");
         bus_email.classList.remove("wrong");
      }
   }
   function busin_username()
   {
      if(username.test(bus_username.value))
      {
         bus_username.classList.add("right");
         bus_username.classList.remove("wrong");
         check();
      }
      else
      {
         bus_username.classList.add("wrong");
         bus_username.classList.remove("right");
         check();
      }
      if(bus_username.value == "")
      {
         bus_username.classList.remove("right");
         bus_username.classList.remove("wrong");
      }
   }
   function busin_pass()
   {
      if(password_regx.test(bus_pass.value))
      {
         bus_pass.classList.add("right");
         bus_pass.classList.remove("wrong");
         check();
      }
      else
      {
         bus_pass.classList.add("wrong");
         bus_pass.classList.remove("right");
         check();
      }
      if(bus_pass.value == "")
      {
         bus_pass.classList.remove("right");
         bus_pass.classList.remove("wrong");
      }
   }
   function busin_website()
   {
      if(wbsite_regx.test(bus_website.value))
      {
         bus_website.classList.add("right");
         bus_website.classList.remove("wrong");
         check();
      }
      else
      {
         bus_website.classList.add("wrong");
         bus_website.classList.remove("right");
         check();
      }
      if(bus_website.value == "")
      {
         bus_website.classList.remove("right");
         bus_website.classList.remove("wrong");
      }
   }
   function busin_addr()
   {
      if(addr_regx.test(bus_addr.value))
      {
         bus_addr.classList.add("right");
         bus_addr.classList.remove("wrong");
         check();
      }
      else
      {
         bus_addr.classList.add("wrong");
         bus_addr.classList.remove("right");
         check();
      }
      if(bus_addr.value == "")
      {
         bus_addr.classList.remove("right");
         bus_addr.classList.remove("wrong");
      }
   }
   function busin_contact()
   {
      if(phone_no_regx.test(bus_contact.value))
      {
         bus_contact.classList.add("right");
         bus_contact.classList.remove("wrong");
         check();
      }
      else
      {
         bus_contact.classList.add("wrong");
         bus_contact.classList.remove("right");
         check();
      }
      if(bus_contact.value == "")
      {
         bus_contact.classList.remove("right");
         bus_contact.classList.remove("wrong");
      }
   }
   function busin_city()
   {
      if(city_regx .test(bus_city.value))
      {
         bus_city.classList.add("right");
         bus_city.classList.remove("wrong");
         check();
      }
      else
      {
         bus_city.classList.add("wrong");
         bus_city.classList.remove("right");
         check();
      }
      if(bus_city.value == "")
      {
         bus_city.classList.remove("right");
         bus_city.classList.remove("wrong");
      }
   }
   function busin_discripation()
   {
      if(descripation_regx .test(bus_discripation.value))
      {
         bus_discripation.classList.add("right");
         bus_discripation.classList.remove("wrong");
         check();
      }
      else
      {
         bus_discripation.classList.add("wrong");
         bus_discripation.classList.remove("right");
         check();
      }
      if(bus_discripation.value == "")
      {
         bus_discripation.classList.remove("right");
         bus_discripation.classList.remove("wrong");
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
  