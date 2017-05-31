<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <!-- <link rel="stylesheet" href="styles_home.css"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<script>
  function menuToggleFunction() {
      var menu = document.getElementById("burgerMenu");
      var nav_cont = document.getElementById("topnav_container");
      var nav_bg = document.getElementById("navBackground");
      if (menu.className === "inactiveMenu") {
          menu.className = "activeMenu";
          nav_cont.className += ' Responsive';
          nav_bg.className += ' Responsive'
      } else {
          menu.className = "inactiveMenu";
          nav_cont.className = "topnav_container";
          nav_bg.className = "navBackground";
      }
  }


  $(document).ready(function()  {

     var page_url = window.location.href.substr().split("http://shiatsu-meier.ch/")[1];
     // alert(page_url);
     var page_name = page_url.split("/")[0];
     // alert(page_name);

     $("#topnav_wrapper ul li a").each(function(){
          if(($(this).attr("href") == "http://shiatsu-meier.ch/" + page_name) || ($(this).attr("href") == "http://shiatsu-meier.ch/home" && page_name == "")) {
            $(this).addClass("active");

        }
     })

   });


 </script>

</head>

<body>
  <div id="header_background_container"> </div>
  <div id="header_container">

    <img id="logo" src="http://shiatsu-meier.ch/WordPress/wp-content/uploads/2016/11/logo_white_matt.png" alt="Logo">
    <a href="javascript:void(0);" onclick="menuToggleFunction()">
      <img id="burgerMenu" class="inactiveMenu" src="http://shiatsu-meier.ch/WordPress/wp-content/uploads/2016/11/menu_icon_white.png" alt="BurgerMenu">
    </a>
    <div class="topnav_container" id="topnav_container">
      <div id="topnav_wrapper">
        <ul class="topnav">
          <li> <a href="http://shiatsu-meier.ch/home">Home</a> </li>
          <li> <a href="http://shiatsu-meier.ch/methoden">Methoden</a> </li>
          <li> <a href="http://shiatsu-meier.ch/portrait">Portrait</a> </li>
          <li> <a href="http://shiatsu-meier.ch/praxis">Praxis</a> </li>
          <li> <a href="http://shiatsu-meier.ch/kosten">Kosten</a> </li>
          <li id="kontakt"> <a href="http://shiatsu-meier.ch/kontakt">Kontakt</a> </li>
        </ul>
      </div>
    </div> <!-- topnav_container -->

  </div> <!-- header_container -->


  <div class ="navBackground" id="navBackground"></div>
  <div class="headerPadding"> </div>

  <div class="main_content">