<?php
require_once("config/db.php");
if (isset($_FILES["uploadfile"])) {
    $target_dir = 'themeimage_uploads/';
    $file_name = basename($_FILES["uploadfile"]["name"]);
    $target_file = $target_dir . $file_name; 
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $target_file);
}

if(isset($_POST['feature']) && $_POST['feature'] === 'on'){
    $featureStatus = "Featured";
}else{
    $featureStatus = "UnFeatured";
}
if(isset($_POST['themetitle']) && !empty($_POST['themetitle']) ){
    $themetitle = $_POST['themetitle'];
    $themeinfo = $_POST['themeannotation'];
    $themeimage = $_POST['filename'];
    // $featureStatus = $_POST['feature'];



    $sql = "INSERT INTO `themes` (`theme_title`, `theme_info`, `theme_image`, `status`) VALUES ('$themetitle', '$themeinfo', '$themeimage', '$featureStatus')";
    $result = mysqli_query($conn, $sql);
    if($result){
                $themeID = mysqli_insert_id($conn);
                if(isset($_POST['transferIds'])){
                    $selectedSongs = $_POST['transferIds'];
                    $selectedSongs = explode("," ,$selectedSongs[0]);
                    foreach($selectedSongs as $songID){
                        $sql = "INSERT INTO `themes_songs` (`theme_id`, `song_id`) VALUES ('$themeID', '$songID')";
                        $result = mysqli_query($conn, $sql);
                    }
                }
                  
                }
            }

require_once("php/header.php");



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Theme Manager </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
    input.larger {
        transform: scale(1.75);
        margin-bottom: 5%;
    }

    .row-label {
        display: block;
        cursor: pointer;
        width: 100%;
    }
    </style>


</head>

<body id="thememanager">
    <div id="alert-message"></div>
    <!--start-->
    <div class="wrapper" style="padding: 0% 5% 0% 5%;">
        <form action="thememanager.php" method="post" enctype="multipart/form-data" id="uploadtheme">
            <div class="container-fluid pt-3" style="max-width: 90%;">
                <!--title and edit modal-->
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h4><input type="text" class="form-control " placeholder="Theme Title" id="themetitle"
                                name="title" required></h4>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6" style="text-align: right;">
                        <!--Theme is placed on the index page in the featured theme section-->
                        <input type="checkbox" class="btn-check" id="btncheck1" name="feature" autocomplete="off">
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
                                        <table class="table themeLoadTable">
                                            <thead>
                                                <?php
                                                    $sql = "SELECT * FROM `themes`";
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        while($row = mysqli_fetch_assoc($result)){
                                                            echo "

                                                            <tr>
                <td style='padding:0;'>
                    <label class='row-label' for='".$row['id']."' style='margin:5px;'>
                        <input type='radio' name='themeLoadRadio' class='theme_title_load' id='".$row['id']."'>
                        ".$row['theme_title']."
                    </label>
                </td>
            </tr>
                                                          
                                                            ";
                                                        }
                                                    }
                                                ?>
                                                </thead>
                                        </table>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" id="load-theme-btn" class="btn btn-danger btn-small">Load
                                            Theme</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-lg-6 col-md-5 col-sm-6" style="text-align: left;">
                        <textarea class="form-control" rows="5" name="annotation" id="themeannotation"
                            placeholder="Theme Info" required></textarea>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6">
                        <div class="container-fluid p-3"
                            style="border-style: solid; border-color: blue; border-width: 1px; text-align: center;">
                            <img id="themeImage" name="image" src="" alt="Theme Image"
                                style="max-width: 100%; max-height: 200px;">
                            <p type="hidden" id="imageName">Image Name: </p>
                        </div>
                        <br>

                        <div class="form-group upload-btn-wrapper" style="text-align: right;">
                            <input class="form-control" id="imageInput" type="file" name="uploadfile" value=""
                                onchange="displaySelectedImage()">
                            <button id="uploadButton" type="button" class="btn btn-primary btn-sm">Upload Image</button>
                        </div>
                        <div id="uploadStatus"></div>
                    </div>
                </div>
                <hr style="color: blue; width: 90%;">
                <script type="text/javascript">
                var imageName = "";

                function displaySelectedImage() {
                    var input = document.getElementById("imageInput");
                    var image = document.getElementById("themeImage");
                    var imageName = document.getElementById(
                        "imageName"); // Assuming you have an element to display the name

                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            image.src = e.target.result;
                            imageName.innerText = input.files[0].name; // Display the image name
                        };

                        reader.onerror = function(e) {
                            console.error("Error reading the file: " + e.target.error);
                        };

                        reader.readAsDataURL(input.files[0]);
                    }
                }
                </script>
                <hr>
                <div class="container-fluid px-5">
                    <form class="form-inline" method="GET" action="thememanager.php">
                        <div class="row">
                            <div class="col-sm-12 col-md-8 col-lg-9 p-2" style="text-align: right;">
                                <input class="form-control ml-sm-2" type="text" id="search_query" name="search_query"
                                    placeholder="Find a song to add to the theme list">
                            </div>
                            <!-- <div class="col-sm-12 col-md-4 col-lg-3 p-2" style="text-align: center;">
                                <button class="btn btn-success" type="button">Search</button>
                            </div> -->
                        </div>
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container-fluid" style="padding: 5%;">
                                <h5 style="text-align: center;">Results</h5>
                                <table class="table mainTable">
                                    <thead>
                                    </thead>
                                    <tbody id="search_results">
                                    </tbody>
                                </table>
                                <form action="thememanager.php" method="GET">
                                    <div style="text-align: center;">
                                        <button type="button" name="checkedSongs"
                                            class="btn btn-primary btn-sm transferRows" id="add_songs_btn">Add checked
                                            songs to theme</button>
                                    </div>
                                </form>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="container-fluid" style="padding: 5%; text-align:left;">
                                <div class="container-fluid" style="text-align: center;">
                                    <h5 class="label"> <label for="choosesong">Theme Songs</label></h5>
                                    <p>Each checked song will appear in the theme<br>
                                        unclick check box and upload to remove song</p>
                                    <table class="table secondTable" style="text-align: left;">
                                        <thead>
                                        </thead>
                                        <tbody id="songs_results">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div style="text-align: center;"><button id="theme-upload-btn" type="submit"
                                    class="btn btn-primary btn-sm" data-toggle="upload">
                                    Upload Theme
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <hr><br>
        </form>
    </div>
    <!--end of wrapper-->
    <script type="text/javascript">
    </script>


    <script>
    $(document).ready(function() {
        $('#search_query').on('keydown', function() {
            var searchQuery = $(this).val();
            if (searchQuery) {
                $.ajax({
                    method: 'GET',
                    url: 'songSearch.php',
                    data: {
                        search_query: searchQuery
                    },
                    success: function(data) {
                        $('#search_results').html(data);
                    },
                    error: function() {
                        $('#search_results').html(
                            '<tr><td colspan="2">An error occurred.</td></tr>');
                    }
                });
            } else {
                $('#search_results').html('');
            }
        });
    });
    var transferredIDs = [];

    $(function() {
        $(document).on("click", ".transferRows", function(e) {
            e.preventDefault();
            var selectedRows = $(".mainTable input.song_checkbox:checked").parents("tr");

            var clonedRows = selectedRows.clone();
            $(".secondTable").append(clonedRows);


            selectedRows.find("input.song_checkbox").map(function() {
                transferredIDs.push($(this).attr("id"));
            }).get();
            selectedRows.remove();
            // console.log(transferredIDs);


        });
    });

    $(document).on("click", "#theme-upload-btn", function(e) {
        // e.preventDefault();


        // imgname = imageName.textContent;
        let formdata = new FormData;
        // alert(transferredIDs);
        formdata.append("themetitle", $('#themetitle').val());
        formdata.append("themeannotation", $('#themeannotation').val());
        formdata.append("filename", document.getElementById("imageInput").files[0].name);
        formdata.append("transferIds[]", transferredIDs);


        let featureStatus = $('#btncheck1').prop('checked') ? 'on' : 'off';
        formdata.append("feature", featureStatus);

        // Append transferredIDs as an array
        // formdata.append("transferIds[]", transferredIDs);

        $.ajax({
            url: 'thememanager.php',
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: function(output) {
                alert("Record Inserted Successfully");
            },
        });

    });

    // Checkbox checking
    $(document).ready(function() {
        // Attach a click event handler to all labels with the 'row-label' class
        $("table").on("click", ".row-label", function() {
            // Find the associated checkbox within the label
            var checkbox = $(this).find("input[type='checkbox']");

            // Toggle the checkbox's checked state
            checkbox.prop("checked", !checkbox.prop("checked"));
        });
    });


    // modal load theme button AJAX Call
$(document).ready(function() {
    $(document).on("click", "#load-theme-btn", function(e){
        // e.preventdefault();
        var selectedTheme = $(".themeLoadTable input.theme_title_load:checked").parents("tr").attr("id");
        // alert("Selected theme: " + selectedTheme);
        window.location.replace("editTheme.php?id=136");
    });

});
    </script>

</body>

</html>