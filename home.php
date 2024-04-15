<?php
session_start();
$menu = array("Home" => "home.php", "Tour" => "tour.html", "Our Pets" => "ourpets.php");

// Sort the menu items by their keys (menu item names)
ksort($menu);
?>
<!DOCTYPE html>
<html>

<head>
  <meta lang="en">
  <title>PetPal</title>
  <link rel="stylesheet" href="css/col.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/form4.css">
  <link rel="stylesheet" href="css/location.css">
  <script src="javascript/buttonat.js"></script>
  <script src="javascript/location.js"></script>

  <style>
    * {
      box-sizing: border-box
    }

    .mySlides {
      display: none
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;

    }

    /* Teksi ne slideshow */
    .text {
      color: #f2f2f2;
      font-size: 17px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
      font-weight: bold;
    }

    /* Numrat (1/7 ) */
    .numbertext {
      color: #f2f2f2;
      font-size: 13px;
      padding: 10px 12px;
      position: absolute;
      top: 42%;
    }

    /* Pika qe tregojn ne cilen foto te sllajdit gjendemi */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    /* Zbehja e animacionit,koha,etj */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.9s;
      animation-name: fade;
      animation-duration: 1.9s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* Ndryshimi i tekstit ne paisje te ndryshme */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }

    /*slideshow*/
    /*Selektori klas per percaktimin e ngjyres tekstit the parametrave tjere kur butonat jane te mbyllur*/
    button.accordion {
      background-color: #bfbfbf;
      /*background-color per butonat*/
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 90%;
      border: none;
      text-align: left;
      outline: none;
      transition: 0.4s;
      margin: 5px 5%;
      font-weight: bold;
      /* disa nga vetit e font*/
      font-size: 130%;
    }

    button.accordion.active,
    button.accordion:hover {
      background-color: #ddd;
    }

    button.accordion:after {
      content: '+';
      font-size: 19px;
      color: #777;
      float: right;
      margin-left: 5px;
    }

    button.accordion.active:after {
      content: "-";

    }

    div.panel {
      padding: 0 18px;
      background-color: #e7e8ed;
      color: black;
      max-height: 0;
      width: 90%;
      margin-left: 5%;
      overflow: hidden;
      transition: 0.3s ease-in-out;
      opacity: 0;
    }

    div.panel.show {
      /*Selektori klase i perveqshem, div kur hapet butoni*/
      opacity: 1;
      max-height: 30%;
    }

    .a {
      float: right;
    }

    #Clock {
      font-size: 17px;
      background-color: rgb(80, 80, 80);
      color: rgb(210, 210, 210);
      padding: 10px;
      max-width: 25%;
      float: right;
      margin-top: -10%;
      margin-right: 2%;
    }
  </style>

</head>

<body>

  <script>
    if (!localStorage.pageLoadCount)
      localStorage.pageLoadCount = 0;
    localStorage.pageLoadCount = parseInt(localStorage.pageLoadCount) + 1;
    console.log("You load this page " + localStorage.pageLoadCount + " time/s");
  </script>
  <?php
  $meny = array("home.php", "tour.html", "ourpets.php",);
  ?>
  <header>
    <div class="menu">
      <h3 id="logo">All About Pets</h3>
      <nav>
        <ul>
          <?php
          // Output the sorted menu items
          foreach ($menu as $menuItem => $url) {
            echo "<li><a href=\"$url\">$menuItem</a></li>";
          }
          ?>
        </ul>
      </nav>
    </div>
  </header>

  <!--Titulli-->


  <p id="title" style="text-transform: uppercase; color:red">All About Pets</p>
  <br>
  <article>
    <!--PhotoMap-->
    <section>
      <div style="margin:8%;">
        <!-- <img style="float:left;margin-left=0px;" src="images/map.png"  alt="World" usemap="#planetmap">  Image dhe disa atribute te tag-ut -->

        <map name="planetmap">
          <area shape="rect" coords="133,45,201,124" alt="Amerika V" href="tour.html#amerikav" style="outline:none;cursor:pointer;">
          <area shape="rect" coords="203,199,268,279" alt="Amerika J" href="tour.html#amerikaj" style="outline:none;cursor:pointer;">
          <area shape="rect" coords="372,54,434,90" alt="Europa" href="tour.html#europa" style="outline:none;cursor:pointer;">
          <area shape="rect" coords="488,40,643,167" alt="Azia" href="tour.html#azia" style="outline:none;cursor:pointer;">
          <area shape="rect" coords="355,130,462,299" alt="Afrika" href="tour.html#afrika" style="outline:none;cursor:pointer;">
          <area shape="rect" coords="625,243,696,288" alt="Australia" href="tour.html#au" style="outline:none;cursor:pointer;">
        </map>

        <div>
          <h3 style="padding-left: 50px;">Login Section</h3>
          <p style="padding: 50px;">Members only</p>
          <a href="login1.php" style=" border-radius: 20px;margin-left:17%;padding: 8px;text-decoration:none; color:white; background:grey">Login</a>
        </div>
      </div>
    </section>
    </br> </br></br> </br>
    </br> </br>
    </br> </br>

    <section>
      <!--Quotes-->
      <br><br>
      <div>
        <div class="majt"> <cite id="js"></cite>
          <br><br>
          <pre style="font-weight:bold;font-size:15px;">                       <abbr title="Gustave Flaubert" style="text-decoration:none;">-G.F.-</pre><br>
          <script>
            document.getElementById("js").innerHTML =
              "Is always sad to leave a place to which one knows one will never return.Such are the melancolies du voyage: perhaps they are one of the most rewarding things about traveling. ";
          </script>
        </div>
        <div class="nemes"><cite>And if travel is like love, it is, in the end, mostly because it’s a heightened state of awareness,
            in which we are mindful, receptive, undimmed by familiarity and ready to be transformed.
          </cite><br><br>

          <pre style="font-weight:bold;font-size:15px;">                      <abbr title="Pico Iyer" style="text-decoration:none;">-P.I.-</pre>
        </div>
        <div class="djatht"><cite>Twenty years from now you will be more disappointed by the things you didn’t do than by the ones you did.
            So throw off the bowlines, sail away from the safe harbor.
            Catch the trade winds in you sail. Explore. Dream. Discover.</cite>
          <pre style="font-weight:bold;font-size:15px;">                      <abbr title="Mark Twain" style="text-decoration:none;"> -M.T.-</abbr></pre>
        </div>
      </div>
    </section>
    <section>
      <!--SLideShow-->

      <br>
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 7</div>
          <img src="images/rome.jpeg" style="width:100%">
          <div class="text">Colosseum-Italy</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 7</div>
          <img src="images/india.jpg" style="width:100%">
          <div class="text">Taj Mahal-India</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 7</div>
          <img src="images/peru.jpg" style="width:100%">
          <div class="text">Machu Picchu-Peru</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">4 / 7</div>
          <img src="images/rio.jpg" style="width:100%">
          <div class="text">Christ the Redeemer-Brazil</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">5 / 7</div>
          <img src="images/egypt.jpeg" style="width:100%">
          <div class="text">Egyptian Pyramids</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">6 / 7</div>
          <img src="images/china.jpg" style="width:100%">
          <div class="text">Great Wall-China</div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">7/ 7</div>
          <img src="images/usa.jpg" style="width:100%">
          <div class="text">The Statue of Liberty-USA</div>
        </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          setTimeout(showSlides, 2000); //  2 seconda
        }
      </script>
    </section>
    <section>
      <!--Pjesa e butonave -->

      <button class="accordion">Ecotourism</button>
      <div class="panel">
        <span style="font-size:110%; ">
          <figure class="a"><img src="images/eco.jpg" alt="Ecotourism" width="200" height="155" onmouseover="rritur(this)" onmouseout="normal(this)">
            <figcaption>Ecotourism photo</figcaption>
          </figure>
          Ecotourism is a form of tourism involving visiting fragile, pristine, and relatively undisturbed natural areas,
          intended as a low-impact and often small scale alternative to standard commercial mass tourism.
          It means responsible travel to natural areas conserving the environment and improving the well-being of the local people.Its purpose may be to educate the traveler,
          to provide funds for ecological conservation, to directly benefit the economic development and
          political empowerment of local communities, or to foster respect for different cultures and for human rights. Since the 1980s,
          ecotourism has been considered a critical endeavor by environmentalists, so that future generations may experience destinations relatively untouched by human intervention.
          Several university programs use this description as the working definition of ecotourism.
        </span>
      </div>
      <button class="accordion">Cultural Tourism </button>
      <div class="panel">
        <span style="font-size:110%;">
          <figure class="a"><img src="images/cult.jpg" alt="Cultural Tourism" width="200px" height="140px" onmouseover="rritur(this)" onmouseout="normal(this)">
            <figcaption>Cultural Tourism photo</figcaption>
          </figure>
          Cultural Tourism (or culture tourism) is the subset of tourism concerned with a traveler's engagement with a country or region's culture,
          specifically the lifestyle of the people in those geographical areas, the history of those people, their art, architecture, religion(s), and other elements that helped shape their way of life.
          Cultural tourism includes tourism in urban areas, particularly historic or large cities and their cultural facilities such as museums and theatres.
          It can also include tourism in rural areas showcasing the traditions of indigenous cultural communities (i.e. festivals, rituals), and their values and lifestyle,
          as well as niches like industrial tourism and creative tourism.
        </span>
      </div>

      <button class="accordion">Geotourism </button>
      <div class="panel">
        <span style="font-size:110%;">
          <figure style="float:left;"><img src="images/geo.jpg" alt="Geotourism" width="180" height="150" onmouseover="rritur(this)" onmouseout="normal(this)">
            <figcaption>Geotourism photo</figcaption>
          </figure>
          Geotourism deals with the natural and built environments.
          Geotourism was first defined (Hose, 1995) in England.There are two viewpoints of geotourism:
          <ol style="list-style-type:upper-alpha;">
            <li>Purely geological and geomorphologically-focused Sustainable Tourism as abiotic nature based tourism.
              This is the definition followed in most of the world.</li>
            <li>Geographically Sustainable Tourism, the most common definition in the USA.
              This emphasises preservation of the geographical sense of a place in general,
              beyond simple geological and geomorphological features,
              as a new charter and concept in the sustainable tourism.</li>
          </ol>
        </span>

      </div>

      <!--JS(script)-->
      <script>
        var acc = document.getElementsByClassName("accordion"); /*perdorimi i document.getElements manipulimi me klasa , ne acc variabel ruhet vlera e marrur nga elementet ku klasa e tyre eshte accordion*/
        var i;

        for (i = 0; i < acc.length; i++) {
          /* Kur hapet butoni shfrytezohet unaza qe permes funksioneve kalon ben te hapet permbajtja ne buton lidhje e cila mundesohet permes atributit klass accordion qe ketu e perkufizoj me variablen acc */
          acc[i].onclick = function() {
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
          }
        }
      </script>
    </section>
  </article>
  <footer>
    <br>

    <div style="margin-left:8%;margin-top:5%;width:70%;">
      <p><b>Where to find us:</b></p>

      <?php
      $numri1 = "+377(44)321-645";

      $ndarja = explode("(", $numri1);
      $ndarja1 = $ndarja[0];
      $ndarja2 = $ndarja[1];
      $prefiks = preg_replace("[377]", "383", $ndarja1);
      $vargu1 = array($prefiks, $ndarja2);
      $numriRi1 = implode("(", $vargu1);

      $numri2 = "+386(49)321-645";

      $nd = preg_split("[\)]", $numri2);
      $nd1 = $nd[0];
      $nd2 = $nd[1];
      $prefiksi = preg_replace("[386]", "383", $nd1);
      $vargu2 = array($prefiksi, $nd2);
      $numriRi2 = implode(")", $vargu2);

      echo '<p><img src="images/telephone.png" alt="Telephone"><span class="findfooter">' . $numriRi1 . '</span>
           <img src="images/fax.png" alt="Fax"><span>' . $numriRi2 . '</span></p>'
      ?>
      <p><a href="mailto:info@travel.com?Subject=Hug%20The%20World" style="text-decoration:none;color:black;"><img src="images/email.png" alt="Email"><span class="findfooter"> info@travel.com </span></a>
        <img src="images/web.png" alt="Web"><span><u> www.hug-the-world.com </u></span>
      </p>
    </div>



    <!-- Data -->

    <div id="Clock"></div>

    <script src="javascript/clock.js"></script>

    <div style="float:right;margin-top:-5%;margin-right:10%;">
      <button onclick="getLocation()" class="Location">Your location</button>
      <p id="loc"></p>
    </div>

    <nav style="margin-left:45%;" id="llogo">

      <a href="https://vimeo.com/search?q=hug%20the%20world" target="_blank"> <img src="images/vimeo.png" alt="Vimeo" id="imglogo"></a>
      <a href="https://twitter.com/World" target="_blank"> <img src="images/twitterlogo.png" alt="Twitter" id="imglogo"></a>
      <a href="https://www.facebook.com/Hug-The-World-100636051710043" target="_blank"> <img src="images/facebooklogo.png" alt="Facebook" id="imglogo"></a>
      <a href="https://www.instagram.com/hug__the__world/" target="_blank"> <img src="images/instagramlogo.png" alt="Insta" id="imglogo"></a>
      <a href="https://www.youtube.com/channel/UCrBPPGyR_7aOd882VpMRkRg" target="_blank"> <img src="images/youtubelogo.png" alt="YT" id="imglogo"></a>
      <a href="https://www.pinterest.com/explore/family-travel/" target="_blank"> <img src="images/pinterestlogo.png" alt="P" id="imglogo"></a>
    </nav>
    <br><br><br><br>
    <div style="left:-300px;">
      <?php
      if (isset($_SESSION['username'])) {
        $user = $_SESSION['username'];
        echo "<p><b>User:</b> $user</p>";
      }
      ?>
    </div>
  </footer>

</body>

</html>
