<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
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

    <div class="tabel">
      <h1 class="mail">Select email address to change</h1>

      <table id="customers">
        <tr>
          <th>E-MAIL ADDRESS</th>
          
          <th>PRIMARY</th>
          <th>VERIFIED</th>
        </tr>
        <?php
        require('../db_config.php');
        $query = "SELECT * FROM `category`";
        $run_query = mysqli_query($conn, $query);
        if(mysqli_num_rows($run_query) > 0) {
          while($row = mysqli_fetch_assoc($run_query)) {
            $id = $row['Id'];
            $category=$row['category'];
            echo "<tr>
            <td> <a href='../Another-create/update_category.php?id=$id' class='jio'>$category</a> </td>
            
            <td>  <div class='lop'>
                <ion-icon class='kil' name='checkmark-outline'></ion-icon>
              </div>
              </td>
              <td>  <div class='lop'>
                <ion-icon class='kil' name='checkmark-outline'></ion-icon>
              </div>
              </td>
            
  ";
          }
        }
        ?>
        


     
      </table>
    </div>

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
