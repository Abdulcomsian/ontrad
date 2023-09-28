<?php
require_once("config/db.php");
    if(isset($_GET['search_query'])){
        $search = $_GET['search_query'];
        $sql = "SELECT * FROM `newtable` WHERE `Stitle` LIKE '%".$search."%'";
        $result = mysqli_query($conn, $sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                <td style='padding:0;'>
                    <label class='row-label' for='".$row['ID']."' style='margin:5px;'>
                        <input type='checkbox' class='song_checkbox' id='".$row['ID']."'>
                        ".$row['Stitle']."
                    </label>
                </td>
            </tr>
            ";
            }
        }else{
            echo "No Result found";
        }
    }else{
        echo " ";
    }
?>