<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronics & Communication Engineering Department</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body> 
    <div class="row">
        <?php include "ecemenu.php"; ?>
    </div>  
    
    <div role="main" class="main">
        <div class="container">
            <div class="all-content">
                <br>
                <div class="header">Electronics & Communication Engineering- Staff Details</div>
                
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>Name of the Faculty</th>
                        <th>Qualification</th>
                        <th>Designation</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>D.Tirumala Rao</td>
                        <td>ME</td>
                        <td>Associate Professor & HOD</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>P Mohan Krishana</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>A Uday Kumar</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>K.Srinivas</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>A Sridhar</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>B.Vijaya Bhaskara Rao</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>T.Chandra Gupta</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>G Manmada Leela</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>G Jagadeesh</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>M Latchumu Naidu</td>
                        <td>M.Tech</td>
                        <td>ASST. PROFESSOR</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>  

    <?php include 'footer.php'; ?>

</body>
</html>
