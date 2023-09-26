<?php
require_once("config/db.php");
require_once("php/header2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Song</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/ontrad.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .vertical-center {
      margin: 0;
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .tfont {
      font-size: 1.75vw;
    }

    .rfont {
      font-size: 1.25vw;
    }

    .whitelogo {
      width: 112px;
      height: auto;
    }

    .wrapper {
        padding: 0%;
    }
  </style>

<body>
  <!--Data-->
  <div class="wrapper p-3">
  <!--annos and image-->
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-sm-8" id="shortanno">
               
                    <h2 id="stitle">Lord Alexander's Reel</h1>
                    <h3 id="songcomposer">Abbie Andrews</h3>
        <!--circa and region-->
                <div class="row">
                    <div class="col-sm-12 col-lg-4" id="circa">
                        <h5>Circa -1950-1999</h5>
                    </div>
                    <div class="col-sm-12 col-lg-8" id="region">
                        <h5>Region-Southwest Region</h5>
                    </div>
                </div>
            <!--short annotation-->
            <div class="tfont">short annotation - Lorem ipsum dolor sit amet. Quo asperiores dolores qui perferendis itaque
            et sint alias et reprehenderit dolores et nihil rerum a nemo rerum. In molestiae cumque non amet molestiae non
            quidem quasi.
            </div>
            <!--long annotation-->
            <div class="rfont pt-3">Long annotation Here's a rockin' little number by Abbie Andrews and His Canadian Ranch
            Boys. Lord Alexander's Reel was his big "hit", recorded in the mid '50s. Abbie was from Niagara Falls and his
            band sometimes included a young accordion player named Walter Ostenek. (Sorry, that's not him in the band
            picture) The sheet music is an Abbie Andrews medley I put together for the Crooked Stovepipe Folk Orchestra.
            </div>
            </div>
        <!--right image-->
            <div class="col-sm-4" style=" text-align: center;"><img src="images/Abbie Andrews Ranch Boys.jpg" style="width: 100%; max-width: 250px;">
            </div>
        </div>
    </div>
  <!--Music-->
    <div class="row pt-3">
        <div class="col-sm-6" style="text-align: center;">
        <h4>Music</h4>
        <!--Audio-->
        <div style="margin-top: 0%; margin-bottom: 1%;">
            <div style="padding: 0% 3%">
            <p class="blurbtext">Audio1 - Hic mollitia necessitatibus et alias galisum non repellendus quia a consequatur
                excepturi ut fugit reprehenderit quo animi repudiandae.</p>
            <audio controls style="text-align: center;">
                <source src="audio/LordAlexandersReel.mp3" type="audio/mpeg" id="audio1">
                Your browser does not support the audio element.
            </audio>
            </div>
            <hr>
            <!--This audio and text will not show if empty-->
            <div style="padding: 0% 3%">
            <p class="blurbtext">Audio2 - This will not appear if there is no second audio</p>
            <audio controls style="text-align: center;">
                <source src="audio/LordAlexandersReel.mp3" type="audio/mpeg" id="audio1">
                Your browser does not support the audio element.
            </audio>
            </div>
        </div>
        <h4>Video</h4>
        <!--Video-->
        <div class="container-fluid">
            <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rlWQFQQHDdg?controls=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            </div>
            <div class="blurbtext">VIDEO -This example sdasdasd fdsd dfsd sdf fdsf
            use media queries to re-arrange the images on different screen sizes:
            </div>
        </div>
        </div>
        <!--sheetmusic-->
        <div class="col-sm-6" style="text-align: center" id="sheetmusic">
        <div class="gallery">
            <a target="_blank" href="images/ABBIE ANDREWS SET.jpg">
            <img src="images/ABBIE ANDREWS SET.jpg" alt="Mountains" width="600" height="400">
            </a>
        </div>
        <!--sheetanno-->
        <div class="blurbtext">the sheet music texts goes here</div>
        </div>
    </div>
  <!--end of music-->
  <!--theme row-->
  <hr>
    <div class="container-fluid">
        <h4 style="text-align: center;">Themes</h4>
        <div style="text-align: center;">
        <div class="row">
            <!--theme1-->
            <div class="col-sm-4 col-lg-4" style="text-align: center;" id="theme1">link to first theme</div>
            <!--theme1-->
            <div class="col-sm-4 col-lg-4" style="text-align: center;" id="theme1">link to second theme</div>
            <!--theme1-->
            <div class="col-sm-4 col-lg-4" style="text-align: center;" id="theme1">link to third theme</div>
        </div>
        <br>
        <hr>
        </div>
    </div>
        <div class="container-fluid ontradgreenlite ontradred py-3" style="width: 100%;">
            <h3 class="text-center">CONTACT US</h3>
        <div class="row">
        <div class="col" style="width: 100%; text-align: center;">
            <h5> Villa Nova, Ontario, Canada - mail@ontariotraditionalmusic.ca</h5>
        </div>
        </div>
        <div class="alert alert-light m-3" style="padding: 3% 10% 3% 10%">
        <p style="text-align: center;">We welcome your comments and suggestions</p>
        <div class="row">
            <div class="col-sm-6 form-group">
            <input class="form-control" style="width: 100%;" id="name" name="name" placeholder="Name" type="text"
                required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
            <button class="button1 pull-right" type="submit">Send</button>
            </div>
        </div>
        </div>
        <div style="text-align: center;">
        <p><small>- CREATED BY BUSINESSLORE -</small>
        </p>
        </div>
    </div>
        <!--addons
        <hr style="width: 90%; color: darkgreen;">
        <div class="container-fluid px-5">
            <h5 style="text-align: center;">Additional Material</h5>
            <div class="container-fluid">
            <div class="card-group">
                <div class="card" style="width:300px">
                <p class="card-title" style="text-align: center;"><b>Image title</b></p>
                <img class="card-img-top" src="images/bella.jpeg" alt="Card image">
                <div class="card-body">
                    <p class="card-text">anno text.</p>
                </div>
                </div>
                <div class="card" style="width:300px">
                <p class="card-title" style="text-align: center;"><b>Image title</b></p>
                <img class="card-img-top" src="images/iansnose.png" alt="Card image">
                <div class="card-body">
                    <p class="card-text">anno text.</p>
                </div>
                </div>
                <div class="card" style="width:300px">
                <p class="card-title" style="text-align: center;"><b>Image title</b></p>
                <img class="card-img-top" src="images/bella.jpeg" alt="Card image">
                <div class="card-body">
                    <p class="card-text">anno text.</p>
                </div>
                </div>
                <div class="card" style="width:300px">
                <p class="card-title" style="text-align: center;"><b>Image title</b></p>
                <img class="card-img-top" src="images/haaland.png" alt="Card image">
                <div class="card-body">
                    <p class="card-text">anno text.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
         -->
  <!-- Container (Contact Section) -->
 
  </div>
  <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  </script>
</body>

</html>