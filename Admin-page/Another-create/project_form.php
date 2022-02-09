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


<div class="fom">
    <h1  class="ad">Add forum</h1>




    
<form method="POST" enctype='multipart/form-data'>
    <div class="user">
        <p class="nuim">Name</p>
        <input type="text"  name="name" class="tex">
    </div>
    
    <div class="user">
        <p class="nuim">Slogan</p>
        <input type="text" name="slogan" class="tex">
    </div>

   

    <div class="user">
        <p class="nuim">Select Image</p>
        <input type="file" name="images1">
        <input type="file" name="images2">
        <input type="file" name="images3">
    </div>

    <div class="user user2">
        <p class="nuim">Description</p>
        <textarea class="tex tex1" name="desc"  cols="30" rows="10"></textarea>

    </div>

    <div class="user user2">
        <p class="nuim">Category</p>
        <select name="cate" id="chose">
          <?php 
        
        require('../db_config.php');
  
                            $dquery = "SELECT * FROM `category` ";
                            $rundquery = mysqli_query($conn, $dquery);
                            if(mysqli_num_rows($rundquery)) {
                                while($rows = mysqli_fetch_assoc($rundquery)) {
                                $id = $rows['Id'];
                                $dept = $rows['category'];
                          
                            echo "<option value='$id'>$dept</option>";
                            
                           }
                            }
                        ?>

        </select>

    </div>
    <input type="submit" name = "submit" class="btn1"></input>



    
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

$posterstargetDir = '../../projects/images/';

if(isset($_POST['submit']) ) {

  $name = $_POST['name'];
  $slogan = $_POST['slogan'];
  $desc = $_POST['desc'];
  $cate = $_POST['cate'];
  $images1 = $_FILES['images1']['name'];
  $images2 = $_FILES['images2']['name'];
  $images3 = $_FILES['images3']['name'];


  $targetPosterFilePath1 = $posterstargetDir . $images1;
  $targetPosterFilePath2 = $posterstargetDir . $images2;
  $targetPosterFilePath3 = $posterstargetDir . $images3;
  $posterFileType1 = pathinfo($targetPosterFilePath1, PATHINFO_EXTENSION);
  $posterFileType2 = pathinfo($targetPosterFilePath2, PATHINFO_EXTENSION);
  $posterFileType3 = pathinfo($targetPosterFilePath3, PATHINFO_EXTENSION);

  // Allow certain file formats
  $allowPosterTypes = array('jpg','png','jpeg','gif','pdf');

  if(!(in_array($posterFileType1, $allowPosterTypes))) {
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload in Poster field';
  }
   if(!(in_array($posterFileType2, $allowPosterTypes))) {
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload in Poster field';
  }
   if(!(in_array($posterFileType3, $allowPosterTypes))) {
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload in Poster field';
  }

  if(in_array($posterFileType1, $allowPosterTypes)&&
    in_array($posterFileType2, $allowPosterTypes)&&
    in_array($posterFileType3, $allowPosterTypes)) {
    // Upload file to server
    if(move_uploaded_file($_FILES['images1']['tmp_name'], $targetPosterFilePath1)) {
      
      $insertQuery = "INSERT INTO `project`(`Name`, `Description`, `Created_Date`, `Images`, `Images1`, `Images2`, `category_id`, `slogan`) VALUES ('$name','$desc','','$images1','$images2','$images3','$cate','$slogan')";
      $runQuery = mysqli_query($conn, $insertQuery);

      if($runQuery) {
        echo"<script>alert('Data send Successfully')</script>";

      }
      else{
        echo"<script>alert('Error')</script>";
      } 
    }
    else{
      echo"<script>alert('Message Error')</script>";
    }


  }


}

?>