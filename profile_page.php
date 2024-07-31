 <?php
   include 'Server_Connection.php';
   if(isset($_POST['Business_Submit_button']))
    {
        $Business_name=$_POST['Business_name'];
        $Business_Email_id=$_POST['Business_Email_id'];
        $Event_related_your_categories=$_POST['Event_related_your_categories'];
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $Business_Website=$_POST['Business_Website'];
        $Business_experience_year=$_POST['Business_experience_year'];
        $Business_Address=$_POST['Business_Address'];
        $Business_contact=$_POST['Business_contact'];
        $Business_city=$_POST['Business_city'];
        $Business_state=$_POST['Business_state'];
        $Business_Description=$_POST['Business_Description'];

        foreach($_FILES["img"]["tmp_name"] as $key=>$tmp_name)
        {
            $file_name = $_FILES["img"]["name"][$key];
            $file_tmp = $_FILES["img"]["tmp_name"][$key];

            move_uploaded_file($file_tmp, "Add_buss_images/".$file_name);

            $images[] = $file_name;
        }
        $image_string = implode(",", $images);

        $sql_add ="INSERT INTO add_business VALUES('$Business_name','$Business_Email_id','$Event_related_your_categories','$Username','$Password','$Business_Website','$Business_experience_year','$Business_Address','$Business_contact','$Business_city','$Business_state',' $image_string','$Business_Description')";
         mysqli_query($connect_db,$sql_add);
       
    }

?> 
<?php
         $sql_add = "SELECT * FROM add_business";
         $result = mysqli_query($connect_db,$sql_add);
?>


<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="Conatainer_profilepage">
            <div class="user_profilepage">
                <div class="background_img_profile_div1_profilepage">
                    <img src="./images/events/IMG-20230207-WA0019.jpg" >
                </div>
                <div class="profile_img_div_profilepage">
                    <img src="./images/events/BusinessCategoriespage_cardimg.jpg" >
                </div>
                <div class="profile_content_profilepage">
                    <p class="profile_left_name_profilepage">Name : <span class="profile_right_name_profilename">Ajay</span > <span class="profile_right_name_profilename">Redasni</span></p>
                    <p class="profile_left_name_profilepage">Address : <span class="profile_right_name_profilename">Holi chouk Janephal Tq Mehkar Dist Buldana</span></p>
                    <p class="profile_left_name_profilepage">Date Of Birth : <span class="profile_right_name_profilename">03/06/2001</span></p>
                    <p class="profile_left_name_profilepage">Email ID : <span class="profile_right_name_profilename">ajayredasni187@gmail.com</span></p>
                    <p class="profile_left_name_profilepage">Phone No : <span class="profile_right_name_profilename">7350234773</span></p>
                    
                    <a href="./add_business_page.php">
                       <button type="button"> Add Business </button>
                    </a>
                </div>
            </div>
            <div class="profile_Edit_button">
                <button type="button"> Edit profile </button>
            </div>
             <hr>
             
            <div class="Business_profile_div_profilepage">
                <!-- <span>Business Profile</span> -->
                <div class="Business_profile_img_div_profilepage">
                    <img src="./images/events/BusinessCategoriespage_cardimg.jpg" >
                </div>
                <div class="Business_profile_content_profilepage">
                    <h3>Jain brothers</h3>
                    <p class="Business_profile_left_name_profilepage">Name : <span class="Business_profile_right_name_profilename">Ajay</span > <span class="Business_profile_right_name_profilename">Redasni</span></p> 
                    <p class="Business_profile_left_name_profilepage">Address : <span class="Business_profile_right_name_profilename">Robert Robertson, 1234 NW Bobcat Lane, St. Robert, MO 65584-5678</span></p>
                    <p class="Business_profile_left_name_profilepage">Date Of Birth  : <span class="Business_profile_right_name_profilename">03/06/2001</span></p>
                    <p class="Business_profile_left_name_profilepage">Phone No  : <span class="Business_profile_right_name_profilename">3712274821</span></p>
                    <p class="Business_profile_left_name_profilepage">Email ID   : <span class="Business_profile_right_name_profilename">hhdwiidhawlfka@gmail.com</span></p>
                    <p class="Business_profile_left_name_profilepage">Business Link   : <span class="Business_profile_right_name_profilename">mefbufhefvfefef.com</span></p>
                </div>
                <div class="Businessprofile_Edit_button">
                    <button type="button"> Edit profile </button>
                </div> 
                
                <div class="Business_added_images_profilepage">
                <?php
                    while($row = mysqli_fetch_assoc($result)):
                    $images = explode(",",$row["Business_image"]);
                    foreach($images as $image):
                 ?>
                    <div class="Business_add_image_profilepage"><img src="Add_buss_images/<?php echo $image;?>"></div>
                    <?php  endforeach; endwhile;?>
                    </div>
                <!-- <div class="Business_added_images_profilepage">
                    <div class="Business_add_image_profilepage">
                        <img src="./images/events/BusinessCategoriespage_cardimg.jpg">
                    </div>
                    <div class="Business_add_image_profilepage">
                        <img src="./images/events/BusinessCategoriespage_cardimg.jpg">
                    </div>
                    <div class="Business_add_image_profilepage">
                        <img src="./images/events/BusinessCategoriespage_cardimg.jpg">
                    </div>
                    <div class="Business_add_image_profilepage">
                        <img src="./images/events/BusinessCategoriespage_cardimg.jpg">
                    </div>
                   
                </div> -->
                <div class="Business_profile_decription_profilepage">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dicta harum officia itaque, assumenda voluptates, distinctio perspiciatis sed soluta qui eaque beatae nesciunt voluptatum voluptatibus quis quam nobis, nostrum similique provident? Possimus amet ipsam aut iure recusandae repellat, aliquam quae quo nulla provident modi saepe labore pariatur quis quaerat maxime cumque porro laudantium? Perferendis sed laborum totam eum saepe quos mollitia sint consequatur voluptas repellat possimus ut placeat reiciendis ratione quidem nemo pariatur atque iusto, dicta maxime nulla, omnis molestiae? Nihil iste cum id necessitatibus delectus, temporibus alias laborum corporis, mollitia optio, placeat vel maiores enim! Alias esse magni vel corrupti suscipit animi temporibus, cum, ut ipsa laudantium ratione, dicta sit repellat veniam a! Iste dolorum ipsum temporibus fugit possimus blanditiis doloremque vero, fuga asperiores modi. Illum repellendus, vel aliquam natus dolore sint ratione officiis ullam quis autem incidunt quasi rem debitis minus, possimus, harum consequuntur facilis eaque. Fugiat, cum necessitatibus reiciendis vitae, voluptatum nisi ipsam ad dolorem iure, excepturi in magnam id numquam molestiae natus quia. Fuga consequuntur illum ratione nemo, molestias deserunt deleniti aliquam, doloremque, sunt sed corrupti optio vero impedit. Quo explicabo ex officiis cumque incidunt, sint debitis ipsum tempora corporis nam, nobis exercitationem doloribus non quaerat.</p>  
                </div>

             </div>

        </div>
    </body>
</html>