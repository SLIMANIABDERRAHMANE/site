<?php
include 'connect.php';
session_start(); 
if(isset($_SESSION['password']) && isset($_SESSION['email'])) {

    $query=mysqli_query($con,"SELECT * FROM `customers` WHERE email='?'");

?>
    
    <header>
        
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> <!-- bootstrap -->
    <link rel="stylesheet" href="../cart_style.css">
    <link rel="stylesheet" href="../style.css">
    <title>YOUR PROFILE</title>
</head>
<body>
    
    <br><br><br>  
    <body style="background-color: black">    
    <form action="logout.php" method="post">
    <div class="container" >
            <br>
            <h1 class="text-center" style="color: blue">Welcome to your profile <?php echo $_SESSION['firstName'];?></h1>
           <br><br><br>
            <div class="mb-3 row">
            <?php if(isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            </div>
        <div id="classe" class=" container d-flex justify-content-center" >
                <div style="width: 400px;" >
                    <div class="d-flex" style="gap: 20px;">   
                    <h5 style="color: white" for="firstname" >First Name :</h5>
                    <p style="color: white"><?php echo $_SESSION['firstName'];?></p>
                    </div> <br><br>
                     
                    <div  class="d-flex" style="gap: 20px;">
                    <h5 style="color: white">Last Name :</h5>
                    <p style="color: white"><?php echo $_SESSION['lastName'];?></p>
                    </div><br><br>

                    <div  class="d-flex" style="gap: 20px;">
                    <h5 style="color: white">Adress: </h5>
                    <p style="color: white"><?php echo $_SESSION['adress'];?></p>
                    </div><br><br>
                </div>
                <div style="width: 400px;">
                    <div  class="d-flex " style="gap: 20px;">
                    <h5 style="color: white">Phone Number: </h5>
                    <p style="color: white"><?php echo $_SESSION['phone'];?></p>
                    </div><br><br>

                    <div  class="d-flex" style="gap: 20px;">
                    <h5 style="color: white">Email :</h5>
                    <p style="color: white"><?php echo $_SESSION['email'];?></p>
                    </div><br><br>

                    <div class="d-flex" style="gap: 20px;">
                    <h5 style="color: white">Password :</h5>
                    <input type="password" value="<?php echo $_SESSION['password'];?>"></input>
                    </div><br><br>
           
            </div>
        </div><br>
            
            <div class="text-center">
            <button type="submit"  href="logout.php" name="logout" style="background-color:blue;" class="mt-5 btn-lg">Log Out</button>
            </div>
    </div>
    </form>
 

 



<?php
    }
else{
header('location:main.php');
}
?>