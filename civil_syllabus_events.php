<?php include 'header.php'; ?>
<br>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Department Courses and Laboratories</title>
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
        .course-table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .course-table th, .course-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .course-table th {
            background-color: #f2f2f2;
        }
        .lab-table {
            width: 100%;
            margin-top: 10px;
            border-collapse: collapse;
        }
        .lab-table th, .lab-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .lab-table th {
            background-color: #f2f2f2;
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
        <div class="header">Civil Engineering Department Courses and Laboratories (2017-18)</div>
        
        <div class="section-header">Courses Details</div>
        <table class="course-table">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>YEAR</th>
                    <th>SEM</th>
                    <th>PROGRAM/BRANCH</th>
                    <th>NAME OF THE COURSE</th>
                    <th>HANDELED BY DEPT.</th>
                </tr>
            </thead>
            <tbody>
                <!-- ODD SEMESTER COURSES DETAILS -->
                <tr>
                    <td>1</td>
                    <td>IV</td>
                    <td>I</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Environmental Engineering – II</td>
                    <td>CIVIL</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>IV</td>
                    <td>I</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Prestressed Concrete</td>
                    <td>CIVIL</td>
                </tr>
                <!-- Add more rows as per your data -->

                <!-- EVEN SEMESTER COURSES DETAILS -->
                <tr>
                    <td>1</td>
                    <td>IV</td>
                    <td>II</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Estimating, Specifications & Contracts</td>
                    <td>CIVIL</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>IV</td>
                    <td>II</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Elective -II: Engineering with Geo-synthetics</td>
                    <td>CIVIL</td>
                </tr>
                <!-- Add more rows as per your data -->
            </tbody>
        </table>
        
        <div class="section-header">Laboratories Details</div>
        <table class="lab-table">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>YEAR</th>
                    <th>SEM</th>
                    <th>PROGRAM/BRANCH</th>
                    <th>NAME OF THE LAB</th>
                    <th>HANDELED BY DEPT.</th>
                </tr>
            </thead>
            <tbody>
                <!-- ODD SEMESTER LABS DETAILS -->
                <tr>
                    <td>1</td>
                    <td>IV</td>
                    <td>I</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Environmental Engineering Lab</td>
                    <td>CIVIL</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>III</td>
                    <td>I</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Geotechnical Engineering Lab</td>
                    <td>CIVIL</td>
                </tr>
                <!-- Add more rows as per your data -->

                <!-- EVEN SEMESTER LABS DETAILS -->
                <tr>
                    <td>1</td>
                    <td>IV</td>
                    <td>II</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>PROJECT</td>
                    <td>CIVIL</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>III</td>
                    <td>II</td>
                    <td>B.Tech/CIVIL (R13)</td>
                    <td>Computer Aided Engineering Drawing</td>
                    <td>CIVIL</td>
                </tr>
                <!-- Add more rows as per your data -->
            </tbody>
        </table>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
