<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidney Failure</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
 <div class="health">
   <div class="container">
     <div class="row justify-content-center py-5">
       <div class="col-md-4">
       <form action="question.php" method="post" >
        <h3 class="text-center health-text">Check your kidney health</h3>
        <input type="text" class="form-control mt-4" placeholder="Enter your Full name" name="name">
        <select name="gender" id="" class="form-control mt-4" >
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <input type="number"  class="form-control mt-4" placeholder="Enter your Age" name="age">
        <input type="email" class="form-control mt-4" placeholder="Enter your Email" name="email">
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary px-5 ">Check my kidney</button>

        </div>
       </form>
       </div>
     </div>
   </div>
 </div>

 


    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>