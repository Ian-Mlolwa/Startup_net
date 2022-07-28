<?php
    $con = mysqli_connect("localhost", "root", "", "Huru");

    if(!$con) {
      die("ERROR: Could not connect."
        .mysqli_connect_error());
    }

    if($_SERVER)
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
    
      table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td, th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      tr{background-color: #f2f2f2;}

      th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
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
              <select name="join_as" id="join_as">
                <option value="all"selected disabled>Filter</option>
                <option value="software-engineer/developer">Software engineer/Developer</option>
                <option value="technical co-founder">Technical Co-founder</option>
                <option value="angel-investor">Angel Invester</option>
                <option value="vc-firm">Vc firm</option>
                <option value="donor/philanthropist">Donor/Philanthropist</option>
                <option value="mentor">Mentor</option>
                <option value="entusiast">Enthusiast</option>
              </select>
              <div class="container2">
                <table>
                  <tr>
                    <th>Join_As</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone_Number</th>
                    <th>Address</th>
                  </tr>

                  <?php
                  
                  $query = "SELECT * FROM Registered_Users";
                  $r= mysqli_query($con, $query);
                  while($row = mysqli_fetch_assoc($r)){
                    ?>
                    <tr>
                      <td><?php echo $row['Join_As'];?></td>
                      <td><?php echo $row['Name'];?></td>
                      <td><?php echo $row['Email'];?></td>                          
                      <td><?php echo $row['Phone_Number'];?></td>
                      <td><?php echo $row['Address'];?></td>                          
                    </tr>
                    <?php
                  }
                    ?>
                </table>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </div>
  </section>
                  

  <script type="text/javascript">
    $(document).ready(function(){
      $("#join_as").on('change',function(){
        var value = $(this).val();
        //alert(value);
        
        $.ajax({
          url:"fetch.php",
          type:"POST",
          data:'request=' + value,
          beforeSend:function(){
            $(".container2").html("<h2>Working...</h2>");
          },
          success:function(data){
            $(".container2").html(data);
          }
        });
      });
    });
  </script>
  <!-- ***** Main Banner Area End ***** -->
  </html>