<?php
require_once ("config/db.php");
require_once ("php/header.php");
  ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Edit Song </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
</style>
<body>
<div class="container-fluid py-3 px-5">
    <form class="form-inline" action="editsong.php" method="POST">
        <div class="row pt-0">
            <div class="col-sm-12 col-md-10 col-lg-9 " style="text-align: right;">
                <input class="form-control ml-sm-2" name="search_query" type="text" placeholder="Find a song to edit">
            </div>
            <div class="col-sm-12 col-md-2 col-lg-3 " style="text-align: center;">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>
<?php

if(isset($_POST['search_query'])){
    $searchQuery = $_POST['search_query'];
    $sql = "SELECT Stitle, ID FROM newtable WHERE Stitle LIKE '%" . $searchQuery . "%'";


    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
        <div class='container-fluid px-5'><table class='table table-borderless'><tr>
        <th>Title</th>
        <th>Edit</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>". $row["Stitle"] ."</td>"."
                <td><a href=edit.php?id=". $row["ID"] ." class='btn btn-primary btn-sm'>Edit</a></td></tr>";
          }
              echo "</table>";
          } else {
              echo "No data available";
          }
}else{
    $sql = "SELECT Stitle,ID FROM newtable";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "
        <div class='container-fluid px-5'><table class='table table-borderless'><tr>
        <th>Title</th>
        <th>Edit</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr><td>". $row["Stitle"] ."</td>"."
                <td><a href=edit.php?id=". $row["ID"] ." class='btn btn-primary btn-sm'>Edit</a></td></tr>";
          }
              echo "</table>";
          } else {
              echo "No data available";
          }
}


?>

</body>
</html>
