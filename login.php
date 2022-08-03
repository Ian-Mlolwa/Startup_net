<?php
session_start();

  include("connection.php");
  include("function.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
      //something was posted
      $username = $_POST['username'];
      $password = $_POST['password'];
      $password = md5($password);

      if(!empty($username) && !empty($password) && !is_numeric($username))
      {

          //read from database
          $query = "SELECT * FROM admin WHERE username = '$username' limit 1";
          $result = mysqli_query($con, $query);

          if($result)
          {
              if($result && mysqli_num_rows($result) > 0)
              {
                  
                  $user_data = mysqli_fetch_assoc($result);

                  if($user_data['password'] === $password)
                  {
                      $_SESSION['id'] = $user_data['id'];
                      header("Location: admin.php");
                      die;        
                  }
              }
          }

          header("location:login.php?Invalid= Incorrect Username or Password");
      }
       else
      {
          header("location:login.php?Empty=Can't be NULL!");
      }
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Rems School">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <title>Huru Startup Network</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
<!--table report style-->
    <style>
      img {
          border-radius: 4px;
          height: 100px;
          width: 100px;
          margin-right:-20px;
          margin-left: -100px;
        }
    </style>
  </head>

<body>

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li><a href="https://web.facebook.com/hurunetwork"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/HuruNetwork"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/company/huru-startup-network/about/?viewAsMember=true"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                      <img src="logo.png" height="50px" width="5px">HURU STARTUP NETWORK
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="index.php">LOGIN</a></li>
                          
         
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">

           
  <section class="contact-us" id="contact">
    <div class="container">


      <div class="col-lg-12">
        <div class="section-heading">
          <h2>LogIn</h2>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">

            <form id="contact" method="post">
            <div>
                    <?php
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                    <?php echo "<p style='color:red;'>" .$_GET['Empty'] ?>
                    <?php
                        }
                    ?>

                    <?php
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                    <?php echo "<p style='color:red;'>" .$_GET['Invalid'] ?>
                    <?php
                        }
                    ?> <br>
                </div>
                <div class="row">
                <label for="username">Admin Name</label>
                  <input type="text" placeholder="username" name="username">
                <label for="password">Password</label>
                  <input type="password" placeholder="password" name="password">
                <div class="col-lg-4">
                  <button type="submit" class="submit" name="login">Submit</button>
                </div>

                </div>
              </form>
              
            </div>
          </div>   
        </div>
      </div>
    </div>
  </section>
                  


  <!-- ***** Main Banner Area End ***** -->
  </html>