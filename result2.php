<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body class="resbody pt-5">
    <div class="res ">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="showres">
                        <p style="color:white ;"><span><i class="fa-solid fa-face-smile-beam"></i></span> Good Results</p>
                        <p style="color:white ;">Your kidney is working well ,but you should do some tests to be sure</p>
                        <p style="color:white ;">Your Score Is  <span style="color: red"> <?php echo $_GET['score'] ?></span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>