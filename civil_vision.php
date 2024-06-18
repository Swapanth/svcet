<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Vision and Mission</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .main-container {
            max-width: 800px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            font-weight: 1000;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .section-header {
            font-weight: bold;
            font-size: 24px;
            margin-top: 20px;
            text-align: center;
        }
        .content {
            font-size: 18px;
            margin-top: 10px;
        }
        .mission-item {
            margin-top: 10px;
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
    <div class="all-content">
    <div class="main-container">
        <div class="all-content">
        <div class="header">Civil Engineering</div>
        <div class="content">
            <div class="section-header">VISION:</div>
            <p>Emerge as a center of Pre-Eminence in CIVIL Education, Research And Services</p>
            
            <div class="section-header">MISSION:</div>
            <div class="mission-item">
                <strong>M1:</strong>
                <p>To produce graduates with scientific and technical knowledge and excellent Civil engineering skills for professional practice, employment, advanced study and research.</p>
            </div>
            <div class="mission-item">
                <strong>M2:</strong>
                <p>To inculcate professional and ethical values related to industry, society and environment.</p>
            </div>
            <div class="mission-item">
                <strong>M3:</strong>
                <p>To interact with industries, to meet their requirements through employable graduates.</p>
            </div>
        </div>
    </div>
    </div>
</div>
    
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
