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
        <?php include "mechmenu.php"; ?>
    </div>  
    
    <div role="main" class="main">
        <div class="container">
            <div class="all-content">
                <div class="header">MECHANICAL ENGINEERING - Staff Details</div>
                
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>Name of the Staff Member</th>
                        <th>Contact No & Mail ID</th>
                        <th>Qualifications with Specialization</th>
                        <th>Total Teaching Experience (in years)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Dr. M. Govinda Raju</td>
                        <td>9440220356<br>principal_svcet@yahoo.com</td>
                        <td>A.M.I.E (I), M.Tech (NITW), Ph.D (AU)<br>Marine engineering</td>
                        <td>18.5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mr. B.Gangadhar</td>
                        <td>9346300593<br>gangadharviit@gmail.com</td>
                        <td>M.E (CAD/CAM)</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dr. N. Mahesh Kumar</td>
                        <td>7989983686<br>hellomahesh@rediffmail.com</td>
                        <td>ME, Ph.D (CAD/CAM)</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>K. Eswararao</td>
                        <td>8686991345<br>eswar334kuna@gmail.com</td>
                        <td>M.Tech (MACHINE DESIGN)</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>G. Mahendranath</td>
                        <td>9908840748<br>mahindranath.golive@gmail.com</td>
                        <td>M.Tech (CAD)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>K. Srinivasa Rao</td>
                        <td>9490213430<br>srinukottapalli@gmail.com</td>
                        <td>M.Tech (MACHINE DESIGN)</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>P. Padmavathi</td>
                        <td>8985919265<br>padma.vathi89@gmail.com</td>
                        <td>M.Tech (THERMAL ENGINEERING)</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>S. Yarmaiah</td>
                        <td>9010977280<br>yermia.mech337@gmail.com</td>
                        <td>M.Tech (CAD/CAM)</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>L. Mohana Rao</td>
                        <td>9848388725<br>mohanmechbomma@gmail.com</td>
                        <td>M.Tech (DESIGN FOR MANUFACTURING)</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>P. Sivaram</td>
                        <td>8985408640<br>sivaram.potnuru@gmail.com</td>
                        <td>M.Tech (THERMAL ENGINEERING)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>V. Ramudu</td>
                        <td>7981244957<br>v.ramu1990@gmail.com</td>
                        <td>M.Tech (CAD/CAM)</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>M. Venkateswara Rao</td>
                        <td>7793938821<br>mvr389@gmail.com</td>
                        <td>M.Tech (MACHINE DESIGN)</td>
                        <td>1.6</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>P. Bharat Kumar</td>
                        <td>9493761887<br>bharath.potnuru@gmail.com</td>
                        <td>M.Tech (CAD/CAM)</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>K.S.V. Sai Ramesh</td>
                        <td>9573730514<br>sairamesh0323@gmail.com</td>
                        <td>M.Tech (MD)</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>G. Hareesh</td>
                        <td>8464962205<br>harihappy123@gmail.com</td>
                        <td>M.Tech (M.D)</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>M. Madhavi</td>
                        <td>9949610424<br>madhavi.muddada@gmail.com</td>
                        <td>ME (HEAT TRANSFER)</td>
                        <td>12</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>  

    <?php include 'footer.php'; ?>

</body>
</html>
