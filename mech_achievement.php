<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanical Engineering Department - Achievements</title>
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
    margin-top: -300px;
}

.content {
    font-size: 18px;
}

/* Styling for all tables */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

/* Specific styles for achievement tables */
.achievement table {
    margin-top: 10px;
}

.achievement th, .achievement td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.achievement td:first-child {
    font-weight: bold;
}

/* Styles for the topper lists */
.top-graduates table, .toppers-section table {
    margin-top: 20px;
}

.top-graduates th, .top-graduates td,
.toppers-section th, .toppers-section td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
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
            <div class="header">MECHANICAL ENGINEERING - Achievements</div>
            <div class="content">
                
                <!-- Achievements - Faculty -->
                <div class="achievement">
                    <h2>Faculty Achievements</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>S. No.</th>
                                <th>Name of the Faculty</th>
                                <th>No. of Journals Published International</th>
                                <th>No. of FDP’s Attended</th>
                                <th>No. of Work Shops Attended</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. M. GOVINDA RAJU</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>B.GANGADHAR</td>
                                <td>2</td>
                                <td>1</td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>K.ESWARARAO</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>N.BULLI RAJU</td>
                                <td>2</td>
                                <td>1</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>P.KALYANI</td>
                                <td>1</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>P.CHINNARAO</td>
                                <td>1</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>G.MAHENDRA NATH</td>
                                <td>1</td>
                                <td>-</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>M.MADHAVI</td>
                                <td>-</td>
                                <td>-</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>R JAGADEESH KUMAR</td>
                                <td>2</td>
                                <td>-</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>S.PRASANTH</td>
                                <td>1</td>
                                <td>-</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>P.PADMAVATI</td>
                                <td>1</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>K.SRINIVASA RAO</td>
                                <td>4</td>
                                <td>-</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br><br>
                <div class="container">
        <div class="head" style="font-weight:600; font-size:larger;">Topper List - Academic Year 2016-17</div>
        
        <div class="toppers">
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name Of The Student</th>
                        <th>Regd. Number</th>
                        <th>Year</th>
                        <th>Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>K. Rajasekhar</td>
                        <td>13MT1A0315</td>
                        <td>IV</td>
                        <td>82.33</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>E. Maniratnam</td>
                        <td>14MT1A0318</td>
                        <td>III</td>
                        <td>80.3</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>A. Hima Sekhar</td>
                        <td>15MT1A0329</td>
                        <td>II</td>
                        <td>91.58</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br>
                    <!-- Topper Lists -->
                <div class="topper-list">
            <h2>Academic Year 2015-16</h2>
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name Of The Student</th>
                        <th>Regd. Number</th>
                        <th>Year</th>
                        <th>Aggregate Percentage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>S.Jyothi</td>
                        <td>14MT5A0338</td>
                        <td>IV</td>
                        <td>77.16</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>E.Maniratnam</td>
                        <td>14MT1A0318</td>
                        <td>III</td>
                        <td>82</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>A.Hima sekhar</td>
                        <td>15MT1A0329</td>
                        <td>II</td>
                        <td>83</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <br><br><br>

    <div class="container">
        <div class="head" style="font-weight:600; font-size:larger;">Top 10 Graduates - Mechanical Engineering Department (Academic Year: 2016-17)</div><br>
        
        <div class="top-graduates">
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Reg. No.</th>
                        <th>Name of the Student</th>
                        <th>% of Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>13MT1A0315</td>
                        <td>Kotha Rajasekhar</td>
                        <td>82.33</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>14MT5A0344</td>
                        <td>Tonangi Suresh</td>
                        <td>82.00</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>14MT5A0338</td>
                        <td>Sativada Jyothi</td>
                        <td>81.33</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>13MT1A0337</td>
                        <td>Varadi Rajesh</td>
                        <td>78.50</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>13MT1A0316</td>
                        <td>Kottakota Rama Chandara Rao</td>
                        <td>78.33</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>13MT1A0312</td>
                        <td>Kondagorri Chintamani</td>
                        <td>74.17</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>13MT1A0319</td>
                        <td>Lolla Hareesh</td>
                        <td>74.17</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>13MT1A0331</td>
                        <td>Sabotho Lokesh</td>
                        <td>74.00</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>13MT1A0329</td>
                        <td>Puvvala Kalyan Babu</td>
                        <td>73.83</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>13MT1A0311</td>
                        <td>Dumpala Syamala Rao</td>
                        <td>73.33</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="toppers-section">
            <h2>Toppers from III Year II Semester - Academic Year 2016-17</h2>
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Reg. No.</th>
                        <th>Name of the Student</th>
                        <th>% of Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>14MT1A0318</td>
                        <td>EROTU MANIRATNAM</td>
                        <td>80.3</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>14MT1A0307</td>
                        <td>BAMMIDI BHEEMA RAO</td>
                        <td>72.64</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>14MT1A0324</td>
                        <td>GUJJU DHANARAJ</td>
                        <td>69.16</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>14MT1A0331</td>
                        <td>KEELU JAYARAM</td>
                        <td>68.64</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>14MT1A0330</td>
                        <td>KATA SIVASANKAR</td>
                        <td>68.38</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>14MT1A0301</td>
                        <td>AMBATI GANGADHAR</td>
                        <td>67.74</td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>14MT1A0365</td>
                        <td>TEMBURU BHUPAL</td>
                        <td>67.74</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>14MT1A0314</td>
                        <td>DEVENDRA BEHARA</td>
                        <td>66.19</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>14MT1A0340</td>
                        <td>MENDA MANMADHARAO</td>
                        <td>65.68</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>14MT1A0353</td>
                        <td>RAMESH BANALA</td>
                        <td>64.90</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Toppers from II Year II Semester -->
        <div class="toppers-section">
            <h2>Toppers from II Year II Semester - Academic Year 2016-17</h2>
            <table>
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Reg. No.</th>
                        <th>Name of the Student</th>
                        <th>% of Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>15MT1A0329</td>
                        <td>HIMA SEKHAR AKKIREDDY</td>
                        <td>91.58</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>16MT5A0329</td>
                        <td>VOONA MONIKA</td>
                        <td>90.07</td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>15MT1A0323</td>
                        <td>GARA DILLESWARA RAO</td>
                        <td>88.55</td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>16MT5A0324</td>
                        <td>SANAPATHI SATISH</td>
                        <td>84.41</td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>16MT5A0307</td>
                        <td>BONGU SRAVANI</td>
                        <td>82.35</td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>16MT5A0303</td>
                        <td>BARATAM DIVYA</td>
                        <td>79.17</td>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>15MT1A0305</td>
                        <td>ARJALA SURENDRA</td>
                        <td>75.72</td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>15MT1A0356</td>
                        <td>PILLA HARISH</td>
                        <td>75.45</td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>16MT5A0302</td>
                        <td>BALAGA GOVINDA RAO</td>
                        <td>74.76</td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>15MT1A0348</td>
                        <td>NEELAPU TARAKESH</td>
                        <td>73.65</td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>16MT5A0330</td>
                        <td>YANDAVA TRIMURTHULU</td>
                        <td>73.65</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
