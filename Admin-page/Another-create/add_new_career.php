<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


    <div class="nav">
        <div class="navbar">
          <img src="../../images/eds-international-copy-164x76.png" />
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
            <li class="lin"><a class="lin" href="../../index.html">HOME</a></li>
            <li class="lin ser">
              <div>
                ABOUT
                <ion-icon
                  name="chevron-down-outline"
                  role="img"
                  class="md hydrated"
                  aria-label="chevron down outline"
                ></ion-icon>
              </div>
              <ul class="hon">
                <li class="CIVIL">
                  <a
                    class="CIVIL"
                    href="../ALL-ABOUT-PAGES/About-pages/index.html"
                    >PROFILE</a
                  >
                </li>
                <li class="CIVIL">
                  <a
                    class="CIVIL"
                    href="../ALL-ABOUT-PAGES/certificate/index.html"
                    >CERTIFICATES</a
                  >
                </li>
                <li class="CIVIL">
                  <a
                    class="CIVIL"
                    href="../ALL-ABOUT-PAGES/Quality policy/index.html"
                    >QUALITY POLICY</a
                  >
                </li>
                <li class="CIVIL">
                  <a
                    class="CIVIL"
                    href="../ALL-ABOUT-PAGES/Our clients/index.html"
                    >OUR CLIENTS</a
                  >
                </li>
              </ul>
            </li>
            <li class="lin">
              <a class="lin" href="../ALL-SERVICES/index.html">SERVICES</a>
            </li>
  
            <li class="lin flop">
              <div class="nonp">
                PROJECT<ion-icon
                  name="chevron-down-outline"
                  role="img"
                  class="md hydrated"
                  aria-label="chevron down outline"
                ></ion-icon>
              </div>
              <ul class="hon in">
                <li class="CIVIL">COMMERCIAL<br /></li>
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
            <li class="lin">
              <a class="lin" href="../CAREER-PAGE/index.html">CAREER</a>
            </li>
            <li class="lin">
              <a class="lin" href="../ALL-CONTACT-PAGES/index.html">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- navbar END -->

<form action="" method="post">
<div class="fom">
    <h1  class="ad">Add forum</h1>




    <div class="user">
        <p class="nuim">Title:</p>
        <input type="text" class="tex" name="title">
    </div>

    <div class="user">
        <p class="nuim">Position:</p>
        <input type="text" class="tex" name="position">
    </div>



    <div class="user user2">
        <p class="nuim">Description:</p>
        <textarea class="tex tex1"  cols="30" rows="10" name="description"></textarea>

    </div>

    
    <input type="submit" class="btn1" name="submit"></input>



    
</div>

</form>

































      <script src="app.js"></script>
      <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
      ></script>
</body>
</html>

<?php
require('../db_config.php');
if(isset($_POST['submit'])) {
$title = $_POST['title'];
$position = $_POST['position'];
$description = $_POST['description'];
$query = "INSERT INTO `careers`(`title`, `position`, `description`, `created_date`) 
VALUES ('$title','$position','$description','')";
 $run_query = mysqli_query($conn, $query);

 if($run_query){
  echo "<script>window.location.assign('../index.php')</script>";
 }
 else{
   echo "<script>alert('Sorry')</script>";
 }
}
?>