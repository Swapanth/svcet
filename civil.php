<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Civil Engineering Department Profile</title>
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
        }
        .content {
            font-size: 18px;
        }
       
        .all-content{
            margin-top: -290px;
            margin-left: 80px;
        }

       .col-md-3{
            width: 30%;
            margin-top: 180px;
            margin-left: 10px;
            margin-right: 10px;
            height: 100%;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
       }

       
    </style>
</head>
    

<body> 
<div class="row">
    <?php include "civilmenu.php"; ?>

    </div>  
    
<div role="main" class="main">
        <div class="container">
            <div class="all-content">
            <div class="header">DEPARTMENT PROFILE</div>
            <div class="content">
                <p>The Civil Engineering Department of SVCET was established in 2014 with an intake of 60. The department is currently offering B.Tech in Civil Engineering. The Civil Engineering Department has the state-of-the-art infrastructure with well-equipped labs, and a computer center spread over an area of 500 sq.m. They are supported by experienced and qualified faculty. The laboratory facilities are available in all subject areas of Civil Engineering such as Engineering Geology, Environmental Engineering, Computer-aided analysis and design, Surveying, Geo-Technical Engineering, Concrete and Highway Engineering, Strength of Materials, Fluid Mechanics, and Hydraulics Machinery.</p>
                <p>The Department is equipped with software such as STAAD-pro. In addition to the regular curriculum, the department is offering add-on courses on communication skills for enriching the competitive knowledge of the students and preparing them for better employability. Students are also engaged in project work that meets the needs of the social body in the surrounding situations as well as in research projects.</p>
            </div>
        </div>
    </div>    
</div>  
    <br><br><br>
    <?php include 'footer.php'; ?>
</body>
</html>
