<?php
$con = ('localhost', 'root', '', 'eds');
session_start();
   if(isset($_POST['login']){

   $email= $_POST['email'];
   $password= $_POST['password'];

   $select = "SELECT * FROM user WHERE Email = '$email' and Password = '$password'";
   $query = mysqli_query($con ,$select);
   $count = mysqli_num_rows($query);

    
	if(mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_array($query)) {

			$db_email = $row['Email'];
			$db_password = $row['Password'];
			
				if($db_email == 'admin@stexity.com' && $db_password == '1234') {
					echo "<script>window.location.assign('pending_requests.php')</script>";
				}
			
		}
	}

	else {
		echo  "<script>alert('Your Login Name or Password is invalid')</script>";
	}   

    }


?>


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
            <img src="./eds-international-copy-164x76.png">
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
















    <div class="niopp">
        <form class="rection" action="#" method="post">
            <img class="ritu" src="../images/eds-international-copy-164x76.png" alt="">
            <h1 class="headeing">Login</h1>
            <input class="email" name="email" placeholder="Email" type="text">
            <input class="email" name="password" placeholder="Password" type="password">
            <div class="kop">
                <button class="btn1" name="login">Login</button>
            </div>
            <!-- <a class="for" href="#">Forgotten password?</a>
          <button class="btn2">Create New Account</button> -->
        </form>
    </div>

































    <script src="app.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>