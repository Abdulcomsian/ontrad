<?php
require_once("config/db.php");
require_once("php/header2.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Theme Page</title>
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
            font-size: 2.5vw;
        }

        .rfont {
            font-size: 1.75vw;
        }

        .whitelogo {
            width: 112px;
            height: auto;
        }

        .cardtitle {
            font-size: medium;
        }
    </style>

<body>
   
    <!--Data-->
    <!--end of data-->

       <div class="introbox pt-4 ontragreen ontradbg1">
       <div style="text-align: center;">
            <h3>Themes</h3>
            <br>
            <div class="row" style="text-align: center; padding-left: 5%; padding-right: 5%;">
                <div class="col-md-6"> <img src="homeimage/on_0001_dance.jpg" style="width: 80%;"></div>
                <div class="col-md-6">
                     <div class="textarea p-2" style="text-align: left">
                   <p class="card-text"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                </div>
            </div>
            </div>
        </div>
        <div class="introbox pt-4" style="text-align: center;">
                <form class="form" action="/action_page.php">
                    <input class="form mr-sm-2" style="width: 50%;" type="text" placeholder="Search with keywords">
                    <button class="btn ontradgreen" type="submit">Search</button>
                </form>
            </div>
        <hr>
       
        <!--SCROLLING FIELD OF SONGS A t0 Z-->
    <div class="ontragreen pb-5 ">
      <div style="text-align: center;">
          <h4><!-- reverse order of songs A to Z --> &uarr; &nbsp; &darr;</h4> 
      </div>
      <div class="album">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->

            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top tradgreen" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
            <div class="col"><!-- songcard -->
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">ONTRAD IMAGE</text></svg>
                <div class="card-body">
                  <h4> Title </h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Page</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!-- End of songcard -->
          </div>
        </div>
      </div>
      </div>
    </div><!--end of scrolling songlist -->
    <!--end of media-->
    <!-- FOOTER (Contact Section) -->
    <!-- Container (Contact Section) -->
    <div class="container-fluid ontradgreenlite ontradred py-3" style="width: 100%;">
        <h5 class="text-center">CONTACT US</h5>
        <div class="row">
            <div class="col" style="width: 100%; text-align: center;">
                <h5> mail@ontariotraditionalmusic.com</h5>
            </div>
        </div>
        <br>
        <!-- Button to Open the Modal -->
        <div style="text-align: center;">
            <button type="button" class="button1" data-toggle="modal" data-target="#dropline">
                Drop us a line
            </button>
        </div>
        <!-- The Modal -->
        <div class="modal" id="dropline">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="alert alert-light m-3" style="padding: 3% 10% 3% 10%">
                        <p style="text-align: center;">
                            <img src="images/ontradlogo160px.jpg" style="text-align: center;">
                            <hr>
                            We welcome your comments and suggestions
                        </p>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" style="width: 100%;" id="name" name="name"
                                    placeholder="Name" type="text" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email"
                                    required>
                            </div>
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Comment"
                            rows="5"></textarea><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button class="button1 pull-right" type="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <br><br>
        <div style="text-align: center;">
            <p><small>- CREATED BY BUSINESSLORE -</small>
            </p>
        </div>
        </div>
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