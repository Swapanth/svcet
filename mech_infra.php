<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanical Engineering Labs, Department & Classroom Furniture Details</title>
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
            margin-bottom: -200px;
        }
        .content {
            font-size: 18px;
        }
        .link {
            text-align: center;
            margin-top: 20px;
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
            <div class="header"> </div>
            <h3 style = "text-align:center; font-weight:600";>MECHANICAL ENGINEERING</h3>
            <h2 style = "text-align:left; color :darkblue";>LABS, DEPARTMENT & CLASSROOM FURNITURE DETAILS</h2>
            
                <div class="link">
                    <a href="soon.php" target="_blank">Click Here For Latest Labs and Other Infra</a>
                </div>
            </div>
        </div>
    </div>  
    
    <?php include 'footer.php'; ?>
</body>
</html>
