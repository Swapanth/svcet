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
            line-height: 2;
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
            <div class="all-content">
                <div class="header">MECHANICAL ENGINEERING</div>
                <div class="content">
                    <h3>PROGRAMME EDUCATIONAL OBJECTIVES:</h3>
                    <ol>
                        <li>Our Graduates shall excel as practicing engineers, academicians and researchers.</li>
                        <li>Our Graduates shall play a vital role in the nation’s infrastructural and sustainable development.</li>
                        <li>Our Graduates shall hold professional and ethical responsibilities as engineers, entrepreneurs and leaders through life-long learning.</li>
                    </ol>

                    <h3>PROGRAM OUTCOMES:</h3>
                    <ol>
                        <li>Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems.</li>
                        <li>Problem analysis: Identify, formulate, research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</li>
                        <li>Design/development of solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</li>
                        <li>Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</li>
                        <li>Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations.</li>
                        <li>The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                        <li>Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
                        <li>Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
                        <li>Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
                        <li>Communication: Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</li>
                        <li>Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage Projects and in multidisciplinary environments.</li>
                        <li>Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>  
    
    <?php include 'footer.php'; ?>
</body>
</html>
