<?php
if (isset($_POST['contact_submit'])) {
  $name = $_POST["contact_name"];
  $email = $_POST["contact_email"];
  $subject = $_POST["contact_subject"];
  $message = $_POST["contact_message"];

  if ($name !== "" and $email !== "" and $subject !== "" and $message !== "") {
    echo ' <div class="alert  alert-success alert-dismissible fade show" role="alert">
      <strong>Thanks For Contact Us!</strong> We Got Your Inforamation ' . $name . '. We will contact You As Soon As Possible....
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  } else {
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Ohh 😮!</strong> Please fill all the required fields
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
  <meta name="keywords" content="Contact Us For Service">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>contact Us</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="contact-Us.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <link rel="icon" href="images/favicon.jpg">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <style>
    * {

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
  <meta property="og:title" content="contact Us">
  <meta property="og:description" content="">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
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
  <section class="u-clearfix u-section-1" id="carousel_edbf">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-size-30">
              <div class="u-layout-col">
                <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="1280" data-image-height="717">
                  <div class="u-container-layout"></div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-2">
                  <div class="u-container-layout u-container-layout-2">
                    <h1 class="u-align-center u-text u-text-1">Contact Us For Service</h1>
                    <div class="u-expanded-width u-form u-form-1">
                      <form action=<?php echo $_SERVER["PHP_SELF"]; ?> method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="contact-form" redirect="true">
                        <div class="u-form-group u-form-name u-form-partition-factor-2 u-form-group-1">
                          <label for="name-d70e" class="u-form-control-hidden u-label">Name</label>
                          <input type="text" value='' placeholder="Enter your Name" id="name-d70e" name="contact_name" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-2">
                          <label for="email-d70e" class="u-form-control-hidden u-label">Email</label>
                          <input type="email" value='' placeholder="Enter a valid email address" id="email-d70e" name="contact_email" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-address u-form-group u-form-group-3">
                          <label for="address-2127" class="u-form-control-hidden u-label">Subject</label>
                          <input type="text" value='' placeholder="Enter your subject" id="address-2127" name="contact_subject" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-white" required="">
                        </div>
                        <div class="u-form-group u-form-message u-form-group-4">
                          <label for="message-d70e" class="u-form-control-hidden u-label">Message</label>
                          <textarea value='' placeholder="Enter your message" rows="4" cols="50" id="message-d70e" name="contact_message" class="u-border-1 u-border-palette-5-base u-input u-input-rectangle u-white" required=""></textarea>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-form-group-5">
                          <a href="#" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Submit</a>
                          <input type="submit" value="submit" name="contact_submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                        <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                      </form>
                    </div>
                  </div>
                </div>
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