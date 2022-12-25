<?php

include_once "must/header.php";
include_once "classes/PostController.php";
include_once "classes/CompanyPostController.php";

?>

    <!--Box-->
    <section class="infobox">
        <h1>Work with the best if you want to be the best!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis expedita dolore vel porro laborum <br>
            aut sequi doloremquelibero, eum excepturi?</p>
        <a href="joinus.php"><button class="btn joinus-btn">Join Us Now</button></a>
        <a href="freelancers.php"><button class="btn hire-btn">Hire a Freelancer</button></a>
    </section>

    <!--------SlideShow---------------->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/web.jpg" style="width:100%"></a>
            <div class="text">Web Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/mobile.jpeg" style="width:100%"></a>
            <div class="text">Mobile Developers</div>
        </div>

        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/appdev.jpg" style="width:100%"></a>
            <div class="text">Windows App Developers</div>
        </div>
        <div class="mySlides fade">
            <a href="freelancers.php"><img src="images/GD.jpg" style="width:100%"></a>
            <div class="text">Graphic Developer</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    </div>
    </div>
    <!--Services-->
    <section class="services">
        <h1>Services We Offer</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, temporibus!</p>
        <div class="row">
        <img src="data:image/jpeg;base64,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" alt="Description of image">
            <!-- <?php
            // $freelancers= new PostController;
            // $all=$freelancers->readData();
            // for($i=0;$i<count($all);$i++){
            //     echo '<div class="services-col">
            //         <a href="freelancers.php"><h3>'.$all[$i]['postsTitle'].'</h3></a>
            //             <p>'.$all[$i]['postsContent'].'</p>
            //     </div>';
            // }
            ?> -->

            <div class="services-col">
                    <a href="freelancers.php"><h3>TEST</h3></a>
                        <p>TEST</p>
                </div>
        
        </div>
    </section>
    <section class="work-companies">
        <h1>Companies we work with</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, tempore.</p>
        <div class="work">
        <?php
            $freelancers= new CompanyPostController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                echo '<div class="work-col">
                <img src="' .$all[$i]['companyImage'].'" id="logos">
                <a href="index.php">
                     <h3>'.$all[$i]['companyName'].'</h3>
                </a>
                <p>'.$all[$i]['companyContent'].'</p>
                  
                </div>';
            }
            ?>
        </div>
    </section>

    <!--footer-->
    <?php
      include_once "must/footer.php"; 
    ?>