<?php
include "s.php";
date_default_timezone_set("Asia/Kolkata");
$fvalue = "";
$pinfo = "";
$nodps = "";
$wcpd = "";
$twc = "";
$df = "";
$sc = "";
$ta = "";
$Date_of_aading_bill_info = date("d-m-y h:i:s");
$divi = "****************Bill Info****************";


if (isset($_GET["fn"])) {
  $fvalue  = $_GET["fn"];
  if ($fvalue !== "") {
    $fname = 'reports/' . $fvalue . ".txt";
    if (file_exists($fname)) {
      $pinfo = file_get_contents($fname);
      if (isset($_GET['fn']) and isset($_GET["wcpd"]) and isset($_GET["nodps"])) {
        $nodps = (int) $_GET["nodps"];
        $wcpd = (int) $_GET["wcpd"];
        $totalc = $nodps * $wcpd;
        $twc = "Total Ward Cherges Is: " . $totalc;
        if (isset($_POST["showta"])) {
          //echo "show button clickd";
          if ($_POST['df'] !== '' and $_POST['sc'] !== '') {
            $df = (int) $_POST['df'];
            $sc = (int) $_POST['sc'];
            $ta = "Total Bill Is: " . $totalc + $df + $sc;

            //updaing billing inforamtion in patient file
            $file = fopen($fname, "a") or die("Unable to open file!");
            $data = "\n\n\n$divi \n\nDate Of Added Bill Information: $Date_of_aading_bill_info  \nNumber Of Days Patient Stayed:   $nodps \nWard Charges Per Day:   $wcpd \nTotal Ward Charges:   $twc \nDocters Fees:   $df \nService Fee:   $sc \n\n Total Bill:   $ta";
            fwrite($file, $data);
            fclose($file);




            echo '<div class="alert  alert-success alert-dismissible fade show" role="alert">
      <strong>Sucsess </strong> Patient Bill Generated Succesfully......
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
          } else {
            echo '<div class="alert  alert-warning alert-dismissible fade show" role="alert">
      <strong>Ohh No! </strong> Please Fill Up All Fields.......
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
          }
        }
      }
    } else {
      //echo "you entered patient file record not found";
      echo '<div class="alert  alert-danger alert-dismissible fade show" role="alert">
      <strong>Ohh No! </strong> you entered file name not found...please check your file name.......
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
  } else {
    echo '<div class="alert  alert-danger alert-dismissible fade show" role="alert">
      <strong>Ohh No! </strong> File Name Can\'t be empty....Please Provide Valid File Name...
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>bill-p</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="bill-p.css" media="screen">
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
  <meta property="og:title" content="bill-p">
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
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Help.php" style="padding: 10px 20px;">Help</a>
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
  <section class="u-clearfix u-image u-shading u-valign-middle-sm u-section-1" id="sec-cc54" data-image-width="1280" data-image-height="854">
    <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-gutter-0 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-top-xs u-container-layout-1">
              <div class="u-align-left u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                  <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-white u-list-item-1">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                      <h4 class="u-align-center u-text u-text-default u-text-1">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="Add-Patient.php" data-page-id="30932833"> Add New Patient Record</a>
                      </h4>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                      <h4 class="u-align-center u-text u-text-default u-text-2">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="diagnosis_info.php?fn=" data-page-id="73031056"> Add Diagnosis Information</a>
                      </h4>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                      <h4 class="u-align-center u-text u-text-default u-text-3">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="history-patient.php" data-page-id="2590707526"> History of the Patient </a>
                      </h4>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                      <h4 class="u-align-center u-text u-text-default u-text-4">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4" href="bill-p.php" data-page-id="27568231"> Bill of the patient</a>
                      </h4>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                      <h4 class="u-align-center u-text u-text-default u-text-5">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5" href="Help.php" data-page-id="74773116"> Help</a>
                      </h4>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-custom-color-1 u-custom-item u-list-item u-repeater-item u-video-cover u-list-item-6">
                    <div class="u-container-layout u-similar-container u-container-layout-7">
                      <h4 class="u-align-center u-text u-text-default u-text-6">
                        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-6" href="Log-Out.php" data-page-id="87297205">Log Out</a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-2">
            <div class="u-container-layout u-valign-top u-container-layout-8">
              <div class="u-align-center-lg u-align-center-md u-align-center-xl u-align-right-sm u-align-right-xs u-form u-form-1">
                <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 3px;" redirect="true">
                  <div class="u-form-group u-form-group-1">
                    <label for="text-8350" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $fvalue; ?>" onkeypress="enterKeyPressedff(event)" onblur="losingfocusff()" type="text" placeholder="Enter File Name" id="text-8350" name="filename" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-message">
                    <label for="message-b832" class="u-label">Patient Info</label>
                    <textarea disabled placeholder="Patient Info Will Show Here" rows="15" cols="50" id="message-b832" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""><?php echo $pinfo ?></textarea>
                  </div>
                  <div class="u-form-group u-form-name">
                    <label for="name-b832" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $nodps ?>" required type="number" placeholder="No. Of Days Patient Stayed....." id="name-b832" name="nodps" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-group u-form-group-4">
                    <label for="text-e4f9" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $wcpd ?>" onkeypress="enterKeyPressedwcps(event)" onblur="losingfocuswcpd()" required type="number" placeholder="Ward Charges/Day" id="text-e4f9" name="wcpd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-group-5">
                    <label for="text-3b6e" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $twc ?>" disabled type="text" placeholder="Total Ward Charges Will Shows here.." id="text-3b6e" name="wc" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-group-6">
                    <label for="text-71d3" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $df ?>" required type="number" placeholder="Docters Fee" id="text-71d3" name="df" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-group-7">
                    <label for="text-6ff0" class="u-form-control-hidden u-label"></label>
                    <input value="<?php echo $sc ?>" required type="number" placeholder="Service Charges" id="text-6ff0" name="sc" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-group-8">
                    <label for="text-03c9" class="u-label">Total Amount</label>
                    <input value="<?php echo $ta ?>" disabled type="text" placeholder="0/-" id="text-03c9" name="ta" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-align-center u-form-group u-form-submit">
                    <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-1 u-btn-7">Show Total Amount<br>
                    </a>
                    <input type="submit" value="submit" name="showta" class="u-form-control-hidden">
                  </div>
                  <div class="u-form-send-message u-form-send-success">remove me and my blcok.......am im nofification sender</div>
                  <div class="u-form-send-error u-form-send-message">remove me and my blcok.......am im nofification sender</div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
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
  <script>
    //var Myfun = {};

    function enterKeyPressedff(event) {
      if (event.keyCode == 13) {
        alert("Are You Sure With File Name?"); // im showing just alert for losing focus 
      }
    }

    function losingfocusff() {
      var filename = document.getElementById("text-8350").value; // getting value of filefield
      // Myfun.filename = filename;
      // document.cookie="fn={input_value}";
      window.location.href = "bill-p.php?fn=" + filename; //passing thi value get in url to extract it in php
      // alert(filename);

    }

    function enterKeyPressedwcps(event) {
      if (event.keyCode == 13) {
        alert("Are You Sure About Ward Charges Per Day?"); // im showing just alert for losing focus 
      }
    }

    function losingfocuswcpd() {
      var filename = document.getElementById("text-8350").value;
      var nodps = document.getElementById("name-b832").value;
      var wcpd = document.getElementById("text-e4f9").value;
      //wcpd = nodps * wcpd;
      // getting value of filefield
      //Myfun.wcpd = wcpd;
      // document.cookie="fn={input_value}";
      //passing thi value get in url to extract it in php
      // alert("value of ward charges per day is:" + wcpd);
      //alert("name of the file is= " + filename);
      window.location.href = "bill-p.php?fn=" + filename + "&wcpd=" + wcpd + "&nodps=" + nodps;

    }
  </script>

</body>

</html>