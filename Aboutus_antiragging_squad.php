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
                        <h4 class="mb-4">ANTI RAGGING SQUAD</h4>
                        <a class="mb-1" href="#">ANTI RAGGING SQUAD 2018-19</a>
                        <br>
                        <a class="mb-1" href="#">ANTI RAGGING SQUAD 2017-18</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
