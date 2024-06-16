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
                        <h4 class="mb-4">VISION & MISSION</h4>
                        <p class="mb-1"><strong>INSTITUTE VISION :</strong> <br>Emerge as a centre of Excellence and Eminence to produce globally competent professionals adorned with social values.</p>
                        <p class="mb-1"><strong>INSTITUTE MISSION :</strong><br> Impart a perfect blend of value-based, industry-relevant, and quality education towards employable graduates. Create facilities to become technically competent, communicative, and ethically upright.</p>
                        <p class="mb-1"><strong>QUALITY POLICY :</strong><br>Sri Venkateswara College of Engineering & Technology is committed to "Impart quality education to the youth to enable them to have the right attitude, professional competency, and inculcate ethical values".</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
