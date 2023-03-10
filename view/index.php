<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>
    <!-- CSS only -->
    <title>Quizizy™</title>
</head>

<body>
    <nav>
        <img src="../img/aws.png" style="width: 200px;" alt="Logo">
    </nav>
    <div class="stepper_compenent">
        <!--stepper -->
    <div class="stepper">
            <ul id="prog">
                <li>
                    <i class="icon uil uil-user-exclamation"></i>
                    <div class="progress one active">
                        <p class="number">1</p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="step">Informations</p>
                </li>
                <li>
                    <i class="icon uil uil-file-question-alt"></i>
                    <div class="progress two">
                        <p class="number">2</p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="step">Quiz</p>
                </li>
                <li>
                    <i class="icon uil uil-trophy"></i>
                    <div class="progress three">
                        <p class="number">3</p>
                        <i class="uil uil-check"></i>
                    </div>
                    <p class="step">Résultats</p>
                </li>
            </ul>
        </div>
    <!-- -->
    </div>
    

    <div class="card">
        <div class="icon">
            <i class="bi bi-cloud"> Aws - Quiz</i>
        </div>
        <div id="question">

        </div>

        <div class="btnSubmit">
            <button type="submit" id="submit">
                Next
            </button>
        </div>

    </div>
    <div class="card3">
        <div class="icon">
            <i class="bi bi-cloud"> Aws - Quiz</i>
        </div>
        <div class="button-container">
            <div class="pd">
                <div id="note" class="container col-md-6 shadow p-3 mb-5 bg-white rounded">
                    <h1>AWS Cloud Practitioner Knowledge Test</h1> 
                    <div class="rules">
                        <h3>Quiz Rules</h3>
                        
                    </div>
                        <h4>1 . Try to answer the following questions in given time limit</h4>
                        <h4>2 . Keep in mind that incorrect answer will penalize time/score</h4>
                        <h4>3 . You can't Exit from the quiz while you are playing</h4>
                </div>
                <div id="start">
                    <button class="start">Let's Goo</button>
                </div>
            </div>
            <!-- <a href="" id="start">Let's Goo</a> -->
        </div>
    </div>
    <div class="card2">
        <div class="icon">
            <i class="bi bi-cloud"> Aws - Quiz</i>
        </div>

        <div class="title">
            <h1>Your wrong answers</h1>
        </div>
        <div id="result">
        </div>
        <div class="btnSubmit">
            <button type="submit" id="submit">
                Next
            </button>
        </div>

    </div>

</body>
<script src="../script.js" defer></script>

</html>