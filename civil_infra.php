<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civil Engineering Department Resources</title>
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
    </style>
</head>
<body>
<div class="row">
    <?php include "civilmenu.php"; ?>

    </div>  
<div class="all-content">
    <div class="main-container">
        <div class="header">Civil Engineering Department Resources</div>
        
        <div class="section-header">Department Physical Resources:</div>
        <div class="resource-item">
            <strong>Class Rooms:</strong> 03
        </div>
        <div class="resource-item">
            <strong>Laboratories:</strong> 06
        </div>
        <div class="resource-item">
            <strong>Staff Rooms:</strong> 01
        </div>
        <div class="resource-item">
            <strong>HOD Room:</strong> 01
        </div>
        <div class="resource-item">
            <strong>Computing Facility in Labs:</strong> 60 Systems
        </div>
        <div class="resource-item">
            <strong>Internet Facility:</strong> 20 Mbps
        </div>
        <div class="resource-item">
            <strong>Department Library:</strong> 01
        </div>
        <div class="resource-item">
            <strong>UPS - 20 KVA:</strong> 01
        </div>
        <div class="resource-item">
            <strong>LCD Projectors:</strong> 01
        </div>
        <div class="resource-item">
            <strong>OHPs:</strong> 01
        </div>
        <div class="resource-item">
            <strong>Printers:</strong> 01
        </div>
        
        <div class="section-header">DEPARTMENT LIBRARY:</div>
        <div class="library-info">
            <table class="library-table">
                <tr>
                    <th>Category</th>
                    <th>Count</th>
                </tr>
                <tr>
                    <td>Books</td>
                    <td>62</td>
                </tr>
                <tr>
                    <td>Journals (International)</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>Journals (National)</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>CDs, VCDs, Multimedia</td>
                    <td>-NIL-</td>
                </tr>
                <tr>
                    <td>Any Other</td>
                    <td>-NIL-</td>
                </tr>
            </table>
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
