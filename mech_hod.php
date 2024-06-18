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
        }
        .content {
            font-size: 18px;
        }
        .all-content {
            margin-top: -290px;
            margin-left: 80px;
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
                    <h2>HOD Message</h2>
                    <p>Mechanical engineering department was established in the year 2009. The department is offering four year B.Tech (Mechanical Engineering) with an intake of 60 students during year 2009. The intake in U.G Programme was increased from 60 to 120 in the year 2013. The department also started PG Programme in the specialization “Thermal Engineering” from year 2014 with an intake of 18 students. The strength of the department lies with dedicated and enthusiastic staff and most of them are well qualified from reputed institutions with different specialization and experienced. The faculty is focused towards inculcating technical creativity in the students along with theoretical as well as practical knowledge. The excellent facilities are available to achieve this aim. The department is having well equipped laboratories and provides excellent facilities for gaining practical knowledge. The main beauty of the department is that, each one of the student will undergo Summer/winter Internships during II & III year at different core industries to get practical exposure along with theoretical knowledge.</p>
                    <p>Mr. B. Gangadhar M.Tech., (Ph.D)<br>
                    Assoc. Prof. HOD, ME</p>
                    
                    </div>
            </div>
        </div>
    </div>  
    
    <?php include 'footer.php'; ?>
</body>
</html>
