<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="question pt-4">

    <div class="container-fluid">
        <div class="row">

            <div class="col">
                    <p class="txt ">Health Checker</p>
                    <h3 class="txt mt-5">Try not to leave any "Non" answers.
                        <br>
                        Answer honestly (even if you don't like the answer).
                        <br>
                        Your frank answer to the questions increases the accuracy of the result.
                    </h3>
                   </div>
               
            </div>
        </div>
    </div>
    <div class="questiontwo">
        <form action="handle.php" method="post">

            <?php
                $age = $_POST['age'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $gender = $_POST['gender'];
                echo "<input type='hidden' name='age' value='" . $age . "'>";
                echo "<input type='hidden' name='email' value='" . $email . "'>";
                echo "<input type='hidden' name='name' value='" . $name . "'>";
                echo "<input type='hidden' name='gender' value='" . $gender . "'>";
            ?>


            <input type="hidden" name="email" value="">
            <input type="hidden" name="name" value="<?php $name ?>">
            <input type="hidden" name="gender" value="<?php $gender ?>">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center mt-5" >
                    <h3 class="tte">Do you suffer from vomiting?</h3>
                  <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checkVom" class="bg-danger" id="1" value="0" />
                     <input type="radio" name="checkVom" class="bg-danger" id="1" value="1" />
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                </div>
                <div class="col-md-7 text-center mt-5" >
                    <h3 class="tte">Do you suffer from nausea?</h3>
                    <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checknausea" class="bg-danger" id="1" value="0">
                    <input type="radio" name="checknausea" class="bg-danger" id="1" value="1">
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                </div>
                <div class="col-md-7 text-center mt-5" >
                    <h3 class="tte">Do you suffer from a decrease in the amount of urine?</h3>
                    <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checkurine" class="bg-danger" id="1" value="0">
                    <input type="radio" name="checkurine" class="bg-danger" id="1" value="1">
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                </div>
                <div class="col-md-7 text-center mt-5" >
                    <h3 class="tte">Do you have trouble sleeping?</h3>
                    <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checksleeping" class="bg-danger" id="1" value="0">
                    <input type="radio" name="checksleeping" class="bg-danger" id="1" value="1">
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                </div>
                <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Do you suffer from a lack of appetite?</h3>
                    <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checkappetite" class="bg-danger" id="1" value="0">
                    <input type="radio" name="checkappetite" class="bg-danger" id="1" value="1">
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                  </div>
                <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Do you suffer from itching?</h3>
                    <span class="ml-3 ff "> <b> No</b></span>
                    <input type="radio" name="checkitching" class="bg-danger" id="1" value="0">
                    <input type="radio" name="checkitching" class="bg-danger" id="1" value="1">
                    <span class="ml-3 ff2 "> <b> Yes</b></span>
                    <hr>
                  </div>
                  <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Had a family member ever had kidney disease?</h3>
                      <span class="ml-3 ff "> <b> No</b></span>
                      <input type="radio" name="checkfamily" class="bg-danger" id="1" value="0">
                      <input type="radio" name="checkfamily" class="bg-danger" id="1" value="1">
                      <span class="ml-3 ff2 "> <b> Yes</b></span>
                      <hr>
                  </div>
                  <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Do you suffer from diabetes?</h3>
                      <span class="ml-3 ff "> <b> No</b></span>
                      <input type="radio" name="checkdiabetes" class="bg-danger" id="1" value="0">
                      <input type="radio" name="checkdiabetes" class="bg-danger" id="1" value="1">
                      <span class="ml-3 ff2 "> <b> Yes</b></span>
                      <hr>
                  </div>
                  <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Do you have high blood pressure?</h3>
                      <span class="ml-3 ff "> <b> No</b></span>
                      <input type="radio" name="checkblood" class="bg-danger" id="1" value="0">
                      <input type="radio" name="checkblood" class="bg-danger" id="1" value="1">
                      <span class="ml-3 ff2 "> <b> Yes</b></span>
                      <hr>
                  </div>
                  <div class="col-md-7 text-center mt-5">
                    <h3 class="tte">Do you have kidney stone?</h3>
                      <span class="ml-3 ff "> <b> No</b></span>
                      <input type="radio" name="checkkidney" class="bg-danger" id="1" value="0">
                      <input type="radio" name="checkkidney" class="bg-danger" id="1" value="1">
                      <span class="ml-3 ff2 "> <b> Yes</b></span>
                      <hr>
                  </div>
                  <button type="submit" class="btn btn-primary px-5">Done!</button>
            </div>
        </div>
        </form>

    </div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>