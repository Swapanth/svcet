<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanical Engineering Department</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            text-align: justify;
        }
        .header {
            text-align: center;
            font-weight: 1000;
            font-size: 32px;
            margin-bottom: 20px;
            margin-top:-320px;

        }
        .content {
            font-size: 18px;
        }
        .all-content {
            margin-top: 20px;
            margin-left: 20px;
        }
        .syllabus {
            margin-top: 20px;
        }
        .events {
            margin-top: 20px;
            text-align: center;
        }
        .events img {
            max-width: 100%;
            height: auto;
        }
        .col-md-3 {
            width: 30%;
            margin-top: 180px;
            margin-left: 10px;
            margin-right: 10px;
            height: 100%;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body> 
    <div class="row">
        <?php include "mechmenu.php"; ?>
    </div>  
    
    <div role="main" class="main">
        <div class="container">
            <div class="all-content">
                <div class="header">MECHANICAL ENGINEERING</div>
                <div class="content">
                   
                    <div class="syllabus">
                        <h2 style="color:violet;">Syllabus :</h2>
                        <ul>
                            <li ><a href="https://svcet.info/">R13 B.Tech (Mechanical Engineering)</a>   </li><br>
                            <li ><a href="https://svcet.info/">R16 B.Tech (Mechanical Engineering)</a></li><br>
                            <li></l><a href="https://svcet.info/">R16 M.Tech (Thermal Engineering)</a></li>
                        </ul>
                    </div>
                    
                    <div class="events">
                        <h2>Events Gallery</h2>

                        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\slides\slide-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\slides\slide-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img\slides\slide-1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><br><br>
                        <!-- Add more images as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <?php include 'footer.php'; ?>
</body>
</html>
