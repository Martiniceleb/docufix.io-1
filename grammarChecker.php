
<?php
   
include 'controller.php';


?>
 
 <!DOCTYPE html>
 <html lang="en">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Docufix |Grammer Check</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="manifest" href="manifest.json" />
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
       <!--<link rel="stylesheet" type="text/css" href="./css/wysiwyg.css">-->
        <!--link rel="stylesheet" type="text/css" href="css/fileupload.css">-->
        <link rel="stylesheet" type="text/css" href="css/grammarChecker.css">
       <!--link rel="stylesheet" href="css/main.css" />-->

       <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src ="//widget.instabot.io/jsapi/rokoInstabot.js" crossorigin>
          apiKey: "vXj90M2ifAvu8fS739jFKepTXtES72ur59sGR5TPK9c="
          </script>
       
     <style>
/* html, body {
min-height: 100%;
}
body {
padding: 20px;
background-image: linear-gradient(to bottom,#ffffff 30%,#88d9ff,#24206c,#222222 80%);
color: #333;
background-size: 100% 400%;
background-position: 100% 0%;
transition: all 1s;
}

*/
body.night {
background-position: 100% 100%;
color: #fff;
}
.toggle-box-label-left:empty {
margin-left: -10px;
}
.toggle-box-label-left:before, .toggle-box-label-left:after {
box-sizing: border-box;
margin: 0;
padding: 0;
-webkit-transition: 0.25s ease-in-out;
-moz-transition: 0.25s ease-in-out;
-o-transition: 0.25s ease-in-out;
transition: 0.25s ease-in-out;
outline: none;
}
.toggle-box input[type=checkbox], .toggle-box input[type=checkbox]:active {
position: absolute;
top: -5000px;
height: 0;
width: 0;
opacity: 0;
border: none;
outline: none;
}
.toggle-box label {
display: inline-block;
position: relative;
padding: 0px;
margin-bottom: 20px;
font-size: 14px;
line-height: 16px;
cursor: pointer;
color: rgba(149,149,149,0.51);
font-weight: normal;
}
.toggle-box-label-left:before {
content: '';
display: block;
position: absolute;
z-index: 1;
line-height: 34px;
text-indent: 40px;
height: 16px;
width: 16px;
margin: 4px;
-webkit-border-radius: 100%;
-moz-border-radius: 100%;
border-radius: 100%;
right: 26px;
bottom: 0px;
background: #ffb200;
transform: rotate(-45deg);
box-shadow: 0 0 10px #ffffff;
}
.toggle-box-label-left:after {
content: "";
display: inline-block;
width: 40px;
height: 24px;
-webkit-border-radius: 16px;
-moz-border-radius: 16px;
border-radius: 16px;
background: rgba(255,255,255,0.15);
vertical-align: middle;
margin: 0 10px;
border: 2px solid #ffb200;
}
.toggle-box input[type=checkbox]:checked + .toggle-box-label-left:before {
right: 17px;
box-shadow: 5px 5px 0 0 #eeeeee;
background: transparent;
}
.toggle-box input[type=checkbox]:checked + .toggle-box-label-left:after {
background: rgba(0,0,0,0.15);
border: 2px solid #ffffff;
}
.toggle-box input[type=checkbox] + .toggle-box-label-left {
color: rgba(250,250,250,0.51);
font-weight: bold;
}
.toggle-box input[type=checkbox]:checked + .toggle-box-label-left {
color: rgba(149,149,149,0.51);
font-weight: normal;
}
.toggle-box input[type=checkbox]:checked + .toggle-box-label-left + .toggle-box-label {
color: rgba(250,250,250,0.51);
font-weight: bold;
}

     
     </style>

    <style>
     
    
    @media screen and (max-width: 600px) {
    #b2, #b3, #lang{
         width: 120px;
         
       
     }
    }

    </style>

</head>

<body style = "background-color: #fafafa">

 <header>
       <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
         <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1573054016/docufix/Group_1_5_olg2uj.svg" alt="DOCUFIX" id="image"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ml-auto px-5">
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
               <a class="nav-link text-center" href="logout.php">Logout</a>
             </li>
               ';
             }
             ?>
             
           </ul>
         </div>
       </nav>
 </header>
 
 
 <!--END OF MODAL-->

<!--<br>
<br>
<br/>
<div class="toggle-box">
 <input type="checkbox" name="checkbox1" id="toggle-box-checkbox" />
 <label for="toggle-box-checkbox" class="toggle-box-label-left"></label>
 <label for="toggle-box-checkbox" class="toggle-box-label"></label>
</div>
<h4>Day/night switch</h4>-->


 <div class="container mt-5 pt-5" style="min-height: 100vh"  >
       
   <div class="row m-1">
       <div class="col-md-7  ml-0 ml-md-4"  style="border: 1px solid rgb(245, 238, 238); background-color:rgba(59, 31, 158, 0.05);">
           <div class="row pt-2">
               <div class=" mx-auto bg-light my-auto " style="border-radius: 50%;height: 120px; min-width: 120px;color: white;"> </div>
               <div class="col-md-8 p-2 text">
                   <h4 class="font-weight-bold" style = "font-family: Nunito;
                   font-style: normal;
                   font-weight: 800;
                   font-size: 24px;
                   line-height: 33px;
                  
                   
                   
                   color: #3B1F9E;">Grammar Check</h4>
                   <p style = "font-family: Nunito;
                   font-style: normal;
                   font-weight: bold;
                   font-size: 14px;
                   line-height: 19px;
                   
                   color: #3B1F9E;"> Docufix is one of the most innovative tecnology of our age. Built solidly with the latest technical tools for files and data management.</div>
           </div>
       </div>
       <div class="col-md-4 ml-0 ml-md-3 mt-4 mt-md-0 p-2 bounce animated" style="width: 302px;height: 162px;
       
       
      background: #F6F8F9;;
       border: 1px solid rgba(222, 230, 234, 0.6);
       box-sizing: border-box;">
               <h5 class="mb-5" style="color: rgba(12, 10, 90, 0.8)">Other Tools:</h5>
               <a class="bt btn-sm rounded-pill font-weight-bold" style="color: rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)" href = "fileUpload.php">Compare files</a>
               <a class="bt btn-sm rounded-pill font-weight-bold mt-md-0 mt-2" style="color:rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)" href = "fileDuplicate.php">Check Duplicates</a>
     </br>
          <div data-toggle="modal" data-target="#myModal2" style=" margin-top: 10px; cursor: pointer;color: rgba(12, 10, 90, 0.8)"  onclick="instruction()"> Instructions</div>
        </div>
   </div>
 <article>
 <div>


     <form name="checkform" action="http://community.languagetool.org" method="post" style = " margin-top: 20px; padding: 20px; box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.1); width:100%;"  id = "form">
         
       
         
         <p id="checktextpara">
           
            <div class ="h">
               <table>

                 <td> <tr><input type="button"  class="b-btn comp-btn bu" id ="b3" data-toggle="modal" data-target="#myModal"  value = "Dictionary">
                 <!--<td> <input type="button" style="padding-left: 10px; padding-right: 10px; width: 100px; background-color: rgb(12, 10, 90); border-radius: 4px; height: 30px;" class="b-btn comp-btn" data-toggle="modal" data-target="#myModal2"  value ="Help">-->

                 </tr>
                 <tr style = "color: white">  ... </tr>
                 <tr>
                 <select name="lang" id="lang" class="b-btn comp-btn bu">
                     <option value="en-US">English</option>
                     <option value="de-DE">German</option>
                     <option value="it">Italian</option>
                 </select></tr></td>
                 </table>

               </div>
               <br>
               
               <section style ="height: 40%";>
       
          <div class="card-body" name="text">
             <textarea placeholder="Write your text here" class="" id="checktext"  style="background-color: #3B1F9E; height: 90%;"  
             ></textarea>
           </p>
         </div>
         
      <div id = "keyslang" calss = "card-body" style="border-color: #cacaca; padding: 20px; border-style: none; height: 100px">
         <div style="padding-top:150px"></div>
            <input  id = "b2" type="submit" name="_action_checkText"
                 value="Check Text" onClick="doit();return false;" style="border: none; outline: none; padding-left: 10px; padding-right: 10px; width: 250px; background-color:  #3B1F9E; border-radius: 20px;
box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.05); height: 40px; color: white; font-weight: bold;" class="b-btn comp-btn"> 
            
                   
                 <div id="feedbackErrorMessage" style="color: red;"></div>
         </div>

         
        
       </section>
       </form>
       </article>
<br>
<br>

       <!-- Modal 1-->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

 <!-- Modal content 1-->
 <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     
   </div>
   <div class="modal-body">
        <iframe  height="315" width ="500" src="https://www.dictionary.com/browse/google" frameborder="0" allowullscreen style="max-width: 500px;"></iframe>
             
           </iframe>

           
           



   </div>
   

   
   <div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
 </div>
 
</div>
</div>

<!--modal2-->
 <!-- Modal 1-->
 <div class="modal fade" id="myModal2" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content 1-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         
       </div>
       <div class="modal-body">
            The Grammar and Spelling App is A Docufix feature that enables the users to check for grammatical errors in text.
   
            <h2 style="color: red">IMPORTANT</h2>

            <!--<input type="submit" name="_action_checkText"
                 
             class="btn btn-info btn-lg" value = "Check Text">-->

             <input  id = "b2" type="submit" name="_action_checkText"
                 value="Check Text"  style="padding-left: 10px; padding-right: 10px; width: 250px; background-color:  #3B1F9E; border-radius: 20px;
box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.05); height: 20px; color: white" class="b-btn comp-btn"> 
            
             <div>The button enables users to check for errors in the text field when clicked. After clicking on this button, grammatical, puntuations and spelling errors are highlighted, and that allows the user to right-click on the highlighted texts. When that is done, a quick corrections comes as a dropdown which enables the user to select the appropriate. </div>
             <div>After the first click, the grammar might not be totally correct, which means a user should keep on checking till no more see highlighted texts are.</div>
               <br/>
               
               <!--<input type="submit" name="_action_checkText"
               class="btn btn-info btn-lg" value = "Dictionary">-->
               <input type="button"  class="b-btn comp-btn bu"  data-toggle="modal"   value = "Dictionary">
           
              <div>The Dictionary button enables you sort out new words from a live dictionary. with this, you can be sure of adding new words, check for synonyms and antonyms to structure your grammar.
 </div>
                 <br>
                 <input type="button"  class="b-btn comp-btn bu"  data-toggle="modal"  value = "English">
            
<div>The above key is a dropdown of language tools that enables those who understand some other languages rather than English Language to out grammatical and spelling errors.</div>
 <br>

 <!--<input type="submit" name="_action_checkText"
                 class="btn btn-info btn-lg" value = "Help">
                 <div>The help button makes it easy for a user to understand how to make use of this tool with ease.</div>
       </div>-->
       
 
       
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
     
   </div>
 </div>
 </div>

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
         <script>
             var form = document.getElementById('b3');
             form.addEventListener('click', function(e){
               console.log('form submitted')
               e.preventDefault();
             })
             document.getElementsById('b33').addEventListener("click", function(e){
               e.preventDefault()
             })
             
             </script> 
          
          <!---Spelling Check App-->
          <script type="text/javascript"
              src="https://www.languagetool.org/js/jquery-1.7.0.min.js"></script>
          <script type="text/javascript"
              src="https://www.languagetool.org/online-check/tiny_mce/tiny_mce.js"></script>
          <script type="text/javascript"
              src="https://www.languagetool.org/online-check/tiny_mce/plugins/atd-tinymce/editor_plugin2.js"></script>
           
          
          
          <script language="javascript" type="text/javascript">  
            tinyMCE.init({
               mode : "textareas",
               plugins : "AtD,paste",
               paste_text_sticky : true,
               setup : function(ed) {
                   ed.onInit.add(function(ed) {
                       ed.pasteAsPlainText = true;
                   });
               },  
               /* translations: */
               languagetool_i18n_no_errors : {
                   // "No errors were found.":
                   "de-DE": "Keine Fehler gefunden."
               },
               languagetool_i18n_explain : {
                   // "Explain..." - shown if there is an URL with a detailed description:
                   "de-DE": "Mehr Informationen..."
               },
               languagetool_i18n_ignore_once : {
                   // "Ignore this error":
                   "de-DE": "Hier ignorieren"
               },
               languagetool_i18n_ignore_all : {
                   // "Ignore this kind of error":
                   "de-DE": "Fehler dieses Typs ignorieren"
               },
               languagetool_i18n_rule_implementation : {
                   // "Rule implementation":
                   "de-DE": "Implementierung der Regel"
               },
           
               languagetool_i18n_current_lang :
                   function() { return document.checkform.lang.value; },
               /* The URL of your LanguageTool server.
                  If you use your own server here and it's not running on the same domain 
                  as the text form, make sure the server gets started with '--allow-origin ...' 
                  and use 'https://your-server/v2/check' as URL: */
               languagetool_rpc_url                 : "https://languagetool.org/api/v2/check",
               /* edit this file to customize how LanguageTool shows errors: */
               languagetool_css_url :
                   "https://www.languagetool.org/online-check/" +
                   "tiny_mce/plugins/atd-tinymce/css/content.css",
               /* this stuff is a matter of preference: */
               theme                              : "advanced",
               theme_advanced_buttons1            : "",
               theme_advanced_buttons2            : "",
               theme_advanced_buttons3            : "",
               theme_advanced_toolbar_location    : "none",
               theme_advanced_toolbar_align       : "left",
               theme_advanced_statusbar_location  : "bottom",
               theme_advanced_path                : false,
               theme_advanced_resizing            : true,
               theme_advanced_resizing_use_cookie : false,
               gecko_spellcheck                   : false
            });
           
            function doit() {
               var langCode = document.checkform.lang.value;
               tinyMCE.activeEditor.execCommand("mceWritingImprovementTool", langCode);
            }
          </script>
          
       <script>$('#toggle-box-checkbox').on('change', function(){
           if(this.checked){
             $('body').addClass('night');
           }else{
             $('body').removeClass('night');
           }
         });
         
         
         
         
         
         // run demo if in searchresult preview
         function demo(){
             setInterval(function(){
               $("#toggle-box-checkbox").trigger('click');
             }, 1000);
         }
         if (document.location.pathname.indexOf('fullcpgrid')>-1){
           demo();
         }
         </script>      
</body>
</html>
     

