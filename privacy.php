<?php
  include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Docufix | Privacy Policy</title>
        <meta name="description" content="terms of service">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="stylesheet" type="text/css" href="css/termsOfService.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    </head>
    <body>
        <!--Header-->
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572949531/docufix/Group_1_3_pqdphq.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5" id="navlink">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.php">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="teampage.php">Our Team</a>
                </li>
               <?php
                  if(!isset($_SESSION['login_user'])){
                  echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="signup.php">Get Started</a>
                </li>
                  ';


                }
                else
                {
                    echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="profile.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">logout</a>
                </li>
                  ';
                }
                ?>
                
              </ul>
            </div>
          </nav>
    </header>
        <!--Main-->
         <main>
          <section id="Introduction" class="text-center mb-3">
            <div class="container mb-0">
            <div class="text-center mb-2" id="Introduction">
                <h2 class="text-9 text-center">Privacy Policy</h2> 
            </div>
           <div class="container" id="container">
             <div class="row">
               <div class="col-sm-12">
                  <div class="accordion mt-5" id="accordionExample">
                        

            <div class="container">
               <div class="container content mb-5 text-wrapper" >
                  <p>This privacy policy has been compiled to show the information we collect, how we make use of it, user choices as to how we make use of such information provided, how we treat your personal data and protect your privacy when you use our services. Therefore we encourage every user of our products or services to carefully read this policy. If you use Docufix, you agreed to the terms and conditions laid out in this policy.</p>

                  <p><b>Docufix</b>
                 Like many sites, collects information your browser sends each time you visit our website. This is simply called “Log Data”, and may include certain information such as your Internet Protocol (IP) address, browser type and version, pages visited on our site, time and date of the visit, time spent on those pages and other statistics; using cookies for research regarding the effectiveness of the website and the marketing, advertising and sales efforts of Docufix, and its trusted affiliates.</p>

                  <p>Any emails you send to Docufix, and our replies to you are retained in Docufix email archives to assist in providing you the highest level of service possible. And any action to process in due course, we process with your consent and/or with another legal basis basically to fulfill the purpose of your interaction with us.</p>

                  <p>Documents you compare are protected by a secret URL and stored in a secured server. Acccess to a third party except to the extent required by law are not allowed. However, anyone you share the URL with can view the comparison.</p>

                  <p>Please contact us with any questions regarding the Docufix Privacy Policy by email: info@docufix.com</p>
                
            </div>
        </div>



                    </div>             
               </div>
             </div>
           </div>
           
           
        </main><br><br>

 

        <!--Footer-->
        <footer id="footer">
          <div class="container mt-3"><hr>
            <div class="row">
                <div class="col-sm-6" id="docufix">
                    <a class="navbar-brand  text-justify" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
                    <p class="text-justify">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
                </div>
              <div class="col-sm-6 text-center">           
                  <ul class="list-inline text-center mt-3 pl-3">  
                      <li class="list-inline-item">
                        <a class="text-center" href="contact.php">Contact us</a>
                      </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="faq.php">FAQs</a>
                        </li>
                       <li class="list-inline-item">
                          <a class="text-center" href="privacy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.php">Terms of Service</a>
                          </li>
                    </ul>
              </div>
            </div>
          </div>
        
  </footer>
       
     
      
      <script src="js/app.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
        var SCROLLING_NAVBAR_OFFSET_TOP = 50;
        $(window).on("scroll", function() {
        var $navbar = $(".navbar");
        
        if ($navbar.length) {
          if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
            $(".scrolling-navbar").addClass("top-nav-collapse");
          } else {
            $(".scrolling-navbar").removeClass("top-nav-collapse");
          }
        }
        });
      </script>   
        
    
    </body>
</html>