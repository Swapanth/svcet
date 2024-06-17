<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Venkateswara College of Engineering & Technology</title>
    <?php include 'header.php'; ?>
    <style>
        header {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .main-content {
            padding-top: 100px; 
        }
        .section-default {
            margin-top: 30px; 
        }
    </style>
</head>
<body>
    <div class="main-content">
        <section id="examples" class="section section-default">
            <div class="container">
                <div class="row">
                <?php include 'aboutus_sidebar.php'; ?>
                    <div class="col">
                        <h4 class="mb-4">MANAGEMENT</h4>
                        <p class="mb-1"><strong>Smt.I.Jyothi (President) :</strong><br> A graduate, belonging to an official family with an intention to serve the people by extending higher technical education in different areas.</p>

                        <p class="mb-1"><strong>Smt. B.Sowdamani (Correspondent & Secretary) :</strong><br> A graduate belonging to an educated family with a motto to serve the poor by extending the benefits of different government programs to the rural people. She is also serving the people as a Municipal Councilor in the Srikakulam municipality.</p>

                        <p class="mb-1"><strong>Smt.B.Lakshmi (Treasurer) :</strong><br> A graduate, belonging to a political family with an intention to serve the people by educating them about health and hygiene.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
