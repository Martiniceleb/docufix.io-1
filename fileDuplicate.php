<?php
   
   include 'controller.php';

 
 
      


?>
<!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Docufix | Duplicates Check</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="manifest" href="manifest.json" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/wysiwyg.css">
        <link rel="stylesheet" type="text/css" href="css/fileupload.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="css/fileDuplicate.css">
        <link rel="stylesheet" type="text/css" href="css/fileupload.css">

      
       <script type="text/javascript" src ="//widget.instabot.io/jsapi/rokoInstabot.js" crossorigin>
        apiKey: "vXj90M2ifAvu8fS739jFKepTXtES72ur59sGR5TPK9c="
      </script>
    </head>

    <body style="background-color:  white; font-family: Ubuntu;"
    onload="view()">
        <!--Header-->
                <!-- Modal -->
                <div class="modal fade" id="instructionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">BEFORE GETTING STARTED</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul>
                    <li class="modal-list">Docufix Duplicate Checker supports file formats like .txt, .docx, .csv, .json, .xml .txt .pdf, .rtf, .odt, .html, .xpt, .ods, .xls, .epub .css and .dta for
                      <strong>uploading</strong></li>
                      <li class="modal-list">To check duplicates you will need to provide a delimiter in which the text is seperated i.e <strong>
                        random@gmail.com,
                        random,
                        docufix@gmail.xom,
                        random@gmail.com,
                        random
                      </strong> </li>
                      <li>The above example is seperated by a ',' (comma). So in the delimeter box you are to provide the comma as the delimeter</li>
                    <li class="modal-list">To check duplicates in your documents aside from the ones mentioned above, Kindly make use of the text
                      option, then <strong> copy</strong> and <strong> paste</strong> into the text-box.</strong></li>

                    <li class="modal-list">After clicking remove duplicates to remove the duplicate, A modal will pop up showing you the duplicates you have in the file</li>
                    <li>Then you can go ahead to remove the duplicate by clicking remove duplicate in the modal</li>
                    <li>Your result can be downloaded as .docs and pdf files</li>
                    <li>Results are  <strong>editable,</strong> this means you can edit your work for correction after
                      removing duplicates.</li>
                  </ul>
        
                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        <!-- <div class="w3-container" >
            <div id="id01" class="w3-modal" >
              <div class="w3-modal-content mb-0">
                <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright mb-0">&times;</span>
                  
                  <div class="form-group pl-3 mb-0" id="checkbox">
                    <label for="modalSetting" class="font-weight-bold"><input type="checkbox" name="modal" id="modalSetting" onchange="visibility()"> Check this box to stop getting this alert</label>
                    
                  </div>
                <div id="modal-header">
                  <h2>BEFORE GETTING STARTED</h2>
                </div>
        
                <div id="modal-content">
                  <ul>
                    <li class="modal-list">Docufix only supports file formats like .docx, .csv, .json, .xml .txt .pdf, .rtf, .odt, .php, .xpt, .ods, .xls, .epud, .css and .dta for
                      <strong>uploading</strong></li>
                    <li class="modal-list">To compare documents aside from the ones mentioned above, make use of the text
                      option, then <strong> copy</strong> and <strong> paste</strong> into the text-box.</strong></li>
                    <li class="modal-list">Result of the documents compared is given in percentage %</li>
                    <li><span style="background-color: red" class="space"> RED HIGHLIGHT</span> Means the texts in second text
                      input that are not found in the first text input</li>
                    <li><span style="background-color: yellow" class="space"> YELLOW HIGHLIGHT</span> Means the texts in first
                      text input that are not found in the second text input</li>
                    <li><strong> PLAIN TEXT</strong> Means text found in both tex inputs</li>
                    <li>Compared documents can be downloaded as .docs and pdf files</li>
                    <li>Compared texts are <strong>editable,</strong> this means you can edit your work for correction after
                      comparing.</li>
                  </ul>
        
                  <h1 id="important">IMPORTANT!!!</h1>
                  <ul>The following activities would not be efficiently carried out on mobile phone except for larger screen
                    sizes:
        
                    <li>Comparing of documents</li>
                    <li>Formatting of compared document</li>
                  </ul>
                </div>
        
        
        
        
              </div>
            </div>
          </div> -->
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
        <!--Body-->
        <div id="main">

          
          
           <div id="main" style="background-color: #ffffff;">
          
            <div class="container mt-5 pt-5" style="min-height: 100vh" >
                <div class="row mx-auto">
                  <div class="col-md-8">
                    <div class="row" style="border: 1px solid rgb(245, 238, 238); background-color:rgba(59, 31, 158, 0.05)">
                      <div class="col-md-2 p-3 mr-0 mr-md-4">
                        <div class=" bg-light pt-5 mx-auto mx-md-0 pr-md-5"  style="border-radius: 50%;height: 110px; width: 120px;color: white;"></div>
                      </div>
                      <div class="col-md-9">
                        <div class="pl-0 pl-md-4 pt-4">
                          <h4 class="  pl-0 font-weight-bold text">Remove Duplicates</h4>
                                  <p class="font-weight-bold text" style="max-width: 100%"> Docufix is one of the most innovative Technology of our age. Built solidly with the latest technological tools for file and data management. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                    <div class="row pl-0 pl-md-2">
                        <div class="mx-auto" style="border: 1px solid rgba(222, 230, 234, 0.6); background: #F6F8F9">
                          <div class="p-4">
                              <h5 class="pb-4 font-weight-bold" style="color: rgba(12, 10, 90, 0.8)">Other Tools:</h5>
                              <a href="grammarChecker.php" class="btn btn-sm rounded-pill font-weight-bold" style="color: rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)">Grammar check</a>
                                          <a href="fileUpload.php" class="btn btn-sm rounded-pill font-weight-bold" style="color:rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)">Compare files</a>
                                          <div class="btn float-right" style="cursor: pointer;color: rgba(12, 10, 90, 0.8)"  id="instructionLink"> Instructions</div>
                          </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              <div>
                  
              <!-- <h2 class="text-center text-light p-3 mt-5 ">
                <span class="text-light mr-md-5 pr-md-5 active1"><a href="#" id="fileBtn" class="active1 pb-1"
                    style="text-decoration: none; margin-right: 10px;"><img class="top-icons"
                      src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571193844/samples/figma%20career-list/lario/xisa8mltboqmepbzjqks.png">File</a></span><span
                  class="text-light ml-md-5 pl-md-5"><a href="#" id="textBtn"
                    style="text-decoration: none; margin-left: 10px"><img class="top-icons"
                      src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571193193/samples/figma%20career-list/lario/slpij76xxh4f7bpixbr5.png">Text
                  </a></span>
              </h2> -->

                            <!-- Modal -->
                            <div class="modal fade" id="duplicateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Duplicates to be removed </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="duplicate-body">
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="remove__duplicates">Remove Duplicates</button>
                    </div>
                  </div>
                </div>
              </div>



              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <div class="btn p-0 rounded-pill py-2" style=" background-color: rgba(59, 31, 158, 0.05)">
                   <div class="btn-sm btn rounded-pill active1 px-0"  id="fileBtn" ><span class=" px-5 py-3 rounded-pill m-0"
                        style="text-decoration: none; margin-right: 10px;font-weight:  800;">File</span></div>
                      <div class="btn-sm btn rounded-pill px-0"  id="textBtn" style="cursor: pointer"><span class="px-5 py-3 rounded-pill m-0" style="text-decoration: none; margin-left: 10px;">Text
                      </span></div>
                </div>
                </div>
            </div>
            
        
              <div id="file">
                <div class="text-center mt-5">
                  <form class="mb-5" id="uploadForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-6">

                    
                    <div class="upload-container">
                            <div class="dotted-container">
                                <div class="folder-logo">
                                        <div class="white-circle text-center">
                                                <img class="img-fluid" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png" alt="" style="margin: auto" srcset="">
                                            </div>
                
                                            <!-- <input type="file" name="" id=""> -->
                                            <div class="upload-files-section">
                                                <p id="file-uploaded"></p>
                                            <p id='buttonid' required>  <img class="img-fluid"  width="24" height="18" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png" alt="" style="margin: auto" srcset=""> Click to add file </p> 
                                            <input id='upload1' name="file1"  type='file' required hidden/>
                                            
                                            
                                            <a  href="#" id="uploadUrlBtn" ><img src="https://res.cloudinary.com/rammy/image/upload/v1572652721/uploadLogo.png" class="img-fluid"  alt=""> Click to add URL link</a>
                
                                             </div>
                                </div>
                        
                                </div>
                        </div>
                        </div>
                        <div class="col-md-6 text-left delimiter-flex">
                            <label for="delimiter">Enter Delimeter here</label>
                            <input id="delimiter" for="delimiter" type="text" required name="delimiter" class="form-control delimterInput" placeholder="E.g:  , ; . ">
                        </div>
                    </div>
                     <?php
                               
                               

                             
                              if(isset($_SESSION['login_user'])){
                                echo '<div class="form-group">
                      <button id="uploadBtn" type="submit" value="submit"
                        class="btn uploadBtnClass">Remove Duplicate</button>
          
                         
                    </div>';
                              
                                  
                            }
                            else {
                              echo '<div class="form-group">
                      <a href="login.php?redirect=fileDuplicate.php"><button id="uploadBtn" type="submit" value="submit"
                        class="btn uploadBtnClass">Remove Duplicate</button></a>
          
                         
                    </div>';

                            }


                        ?>
                 
                   
                  </form>
          
          
          
          
                  <form class="mb-5" id="uploadURLForm" method="POST">
                        <div class="upload-container">
                            <div class="dotted-container">
                                <div class="folder-logo">
                                        <div class="white-circle text-center">
                                                <img class="img-fluid" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png" alt="" style="margin: auto" srcset="">
                                            </div>
                
                                            <div class="upload-files-section">
                                            <input id="url1" type="url" name="url1" class="form-control delimterInput" placeholder="https://file-examples.com/wp.docx" required />
                                            <input id="delimiter" for="delimiter" type="text" required name="delimiter" class="form-control delimterInput" placeholder="Enter Delimeter">
                                    

                                            <p id='uploadFileToggle'> 
                                                 <img class="img-fluid"  width="24" height="18" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png"
                                                  alt="" style="margin: auto" srcset=""> Click to add file </p> 


                
                                            </div>
                                    </div>
                            
                                    </div>
                            </div>
                            <button  type="submit" value="submit"
                            class="btn uploadBtnClass">Remove Duplicate</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="progress" style="display: none">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
                  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
          
                </div>
              </div>
              <div id="status"></div>
              <div id="text" style="display: none;">
                <form class="textDuplicate">
                    <div class="row no-padding">
                      <div class="col-md-6 no-padding text-center">
                        <label for="textareaBefore">Enter Text</label>
                        <textarea id="textareaBefore" required></textarea>
                      </div>
                      <div class="col-md-6 no-padding text-center">
                        <label for="textareaResult">Result</label>
                          <textarea id="textareaResult"></textarea>
                      </div>
                    
                    </div>

                        <label for="delimiterText">Delimeter: </label>
                        <input id="delimiterText" type="text" class="form-control delimterInput" placeholder="Enter Delimeter" required>
                        
                          <div class="button-container text-center">


                            
                               <?php
                  if(isset($_SESSION['login_user'])){
                  echo '
                   <button  class="btn font-weight-bold text-light rounded-pill px-5" style="background-color:  #3B1F9E;" type="submit" id="removeDuplicateText"> Remove Duplicate</button>
                  ';
                  }
                else
                {
                    echo '
                     <a href="login.php?redirect=fileDuplicate.php"><button  class="btn font-weight-bold text-light rounded-pill px-5" style="background-color:  #3B1F9E;" type="submit" id="removeDuplicateText"> Remove Duplicate</button> <a href="login.php?redirect=fileDuplicate.php">
                  ';
                }
                ?>
                              <button class="btn rounded-pill resetBtn" id="resetbutton">Reset</button>
                          </div>
                            
                </form>
                            </div>
                      <!-- <div class="row mt-5">
                  <div class="col-md-5">
                    <div class="card">
                      <div class="card-header text-light" style="background-color:rgba(51, 138, 196, 0.4);">
                        <img class="white-txt"
                          src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571194266/samples/figma%20career-list/lario/ct8pi1qsjgonxsa7zdyn.png">Text
                      </div>
                      <div class="card-body" style="background-color:rgba(61, 155, 218, 0.4);">
                        <textarea placeholder="Write your text here" class="" id="textareaBefore" cols="" rows="10"
                          style="border: 0;"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2 text-center mt-5 mb-5"> <img style="padding-top: 50%;" id="compare-txt"
                      class="align-middle"
                      src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571193103/samples/figma%20career-list/lario/hyu5pvtsmqxymfx5ohwi.png">
                  </div>
                  <div class="col-md-5">
                    <div class="card">
                      <div class="card-header text-light" style="background-color:rgba(51, 138, 196, 0.4);">
                        <img class="white-txt"
                          src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571194266/samples/figma%20career-list/lario/ct8pi1qsjgonxsa7zdyn.png">
                        Text
                      </div>
                      <div class="card-body" style="background-color:rgba(61, 155, 218, 0.4);">
                        <textarea placeholder="Write your text here" class="input-txt" id="textareaAfter" cols="" rows="10"
                          style="border: 0;"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center m-5">
                  <button value="compare" class="btn font-weight-bold text-light"
                    style="background-color:rgba(51, 138, 196, 0.4);" type="submit" onclick="buttonCompareClicked();"> <img
                      class="compare-img"
                      src="https://res.cloudinary.com/dtbjhs8a6/image/upload/v1571193103/samples/figma%20career-list/lario/butfaguuckar9dl0i1ug.png"
                      width="23" height="23" style="margin-right: 10px;">Compare</button>
                </div> -->
               
                <div class='container' id="resultArea">
                  <div id="page"></div>
                   
                    <textarea id="textareaDifferences" style="min-height:100%; width: 100%;overflow: scroll; box-shadow: 0px 0px 4px 1px grey"  cols="30" rows="10"></textarea>

                <button onclick="document.getElementById('id02').style.display='block'" class="btn-dark mt-2 mb-5"
                  style="padding: 7px 14px;"><i class="fas fa-cloud-download-alt"></i>Download <strong>HERE</strong></button>
                </div>
                    
                <!---MODAL FOR SAVE AS-->
          
                                              
          
          
                <!-- <div class="w3-container">
                  <div id="id02" class="w3-modal">
                    <div class="w3-modal-content" style="border-radius: 4px;">
                      <div class="w3-container">
                        <span onclick="document.getElementById('id02').style.display='none'"
                          class="w3-button w3-display-topright">&times;</span>
                        <br />
                        <br />
          
                        <input type="text" placeholder="Please Specify Document Name..." id="saveAs" required></input>
                        <button id="btn-export" onclick="exportHTML();" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                            class="fas fa-cloud-download-alt"></i> Download as word
                          doc</button>
                        <button id="cmd" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                            class="fas fa-cloud-download-alt"></i>Download as PDF</button>
                            <button id="btn-export" onclick="txt();" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                              class="fas fa-cloud-download-alt"></i> Download as .txt
                                              
                      </button>
                      </div>
                    </div>
                  </div>
                </div>
          
          
          
              </div>
           -->
              <!--END OF MODAL-->
              <div align="right" class="shareBtn" id="shareBtn">
                <h4>Helpful? Please Share With Your Friends On:</h4>
                <button class="twtShare" data-js="twitter-share"><i class="fab fa-twitter"></i> Twitter</button>
                <button class="fbShare" data-js="facebook-share"><i class="fab fa-facebook-f"></i> Facebook</button>
                <button class="fbShare" data-js="facebook-share"><a
                    href="mailto:info@example.com?&subject=&body=http://docufix.ga Hey! I just compared my files for similarities on Docufix"><i
                      class="fas fa-envelope"></i> Email</a></button>
              </div>
          

            </div>
        </div>
            
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="./js/fileDuplicate.js"></script>
        <script src="./js/app.js"></script>

         
           
            <script src="https://kit.fontawesome.com/7967e81f77.js" crossorigin="anonymous"></script>
            <script src = "./js/jsTXT.js"></script>
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