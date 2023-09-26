<?php
require_once("config/db.php");
require_once("php/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Theme Manager </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">

        input.larger {
            transform: scale(1.75);
            margin-bottom: 5%;
        }
    </style>


</head>

<body id="thememanager">
    <!--start-->
    <div class="wrapper" style="padding: 0% 5% 0% 5%;">
        <form action="uploadtheme.php" method="post" enctype="multipart/form-data" id="uploadtheme">
            <div class="container-fluid pt-3" style="max-width: 90%;">
                <!--title and edit modal-->
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h4><input type="text" class="form-control " placeholder="Theme Title" name="themetitle"></h4>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6" style="text-align: right;">
                      <!--Theme is placed on the index page in the featured theme section-->
                      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck1">Featured</label>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6" style="text-align: left;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#themelist">
                            Edit Theme
                        </button>
                        <!-- The Edit Modal -->
                        <div class="modal fade" id="themelist">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Theme</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body" style="text-align: left;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 2%"><input type="checkbox" id="myCheck"></th>
                                                    <th>Theme</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th><input type="checkbox" id="myCheck"></th>
                                                    <th>Theme</th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" id="myCheck"></th>
                                                    <th>Theme</th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" id="myCheck"></th>
                                                    <th>Theme</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-small" data-dismiss="modal">Load Theme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-6 col-md-5 col-sm-6" style="text-align: left;">
                        <textarea class="form-control" rows="5" name="themeannotation" placeholder="theme info"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6">
                        <div class="container-fluid p-3" style="border-style: solid; border-color:blue; border-width: 1px; text-align:center;">
                            Theme Image
                        </div><br>
                        <div class="form-group upload-btn-wrapper" style="text-align: right;">
                            <input class="form-control" id="image_input" type="file" name="uploadfile" value="" />
                            <button class="btn btn-primary btn-sm">Choose Image</button>
                        </div>
                    </div>
                </div>
                <hr style="color: blue; width: 90%;">
                <script type="text/javascript">
                    const imageInput = document.getElementById('image_input');
                    const imagePreview = document.getElementById('image_preview');
                    imageInput.addEventListener('change', () => {
                        const file = imageInput.files[0];
                        const reader = new FileReader();

                        reader.addEventListener('load', () => {
                            imagePreview.src = reader.result;
                        });
                        if (file) {
                            reader.readAsDataURL(file);
                        }
                    });
                </script>
                <hr>
                <div class="container-fluid px-5">
                    <form class="form-inline" action="/action_page.php">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-9 p-2" style="text-align: right;">
                                <input class="form-control ml-sm-2" type="text" placeholder="Find a song to add to the theme list">
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-3 p-2" style="text-align: center;">
                                <button class="btn btn-success" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="container-fluid" style="padding: 5%;">
                        <h5 style="text-align: center;">Results</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 2%"><input type="checkbox" id="myCheck"></th>
                                <th>SONG NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><input type="checkbox" id="myCheck"></th>
                                <th>SONG NAME</th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="myCheck"></th>
                                <th>SONG NAME</th>
                            </tr>
                            <tr>
                                <th><input type="checkbox" id="myCheck"></th>
                                <th>SONG NAME</th>
                            </tr>
                        </tbody>
                    </table>
                    <div style="text-align: center;"> <button type="submit" class="btn btn-primary btn-sm" input type="submit" form="addsong" value="Submit">Add checked songs to theme</button>
                    </div>
                </div>
            </div>
                    <div class="col-lg-6">
                        <div class="container-fluid" style="padding: 5%; text-align:left;">
                        <div class="container-fluid" style="text-align: center;">
                            <h5 class="label"> <label for="choosesong">Theme Songs</label></h5>
                            <p>Each checked song will appear in the theme<br>
                                unclick check box and upload to remove song</p>
                        <table class="table" style="text-align: left;">
                            <thead>
                                <tr>
                                    <th style="width: 2%"><input type="checkbox" id="myCheck"></th>
                                    <th>SONG NAME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><input type="checkbox" id="myCheck"></th>
                                    <th>SONG NAME</th>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" id="myCheck"></th>
                                    <th>SONG NAME</th>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" id="myCheck"></th>
                                    <th>SONG NAME</th>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div style="text-align: center;"><button type="button" class="btn btn-primary btn-sm" data-toggle="upload" data-target="#uploadtheme">
                        Upload Theme
                        </button>
                        </div>
                    </div>
                </div>
            </div>       
        </form>
        <br><hr><br>
    </div><!--end of wrapper-->
    <script type="text/javascript">
    </script>

</body>

</html>