<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="projects.css">
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.3.1/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.3.1/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>



    <div class="nav">
        <div class="navbar">
            <img src="../images/eds-international-copy-164x76.png">
        </div>
        <div class="options">
            <div class="navigate">
                <div class="bur">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <ul class="links op">
                <li class="lin"> <a class="lin" href="../../index.html">HOME</a></li>
                <li class="lin ser">
                    <div>
                        ABOUT <ion-icon name="chevron-down-outline" role="img" class="md hydrated"
                            aria-label="chevron down outline"></ion-icon>
                    </div>
                    <ul class="hon">
                        <li class="CIVIL"> <a class="CIVIL" href="../About-pages/index.html">PROFILE</a></li>
                        <li class="CIVIL"> <a class="CIVIL" href="../certificate/index.html">CERTIFICATES</a> </li>
                        <li class="CIVIL"> <a class="CIVIL" href="../ALL-ABOUT-PAGES/Quality policy/">QUALITY POLICY</a>
                        </li>
                        <li class="CIVIL"> <a class="CIVIL" href="index.html">OUR CLIENTS</a> </li>
                    </ul>
                </li>
                <li class="lin">SERVICES</li>

                <li class="lin flop">
                    <div class="nonp">
                        PROJECT<ion-icon name="chevron-down-outline" role="img" class="md hydrated"
                            aria-label="chevron down outline"></ion-icon>
                    </div>
                    <ul class="hon in">
                        <li class="CIVIL">COMMERCIAL<br></li>
                        <li class="CIVIL">EDUCATION</li>
                        <li class="CIVIL">GOVERNMENT</li>
                        <li class="CIVIL">HEALTHCARE</li>
                        <li class="CIVIL">INDUSTRIAL</li>
                        <li class="CIVIL">RESIDENTAL</li>
                        <li class="CIVIL">SPORTS</li>
                        <li class="CIVIL">BUILDINGS</li>
                        <li class="CIVIL">TRANSPORTATIONS</li>
                        <li class="CIVIL">OFFSHORE</li>
                        <li class="CIVIL">REHABILITATION &amp; STRENGTHENING</li>
                        <li class="CIVIL">COMMUNICATION</li>
                    </ul>
                </li>
                <li class="lin">PAGES</li>
                <li class="lin">CONTACT</li>
            </ul>
        </div>
    </div>
    <!-- navbar END -->




































    <div class="nav2">
        <div class="avr">
            <div class="hoi">
                <ion-icon class="joi" name="menu-outline"></ion-icon>
            </div>
            <ul class="vip">
                
     <?php
        require('../Admin-page/db_config.php');
        $query = "SELECT * FROM `category`";
        $run_query = mysqli_query($conn, $query);
        if(mysqli_num_rows($run_query) > 0) {
          while($row = mysqli_fetch_assoc($run_query)) {
            $category=$row['category'];
            echo "<li class='logg acctive'>$category</li>";
          }
        }
        ?>

            </ul>
        </div>
    </div>










<?php
        require('../Admin-page/db_config.php');
        $query = "SELECT * FROM `project`where category_id=1";
        $run_query = mysqli_query($conn, $query);
        if(mysqli_num_rows($run_query) > 0) {
          while($row = mysqli_fetch_assoc($run_query)) {
            $name = $row['Name'];
            $slogan = $row['slogan'];
            $desc = $row['Description'];
            $image1 = $row['Images'];
            $image2 = $row['Images1'];
            $image3 = $row['Images2'];
            echo " <div class='content'>
        <div class='clas'>
            <div
                class='swiffy-slider slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-nav-autoplay slider-indicators-round slider-indicators-dark slider-indicators-highlight'>
                <ul class='slider-container'>
                    <li><img src='images/$image1'
                            style='max-width: 100%;height: auto;'></li>
                    <li><img src='images/$image2'
                            style='max-width: 100%;height: auto;'></li>
                    <li><img src='images/$image3'
                            style='max-width: 100%;height: auto;'></li>
                </ul>

                <button type='button' class='slider-nav'></button>
                <button type='button' class='slider-nav slider-nav-next'></button>

                <div class='slider-indicators'>
                    <button class='active'></button>
                    <button></button>
                    <button></button>
                </div>
            </div>
        </div>
        <div class='right-content'>
            <div class='jimk'>
                <h1 class='lio'>$name</h1>
                <h3 class='ligh'>$slogan</h3>
                <p class='para'> $desc</p>
            </div>
        </div>

    </div>




    
    </div>

        ";
          }
        }
        ?>
        
   

    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>