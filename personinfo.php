<?php
/**
 * Created by PhpStorm.
 * User: hp-pc
 * Date: 11/25/2018
 * Time: 16:17
 */
session_start();
 include 'includes_folder/connect.php';
 $id=32363633;


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="styles/css/bootstrap.css">
    <link rel="stylesheet" href="styles/css/mystyles.css">
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="styles/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="styles/css/bootstrap-grid.css">
    <link rel="stylesheet" href="styles/css/bootstrap-grid.min.css">
    
    <title>Personal Profile</title>
</head>
<body>
<?php require 'includes_folder/perheader.php';?>

<div class="container-fluid">

        <!--I WANT THIS AS MY BODY SECTION(80%)-->
    <div class="row bodyheight">
            <div class="col-md-2 col-sm-3 col-xs-5 bg-primary">
            
            <div class="card w-100 mt-3 mb-2">
  <div class="card-header">
    Main Menu
  </div>
  <ul class="list-group list-group-flush khover">
    <li class="list-group-item">    <a href="#">DashBoard</a></li>
    <li class="list-group-item"> <a href="#">Applications</a></li>
    <li class="list-group-item"> <a href="#">Payments</a></li>
    <li class="list-group-item"> <a href="#"> Profile</a></li>
    <li class="list-group-item"> <a href="#"> Contact Us</a> </li>
    <li class="list-group-item"> <a href="#"> View Job Postings</a></li>
  </ul>
</div>

            </div>

                <div class="col-md-8 col-sm-9 col-xs-7 bg-light">
                
                        
<div class="row ">
    <div class="col-lg-3 col-md-4">
        <img class="img-fluid rounded-left border border-warning" src="images/headerimage1.png">
    </div>
    <div class="col-lg-5 col-md-4 mt-2 mb-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold font-underlined">Personal Info</h4>
                    <hr>
                    <p class="card-text">
                        Name: <?php 
                        if($qr=mysqli_query($con,"SELECT * FROM basic_info_table WHERE `id_number`='$id'")){
                            $ar=mysqli_fetch_array($qr);
                            echo $ar['first_name'] ." ". $ar['other_names'];

                        }
                        ?><br>
                        ID No: <?=$ar['id_number'];?> <br>
                        Gender: <?=$ar['gender'];?> <br>
                        Home County: <?php $code=$ar['county'];
                        $county=mysqli_query($con,"SELECT `county_name` FROM `counties_table` WHERE `county_id`='$code'");
                        $arr=mysqli_fetch_array($county);
                        echo $arr['county_name'];
                        
                        ?> <br>
                    </p>
                </div>
            </div>

    </div>
    <div class="col-lg-4 col-md-4 col-md-4 mt-2 mb-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title font-weight-bold font-underlined">Contacts Info</h4>
                <hr>
                <p class="card-text">
                    Phone: <?=$ar['phone'];?>
                    <br> Email: <?=$ar['email'];?>
                    <br> Twitter: @vivian32oseko
                </p>
    
            </div>
        </div>
    
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <p class="font-weight-bolder text-center">Education Details</p>
        <hr>
    </div>
</div>

<div class="row justify-content-md-center">
     <div class="col-md-7  col-sm-12">
         <div class="card edurow bg-dark text-success">
            <div class="card-body">
                <h4 class="card-title font-weight-bold font-underlined">Education</h4>
                <hr>
                <p class="card-text">
                    Phone: <?=$ar['phone'];?>
                    <br> Email: <?=$ar['email'];?>
                    <br> Twitter: @vivian32oseko
                </p>
    
            </div>
        </div>
    </div>

     <div class="col-md-5 col-sm-12">
         <div class="card edurow bg-dark text-light">
            <div class="card-body">
                <p class="card-title font-weight-bold text-underline">Work Status && Experience </p>
               
                <p class="card-text">
                    Phone: <?=$ar['phone'];?>
                    <br> Email: <?=$ar['email'];?>
                    <br> Twitter: @vivian32oseko
                </p>
                 <p class="card-text">
                    Phone: <?=$ar['phone'];?>
                    <br> Email: <?=$ar['email'];?>
                    <br> Twitter: @vivian32oseko
                </p>
                 <p class="card-text">
                    Phone: <?=$ar['phone'];?>
                    <br> Email: <?=$ar['email'];?>
                    <br> Twitter: @vivian32oseko
                </p>
    
            </div>
        </div>
    </div>

</div>



                </div>

                <div class="col-md-2 col-sm-12 col-xs-12 bg-primary">
                <p>Card details go here</p>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/headerimage1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img/cityw.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/img/lion.jpg" alt="Third slide">
    </div>
  </div>
</div>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


                </div>
    </div>

    <!--MY FOOTER SECTION 10% TOTAL PAGE HEIGHT-->
    <div class="row myfooterheight">
    <div class="col-md-5 col-sm-5 col-xs-12 bg-dark">
    <p>5/12 of footer section</p>
    </div>

    <div class="col-md-7 col-sm-7 col-xs-12 bg-dark">
    <p>7/12 of footer division</p>
    
    </div>
    
    
    
    </div>





</div>

</body>
</html>