<?php
          session_start();
          
          if (!isset($_SESSION['login_user'])) {
              header('Location: login.php');
              exit();
         }
         
              
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#3B1F9E" />
    <link rel="manifest" href="manifest.json" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Plaster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <title>User Profile</title>
</head>

<body class="profile-body"> 
  <div class="container-fluid profile-box my-5 mx-90 mx-auto">  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572602189/docufix/Docufix_Logo_pzbbzi.png" alt="logo" class="logo-img img-fluid"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.php">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Check for Duplicates</a>
                  </div>
            </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li> -->

          <li class="nav-item"> 
             
            <a class="nav-link" href="logout.php" name="logout" >Logout</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <div class="profile-circle">
                  <?php
                 echo substr($_SESSION['firstname'], 0, 1).'.'.substr($_SESSION['lastname'], 0, 1);
                 ?>

                </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row">
        <section class="col-3 pr-3 userprofile-col">
            <div class = "profile-info-bloc p-0">
            <p class="small-spaced-text p-0">Profile Information</p>
            <h5>Subscription <span class="prof-btn mr-2 p-bloc-btn">Free Plan</span></h5>
            <p class="m-0 font-nine">Duration: Forever</p>
            <p class="font-nine">Limit: 20mb/month upload</p>
            </div>

            <div class = "profile-info-bloc">
            <h5>Total Documents Analyzed</h5>
             <span class="btn prof-btn mr-2 mt-4">0</span>
            </div>

            <div class = "profile-info-bloc">
            <h5 class="mb-4">Recently Analyzed Documents</h5>

            <span class="btn prof-btn mb-4 mr-2 d-block">No document Analyzed Yet</span>
           
           </div>
            
        </section>
        <section class="col-9 pl-md-5 userprofile-col profile-details">
            <h4 class="userprofile-name shaded-black">
            <?php
            echo $_SESSION['firstname'].' '.$_SESSION['lastname'];

            ?>

             </h4>
            <p class="userprofile-plan medium-purple-text">Free User</p>
            <p class="userprofile-date small-spaced-text">Date Registered <span> <?= $_SESSION['registered_date'] ?> </span></p>
            <!--button class="userprofile-changeplan btn prof-btn p-bloc-btn mr-2"><i class="fa fa-pencil" aria-hidden="true"></i> Change Plan</button-->
            <a href="changepassword.php"><button class="userprofile-changeplan btn prof-btn p-bloc-btn"><i class="fa fa-lock" aria-hidden="true"></i>Change Password</button></a>

            <h6 class="shaded-black prof-about-title"><i class="fa fa-user" aria-hidden="true"></i> About</h6>
            <p class="small-spaced-text p-0">CONTACT INFORMATION</p>
            <div class="contact-info">
            <p class="d-flex justify-content-between medium-text">Full Name <span class="medium-purple-text"> 
              <?php
            echo $_SESSION['firstname'].' '.$_SESSION['lastname'];

            ?>
             </span></p>
            <p class="d-flex justify-content-between medium-text">Email <span class="medium-purple-text"> <?= $_SESSION['login_user'] ?> </span></p>
            <!-- <p class="d-flex justify-content-between medium-text">Phone Number <span class="medium-purple-text">08034143461</span></p> -->
                  
            
           <!--/div>

           <h6 class="shaded-black prof-about-title"><i class="fa fa-credit-card" aria-hidden="true"></i> Billing History</h6>

           <div class="transaction-history-bloc">
               <p class="small-spaced-text p-0">No Trasaction Yet</p>
           </div-->

        </section>
    </div> 


  </div>

  <script src="js/app.js"></script>
</body>

</html>