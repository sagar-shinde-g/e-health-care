<?php

session_start();
if (isset($_SESSION["username"])) {
  header("Location: Add-Patient.php");
}
if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $password =  $_POST["password"];
  if ($username == "" or $password == "") {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ohh 😮!</strong> Please fill all the required fields
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php
  } elseif ($username == "admin" and $password == "sagar@123") {
    $_SESSION["username"] = "admin";
    //  echo $_SESSION["username"];

  ?>
    <div class="alert  alert-success alert-dismissible fade show" role="alert">
      <strong>Success! </strong> Loading E-Health Care Panel....Please Wait......
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <script>
      setTimeout(function() {
        window.location.href = "Add-Patient.php";
      }, 3000);
    </script>
  <?php

  } else {
  ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>OHH No! </strong> You Enter Wrong Username Or Password.......Please Try Again....
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>



<?php
  }
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="​&nbsp; E-HEALTH CARE MANAGEMENT SYSTEM">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Home</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Home.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <link rel="icon" href="images/favicon.jpg">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">

  <style>
    * {

      /*overflow-y: auto;*/
      overflow: hidden;
    }
  </style>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "E-Health Care",
      "sameAs": [
        "index.php",
        "index.php",
        "index.php"
      ]
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body data-home-page="index.php" data-home-page-title="Home" class="u-body">
  <header class="u-align-center-sm u-align-center-xs u-clearfix u-header u-sticky u-sticky-bc4c u-white u-header" id="sec-2b01">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h3 class="u-align-left u-headline u-text u-text-default u-text-1">
        <a href="#"><span class="u-file-icon u-icon u-icon-1"><img src="images/4006511.png" alt=""></span>&nbsp;E-Health
          Care<span style="font-weight: 700;">
            <span style="font-style: italic;"></span>
          </span>
        </a>
      </h3>
      <nav class="u-align-left u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem;">
          <a class="u-button-style u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content">
              <g>
                <rect y="36" width="302" height="30"></rect>
                <rect y="236" width="302" height="30"></rect>
                <rect y="136" width="302" height="30"></rect>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact-Us.php" style="padding: 10px 20px;">contact Us</a>
            </li>
            
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 20px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact-Us.php" style="padding: 10px 20px;">contact Us</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Help.php" style="padding: 10px 20px;">Help</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <div class="u-align-center-md u-align-center-sm u-align-center-xs u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" href="index.php"><span class="u-icon u-social-facebook u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a859"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a859">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="twitter" href="index.php"><span class="u-icon u-social-icon u-social-twitter u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-49c8"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-49c8">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="instagram" href="index.php"><span class="u-icon u-social-icon u-social-instagram u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0aa1"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0aa1">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
              </path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
            </svg></span>
        </a>
      </div>
    </div>
    <style class="u-sticky-style" data-style-id="bc4c">
      .u-sticky-fixed.u-sticky-bc4c,
      .u-body.u-sticky-fixed .u-sticky-bc4c {
        box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.4) !important
      }
    </style>
  </header>
  <section class="u-clearfix u-section-1" id="carousel_6f88">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
      <div class="u-gutter-0 u-layout">
        <div class="u-layout-row">
          <div class="u-size-32">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1" style="background: #f2f2f2;">
                  <h5 class="u-align-center u-custom-font u-font-playfair-display u-text u-text-1"> WELCOME TO</h5>
                  <h1 class="u-custom-font u-font-playfair-display u-text u-text-2"> &nbsp; SHINDE SUPERSPECIALITY HOSPITAL</h1>
                  <div class="u-expanded-width u-form u-form-1">
                    <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-17 u-form-vertical u-inner-form" style="padding: 11px;" source="custom" name="form" redirect="true">
                      <div class="u-form-group u-form-group-1">
                        <label for="email-cd2c" class="u-form-control-hidden u-label">Email</label>
                        <input type="text" value='admin' placeholder="Enter Username......" id="email-cd2c" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1" required="required">
                      </div>
                      <div class="u-form-group u-form-group-2">
                        <label for="text-517b" class="u-form-control-hidden u-label"></label>
                        <input value='sagar@123' type="password" placeholder="Enter Password....." id="text-517b" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2" required>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit u-form-group-3">
                        <a href="#" class="u-active-grey-75 u-black u-border-1 u-border-active-grey-75 u-border-black u-border-hover-grey-75 u-btn u-btn-submit u-button-style u-hover-grey-75 u-btn-1">Login<br>
                        </a>
                        <input type="submit" value="submit" name="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success">Login Successful.......</div>
                      <div class="u-form-send-error u-form-send-message">Invalid Login.....Try Again</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                  <p class="u-custom-font u-font-montserrat u-text u-text-3"> 
                  "every human being is author of his own health or disease"<br>
                  - DR.Shinde.S.G
                 </p>
                  <div class="u-align-center u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cda9"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-cda9">
                          <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z">
                          </path>
                        </svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-af41"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-af41">
                          <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z">
                          </path>
                        </svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" href="index.php" title="Home"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-156b"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-156b">
                          <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z">
                          </path>
                          <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                          </path>
                          <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z">
                          </path>
                        </svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-28">
            <div class="u-layout-col">
              <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="1280" data-image-height="854">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a2e1">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">copyright ©&nbsp;2022 | developed by sagar<span style="font-weight: 700;"></span>
      </p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>