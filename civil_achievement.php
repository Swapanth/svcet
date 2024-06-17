<?php include 'header.php'; ?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Achievements</title>
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
            font-weight: bold;
            font-size: 32px;
            margin-bottom: 20px;
        }
        .section-header {
            font-weight: bold;
            font-size: 24px;
            margin-top: 30px; /* Increased margin-top for better spacing */
            margin-bottom: 10px; /* Added margin-bottom for better separation */
            border-bottom: 2px solid #333; /* Added border bottom for section headers */
            padding-bottom: 5px; /* Added padding bottom for section headers */
        }
        .achievement-item {
            margin-left: 20px; /* Adjusted left margin */
            margin-bottom: 10px; /* Added margin bottom for achievement items */
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
        <div class="header">Civil Engineering Achievements</div>
        
        <div class="section-header">Latest Achievements</div>
        <div class="achievement-item">
            <a href="#">Faculty published 12 research papers in various journals and presented in various conferences during the academic years from 2014-2017.</a>
        </div>
        
        <div class="section-header">Individual Academic Achievements</div>
        <div class="achievement-item">
            <strong>1) In III/II(3rd Year 2nd Sem) K DILESHWARA RAO (15MT5A0109) Achieves 82.78%</strong>
        </div>
        <div class="achievement-item">
            <strong>2) In II/II(2nd Year 2nd Sem) CH RAJEE SWARAJ (16MT5A0104) Achieves 84.68%</strong>
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
