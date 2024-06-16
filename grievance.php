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
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .custom-select-1 {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        .custom-select-1 select {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
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
                <h4 class="mb-4">GRIEVANCES REDDRESSAL</h4>
                <div class="card bg-color-light-scale-1 mb-4">
                    <div class="card-body">
                        <form class="contact-form form-style-2" action="#" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-label text-2">First Name</label>
                                    <input type="text" class="form-control text-3 h-auto py-2" name="firstname" required>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-2">Last Name</label>
                                    <input type="text" class="form-control text-3 h-auto py-2" name="lastname" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label class="form-label text-2">Email Address</label>
                                    <input type="email" class="form-control text-3 h-auto py-2" name="email" required>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label text-2">Mobile Number</label>
                                    <input type="tel" class="form-control text-3 h-auto py-2" name="phone" required required pattern="[0-9]{10}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label text-2">Message</label>
                                    <textarea class="form-control text-3 h-auto py-2" name="message" rows="8" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
