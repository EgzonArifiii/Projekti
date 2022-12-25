<?php

include_once "must/header.php";
include_once "classes/StaffController.php";

?>
    <section class="post-header">
            <h1>About Us</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, inventore!</p>
    </section>
    <section class="container-aboutus">
        <h1>OUR TEAM</h1>
        <p>Lorem ipsum dolor sit amet, consectetur  elit. Corporis, repellat?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, repellat?</p>
        <div class="content">
        <img src="https://www.salesforce.com/blog/wp-content/uploads/sites/2/2021/03/improve-team-efficiency-productivity-header.jpg" alt="Description of image" width="600" height="300">

        <!-- <?php
            $freelancers= new StaffController;
            $all=$freelancers->readData();
            for($i=0;$i<count($all);$i++){
                  echo ' <figure id="fig1">
                <img src="' .$all[$i]['staffImage'].'" width="150px">
                <ul>
                     <li><h3>'.$all[$i]['staffName'].'</h3></li>
                     <li><p>'.$all[$i]['staffContent'].'</p></li>
                </ul>
                </figure>'; 
            }
            ?> -->

        
<footer>    
<!--footer-->
<?php
    include_once "must/footer.php"; 
    ?>