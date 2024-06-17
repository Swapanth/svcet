<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .section-default p {
            margin-bottom: 1em; 
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
                        <h4 class="mb-4">RULES & REGULATIONS</h4>
                        <p class="mb-1"><strong>1. Personality and Character Development:</strong><br> Classes include hygiene, health awareness, and first-aid.</p>

                        <p class="mb-1"><strong>2. Identity Card & Dress Code:</strong><br> Students should wear their identity card on the college campus.<br> Boys must wear self-colored pants with plain color shirts tucked in. T-shirts, banians, and sleeveless shirts are not allowed, and shorts are permitted only in the sports arena.<br> Girls must wear salwar kameez with a dupatta. T-shirts, banians, and sleeveless shirts are not allowed, and shorts are permitted only in the sports arena. Slippers are not permitted.</p>

                        <p class="mb-1"><strong>3. Discipline:</strong><br> Students should attend classes regularly. <br>Leave applications must be submitted for any absence.<br> Cell phones or pagers are not allowed inside the college.<br> Ragging and eve-teasing will be punished with imprisonment of 2 years, a fine of up to Rs. 10,000, and will not be tolerated in the college.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
