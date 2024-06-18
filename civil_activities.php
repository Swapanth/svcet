<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Departmental Activities</title>
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
        .activity-item {
            margin-bottom: 20px; /* Added margin bottom for activity items */
        }
        .activity-year {
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .activity-description {
            margin-left: 20px; /* Adjusted left margin for description */
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
        <div class="header">Civil Engineering Departmental Activities</div>
        
        <div class="activity-year">2015</div>
        <div class="activity-item">
            <div class="activity-description">
                <strong>RCSA (Royal Civil Students Association) Establishment:</strong> Under this society, various academic activities like Seminars, Presentations, Group discussions, Technical Quiz, Industrial Visits, Field work, and Model making are conducted.
            </div>
        </div>
        
        <div class="activity-year">2016-17</div>
        <div class="activity-item">
            <div class="activity-description">
                <strong>Two day national level technical symposium “CONVERGE-2K17”:</strong> Conducted on 27th & 28th February 2017. Activities included Poster presentation, Paper presentation, Technical quiz, Project exposition, Just a minute, Selfie run, and Cultural participation.
            </div>
        </div>
        <div class="activity-item">
            <div class="activity-description">
                <strong>49th Engineers’ Day Celebrations:</strong> Based on the theme of “Skill Development for Young Engineers to Reform the Core Sector: Vision 2025” on 15th September, 2016.
            </div>
        </div>
        
        <div class="activity-year">2017-18</div>
        <div class="activity-item">
            <div class="activity-description">
                <strong>Two day national level technical symposium “CONVERGE-2K18”:</strong> Conducted on 8th & 9th March 2018. Activities included Poster presentation, Paper presentation, Technical quiz, Project exposition, Just a minute, Selfie run, and Cultural participation.
            </div>
        </div>
        
        <div class="activity-year">2018-19</div>
        <div class="activity-item">
            <div class="activity-description">
                <strong>GUEST LECTURE:</strong><br>
                <strong>Name:</strong> Raj Kumar<br>
                <strong>Guest lecture Topic:</strong> PLACEMENT RELATED GUIDANCE HIGHWAY DESIGN<br>
                <strong>Person from institution:</strong> GMR GROUP<br>
                <strong>Date:</strong> 11-09-2018<br>
                <strong>Students Present:</strong> 54
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
