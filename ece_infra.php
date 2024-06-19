<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECE Engineering Department Resources</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        .main-container {
            max-width: 1000px;
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
        .resource-item {
            margin-left: 20px; /* Adjusted left margin */
            margin-bottom: 10px; /* Added margin bottom for resource items */
        }
        .library-info {
            margin-left: 20px; /* Adjusted left margin */
            margin-top: 10px; /* Added margin top for library info */
        }
        .library-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px; /* Added margin top for the table */
        }
        .library-table th, .library-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .library-table th {
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
       .lab-item {
            margin-top: 20px;
            text-align: center;
       }
       .lab-item img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 10px;
       }
    </style>
</head>
<body>
<div class="row">
    <?php include "ecemenu.php"; ?>
</div>  
<div class="all-content">
    <div class="main-container">
        

        <div class="section-header">LABORATORIES:</div>
        <div class="row">
            <div class="col-md-4 lab-item">
                <img src="img\ece\microwavelab.png" alt="Digital Electronics Lab">
                <div>Microwave Engineering Lab</div>
            </div>
            <div class="col-md-4 lab-item">
                <img src="img\ece\analoganddigitallab.png" alt="Microprocessors and Microcontrollers Lab">
                <div>Analog and Digital IC Applications Lab (STLD/AICA)</div>
            </div>
            <div class="col-md-4 lab-item">
                <img src="img\ece\softwarelab.jpg" alt="Communication Systems Lab">
                <div>Software Lab (MPMC/DSP/VLSI)</div>
            </div>
            <div class="col-md-4 lab-item">
                <img src="img\ece\electronicslab.jpg" alt="VLSI Design Lab">
                <div>Electronics Lab (EDC/ECA)</div>
            </div>
            <div class="col-md-4 lab-item">
                <img src="img\ece\aclab.jpg" alt="Signal Processing Lab">
                <div>Analog and Digital Communication Lab (AC/DC)</div>
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
