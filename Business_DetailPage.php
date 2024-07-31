<?php
  include 'Server_Connection.php';
  $sql_add = "SELECT * FROM add_business";
  $result = mysqli_query($connect_db,$sql_add);
?>

<html>
    <head>
         <!-- ======== Fontawesome CDN link use for icons ======== -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
         <!-- ========= CSS Link ====== -->
         <link rel="stylesheet" href="style.css">
        <title>First Div Business Detail Page</title>
    </head>
    <body>
        <div class="businessdetailpage">
          <!-- ========================================= First Div Business Detail Page ================================= -->
            <div class="firstdiv_businessdetailpage">
                <!-- ============== One div business detail Page ============== -->
                <div class="one_div_businessdetailpage">
                    <div class="onediv_firstdiv_businessdetailpage">
                        <div class="firstdiv_imagediv_businessdetailpage">
                            <img src="./images/events/ajayimg.jpg">
                        </div>
                        <div class="firstdiv_textdiv_businessdetailpage">
                            <h1>JAIN BROTHER</h1>
                            <h6>"Chalo Har Kisi Ka Movement Bada Kare Enjoy Kare."</h6>
                            <p> Address:<span> Ajay Bhavesh and Samayk nhjfhur ehgue rjhnjh hbvre hvrj findnb yivho b2y vjytfavghvca ghca acbghk gh </span></p>
                            <p>Phone NO:<span>7350234773</span></p>
                            <p>Business Link: <a href="#">https.jainbrother.com</a></p>
                            <p>Email_ID:<span> ajayredasni187@gamil.com</span></p>
                            <a class="firstdiv_textdiv_businessdetailpage" href="tel:91 8721458909  "><button  type="button"><img src="./images/events/images (5).jpeg" alt=""></button></a>
                        </div>
                    </div>
                    <div class="onediv_firstdiv_description_businessdetailpage">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, tempora dolore. Amet tempore sed, provident maiores voluptate illo blanditiis excepturi expedita placeat, architecto a quae nulla laboriosam nesciunt ratione aspernatur in ex. Tempora reiciendis ex qui temporibus aliquid quia cupiditate, modi vel repudiandae esse nulla dolorum officiis tenetur est dolor, reprehenderit fugit inventore in. Debitis incidunt placeat eligendi provident earum ipsum officiis voluptatem soluta itaque ea qui quibusdam officia eaque ex aut, voluptatibus repellendus similique nisi tempora a! Provident accusamus exercitationem quam, sint corporis accusantium nulla enim qui sunt saepe laborum quis ipsum. Officia incidunt sequi placeat, consectetur quia, esse excepturi omnis corporis reiciendis qui non rerum error dicta pariatur libero temporibus rem praesentium veritatis earum cumque aliquam aliquid maiores explicabo. Numquam quod maiores dignissimos voluptatem fugit. Nulla, fugiat! Fugit odit alias enim odio deleniti minus qui repellendus, eos aut voluptatem molestiae. Cupiditate laborum maiores id amet eos. Doloribus, illum.</p>
                    </div>
                </div>
                <!-- ============== Two div business detail Page ============== -->
                <div class="twodiv_businessdetailpage">
                        <?php
                           while($row = mysqli_fetch_assoc($result)):
                            $images = explode(",", $row["Business_image"]);
                             foreach($images as $images):
                         ?>
                    <!-- ============= image slider start ============= -->
                    <div class="container_slider_businessdetailpage"> 
                        <div class="sliders_businessdetailpage">
                            <!-- ============ radio button start =========== -->
                            <input type="radio" name="radio-btn" id="radio1">
                            <input type="radio" name="radio-btn" id="radio2">
                            <input type="radio" name="radio-btn" id="radio3">
                            <input type="radio" name="radio-btn" id="radio4">
                            <!-- ============ radio button end   =========== -->
                            <!-- ============= slide images start ============= -->

                            <div class="slide_businessdetailpage first_businessdetailpage"> <img src="Add_buss_images/<?php echo $image; ?>"> </div> 
                            

                            <!-- <div class="slide_businessdetailpage first_businessdetailpage">
                                <img src="./images/events/ajayimg.jpg" alt="">
                            </div>
                            <div class="slide_businessdetailpage">
                                <img src="./images/events/IMG_0012.JPG" alt="">
                            </div>
                            <div class="slide_businessdetailpage">
                                <img src="./images/events/IMG_0083.JPG" alt="">
                            </div>
                            <div class="slide_businessdetailpage">
                                <img src="./images/events/IMG_0189.JPG" alt="">
                            </div> -->


                            <!-- ============= slide images end   ============= -->
                            <!-- ============ automatic navigation start ============= -->
                            <div class="navigation-auto_businessdetailpage">
                                <div class="auto-btn1_businessdetailpage"></div>
                                <div class="auto-btn2_businessdetailpage"></div>
                                <div class="auto-btn3_businessdetailpage"></div>
                                <div class="auto-btn4_businessdetailpage"></div>
                            </div>
                            <!-- ============ automatic navigation end ============= -->
                        </div>
                        <!-- ============ manual navigation start ================ -->
                        <div class="navigation-manual_businessdetailpage">
                            <label for="radio1" class="manual-btn_businessdetailpage"></label>
                            <label for="radio2" class="manual-btn_businessdetailpage"></label>
                            <label for="radio3" class="manual-btn_businessdetailpage"></label>
                            <label for="radio4" class="manual-btn_businessdetailpage"></label>
                        </div>
                        <?php echo "$image"; endforeach; endwhile; ?>
                        <!-- ============ manual navigation end ================ -->
                    </div>
                    <!-- ============= image slider end   ============= -->
                    <div class="six_div_media_icons_homepage_businessdetailpage">
                        <div class="six_div_icons_homepage_businessdetailpage fb">
                            <a href="https://www.facebook.com/profile.php?id=100005422008161&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        </div> 
                        <div class="six_div_icons_homepage_businessdetailpage twt">
                            <a href="https://twitter.com/BahadeSamyak?s=09"><i class="fab fa-twitter"></i></a>
                        </div> 
                        <div class="six_div_icons_homepage_businessdetailpage int">
                           <a href="https://www.instagram.com/akanhekar/"><i class="fab fa-instagram"></i></a>
                        </div> 
                        <div class="six_div_icons_homepage_businessdetailpage yt">
                           <a href="https://www.youtube.com/@harshuuoo"><i class="fab fa-youtube"></i></a>
                        </div> 
                    </div>

                    <script type="text/javascript">
                        var counter = 1;
                        document.getElementById('radio1').checked = true;
                        setInterval(function ()
                        {
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if( counter > 4)
                             { 
                                counter = 1;
                             }
                        },2000);
                    </script>
                </div>
            </div>
         <!-- ========================================= Second Div Business Detail Page ================================= -->
            <div class="seconddiv_businessdetailpage">
                <div class="sidepic_businessdetailpage">
                    <h1>WHAT WE PROVIRE</h1>
                    <div class="side1_pic_businessdetailpage">
                        <img src="./images/events/sam.JPG">
                    </div>
                    <div class="side1_pic_businessdetailpage">
                        <img src="./images/events/sam.JPG">
                    </div>
                    <div class="side1_pic_businessdetailpage">
                        <img src="./images/events/sam.JPG">
                    </div>
                    <div class="side1_pic_businessdetailpage">
                        <img src="./images/events/sam.JPG">
                    </div>
                </div>
            </div>
            <!-- ========================================= Third Div Business Detail Page ================================= -->
            <div class="third_div_businessdetailpage_businessdetailpage">
                <div class="wright_review_businessdetailpage">
                    <div class="bigstar_businessdetailpage"> <img src="./images/background/55.png" alt=""></div>
                    <div class="fomr_review_businessdetailpage">
                        <img class="star_button_baground_businessdetailpage" src="./images/background/images-removebg-preview.png" alt="">
                        <div>
                            <div class="form_button_holder_businessdetailpage">
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                                <button></button>
                            </div>
                            <textarea class="textarea_businessdetailpage"> </textarea>
                            <button id="submit_review" class="submit_review_businessdetailpage"> submit </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================================= Four Div Business Detail Page ================================= -->
            <div class="fourthdiv_businessdetailpage">
                <div class="fourthdiv_cardholder_businessdetailpage">
                    <div class="fourthdiv_card_businessdetailpage">
                        <img src="./images/events/IMG_0189.JPG" alt="">
                     </div>
                     <div class="fourthdiv_review_businessdetailpage">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sint corporis, voluptas nam ut odio possimus quibusdam provident rerum adipisci suscipit? Repellat libero quos eveniet magnam ipsam tenetur facilis modi eos, quibusdam saepe qui possimus in illum doloremque necessitatibus. Consequatur ullam eligendi, quis minima in ducimus dicta voluptatum officiis odio perferendis, praesentium veritatis quas labore, hic blanditiis accusantium eum nemo velit? Accusantium hic nobis dolor ea quidem maxime deleniti repellendus optio veritatis quia, illum est, quo sit voluptatum nihil facilis reprehenderit! Voluptatum placeat, nulla, quisquam nostrum non quia omnis voluptas corrupti soluta atque odio voluptatem itaque consectetur possimus, quam sequi.S</p>
                     </div>
                     <div class="fourthdiv_reviewstar_businessdetailpage">
                        <img src="./images/background/images-removebg-preview.png" alt="">
                     </div>
                </div>
            </div>
        </div>
    </body>
</html>