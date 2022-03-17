<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-dark text-white">
    <?php
    require_once('connect.php');
    $message = "your email is already registed !";
    
?>
<?php
    if(isset($_POST['signUP'])){
      $firstname = $_POST['firstName'];
      $lastname = $_POST['lastName'];
      $adress = $_POST['adress'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $query=mysqli_query($con,"SELECT * FROM `customers` WHERE email='$email'");

      if(mysqli_num_rows($query)>0){
        echo "<script type='text/javascript'>alert('$message');</script>";
      
      
  }else{

  
       $sql="INSERT INTO `customers`(`firstName`, `lastName`, `adress`, `phone`, `email`, `password`) 
       VALUES ('$firstname','$lastname','$adress','$phone','$email','$password')";
      
       $result = mysqli_query($con,$sql);

       if($result){
        
        
        echo "<script type='text/javascript'>
        Swal.fire(
          'Your registration is successful!',
          '',
          'success',
        )
           
              </script>";
        
      }else{
        echo "<h1 id='rg'>your registration is NOT successful</h1>"; 
      }
        }
      }

  
    ?>
    

    
    
    <form action="signup.php" method="post" class="container">

<h1 class="m-5 text-center">SIGN UP</h1>
<main>
<section class="w-50 p-3" >
<h3 class="float-left">Hello, friend!</h3>
<div class="float-left">
  <div class="float-left">
    <!-- <label for="firstname" class="form-label">First Name</label> -->
    <input type="text" class="form-control" name="firstName" placeholder="First Name" style="margin: 10px" required>
    </div>

    <div class="float-left">
    <!-- <label for="lastname" class="form-label">Last Name</label> -->
    <input type="text" class="form-control" name="lastName" placeholder="Last Name" style="margin: 10px" required>
    </div>
    </div>

    <div class="float-left">
    <div class="float-left">
    <!-- <label for="adress" class="form-label">Adress</label> -->
    <input type="text" class="form-control" name="adress"  placeholder="Adresse" style="margin: 10px" required>
    </div>

    <div class="float-left">
    <!-- <label for="phone" class="form-label">Phone Number</label> -->
    <input type="text" class="form-control" name="phone" placeholder="Phone" style="margin: 10px" required>
    </div>
    </div>  

    <div class="float-left">
    <!-- <label for="email" class="form-label">Email</label> -->
    <input type="email" class="form-control" name="email" placeholder="email" style="margin: 10px" required>
    </div>

    <div class="float-left">
    <div class="float-left">
    <!-- <label for="password" class="form-label">Password</label> -->
    <input type="password" class="form-control" name="password" placeholder="Password" style="margin: 10px" required>
  </div>

    <!-- <div class="col">
    <label for="password" class="form-label">Confirm password</label>
    <input type="password" class="form-control" name="password" required>
    </div> -->
    </div>

    <div>
  <input type="checkbox" id="conditions" name="scales" checked>
  <label class="mt-2 mb-5" for="conditions">I read and agree the termes & conditions</label>
</div>
    
    <div class="m-5 text-center">
  <button type="submit" name="signUP" id="register" style="background-color:blue;" class="mt-5 btn-lg">CREATE ACCOUNT</button>
  <p class="mt-2 mb-5">Alredly have account? Sign in <a href="login.php" class="text-primary">Log in</a></p>
</div>
<!-- </div> -->
</div>
</section>
<section class="w-50 p-3">
            <h3 class="float-right" >Glad to see you!</h3>
            <p class="float-right">lorem ipsum dolor sit amet consecteur adipsing elit etiam dignissime</p>
    </section>

    </main>

</form>



</script>

</body>
</html>