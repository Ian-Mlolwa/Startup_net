<?php

    $con = mysqli_connect("localhost", "root", "", "Huru");

    if(!$con) {
        die("ERROR: Could not connect."
            .mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        //something was posted
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $phone_number = $_REQUEST['phone_number'];
        $join_as = $_REQUEST['join_as'];
        $comment = $_REQUEST['comment'];
        
        //save to database
        $sql = "INSERT INTO Registered_Users Values ('$name','$email','$address','$phone_number','$join_as','$comment')";
        if($con -> query($sql) == TRUE); {
            echo '<div class="alert alert-primary" role="alert">
                    Your Info Is Submitted Succesfully!
                  </div>';
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
              <li><a href="https://www.linkedin.com/company/huru-startup-network/about/?viewAsMember=true"><i class="fa fa-facebook"></i></a></li>
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
                          <li class="scroll-to-section"><a href="index.php">Back</a></li>
                          
                          <!--
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              
                              <ul class="sub-menu">
                                  <li><a href="#top">Upcoming Meetings</a></li>
                                  <li><a href="#top">Meeting Details</a></li>
                              </ul>
                          
                          </li>
                        
                          <li class="has-sub">
                            <a href="javascript:void(0)">Bookstore</a>
                            <ul class="sub-menu">
                                <li><a href="#top">Buy books</a></li>
                                <li><a href="#top">Stationary & Appliances</a></li>
                            </ul>
                        </li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li> 
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 

                      -->
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
              <h6>Hello entrepreneurs!</h6>
              <h2>Welcome to Huru Startup Network</h2>
              <p>We are a community that connects youth and women innovators/ founders with co-founders, mentors, inevstors and key industry experts to help them bring their innovative ideas to life..</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#" onclick="history.back()">Back</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  </html>