<?php
$SERVER="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($SERVER,$username,$password,$database);
if( isset($_POST['submitButton']))   
{
$email = $_POST['email'];
$insertdata=mysqli_query($conn, "INSERT INTO subscribers(email)
VALUE('$email')");
if($insertdata)
{
    echo "data submitted succcessfuly";
}
else{
    echo "error occured";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>BOOTSTRAP GRID LAYOUT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
     <!-- navigation bar here -->
     <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
         <div class="container-fluid">
             <a href="#" class="navbar-brand">Zalego Academy</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
                 <span class="navbar-toggler-icon"></span>
             </button>
            <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
                <div class="navbar-nav">
                    <a href="index.html" class="nav-link active">home</a>
                    <a href="aboutus.html" class="nav-link">about us</a>
                    <a href="#" class="nav-link">contact us</a>
                </div>
            </div>
           

     </nav> -->
     <!-- End navigation bar -->
    <main class="p-5 mb bg-light">
        <h1>About us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Rem ipsum iure voluptatibus itaque minus reprehenderit at sunt molestiae praesentium illo.</p>
     </main>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our Program</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam, illo!</p>
            </div>
            <div col-lg-6>
                <img src="images/pexels-josh-sorenson-1714208.jpg" alt="" class="img-fluid rounded">
         </div>
            <br>
            <div class="row">
                <h1>The Programs</h1>
            </div>
            <br>
            <div class="col-lg-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title"card title="skill Discover">Skill Discovery</h5>
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, autem.</p>
             <a href="#" class="btn btn-primary">View Details</a>           

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title"card title="Upskilling Program">Upskilling Program</h5>
             <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, autem.</p>
             <a href="#" class="btn btn-primary">View Details</a>   

                    </div>
</div>
    </div>
    <div class="col-lg-4">
        <div class="card text-center shadow">
            <div class="card-body">
                <h5 class="card-title"card title="path finding program">Path finding program</h5>
     <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, autem.</p>
     <a href="#" class="btn btn-primary">View Details</a>           

            </div>
        </div> 
        <form action="aboutus.php" method="POST">
            <div class="row">
                <p>subscribe to get information,latest news abour zalego Academy</p>
                <div class="mb-3 col-lg-6">
                    <label for="Email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                    <button class="btn btn-primary" type="submit" name= "submitButton">Subscribe</button>
                 </div>
            
            </div>
            </form>
    </div>
    
    
     
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
       
     <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
     
</body>
</html>