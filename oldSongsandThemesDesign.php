   <!-- Old Design Songs All are commented - uncomment to use it -->
                <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                            $limit = 9;
                            if(isset($_GET['page'])){
                              $page = $_GET['page'];
                            }else{
                              $page = 1;
                            }
                            $offset = ($page-1)*$limit;

                            if (isset($_GET['search_query'])) {
                              $search_query = $_GET['search_query'];
                              $circa = $_GET['circa']; 
                              $region = $_GET['region']; 
                              $types = isset($_GET['type']) ? $_GET['type'] : array();
                                // this condition will return to index.php if the below condition is true
                                if (empty($_GET['search_query']) && empty($_GET['circa']) && empty($_GET['region']) && empty($_GET['type'])) {
                                        echo '<script>window.location.href = "index.php";</script>';
                                        exit;
                                }

                              $sql = "SELECT * FROM `newtable` WHERE `Stitle` LIKE '%" . $search_query . "%'";

                              if (!empty($circa)) {
                                  $sql .= " AND `circa` = '" . $circa . "'";
                              }

                              if (!empty($region)) {
                                  $sql .= " AND `region` = '" . $region . "'";
                              }

                              if (!empty($types)) {
                                $typeConditions = array();
                                foreach ($types as $type) {
                                  $typeConditions[] = "(`theme1` = '$type' OR `theme2` = '$type' OR `theme3` = '$type')";
                              }
                              $sql .= " AND (" . implode(" OR ", $typeConditions) . ")";
                              }

                              $sql .= " LIMIT {$offset}, {$limit}";
                              
                              $result = mysqli_query($conn, $sql);


                              if(mysqli_num_rows($result)>0){
                                while ($row = mysqli_fetch_assoc($result)) {
                                  echo "
                                      <div class='col'>
                                          <div class='card shadow-sm' style='height: 620px !important;'>
                                              <div class='d-flex flex-column justify-content-between' style='height: 100%;'>";
                                $path = 'images/';
                                $completePath = $path.$row['imageThumb'];
                                  echo ($row['imageThumb'] != NULL || !empty($row['imageThumb'])) && file_exists($completePath)
                                      ? "<img src='images/" . $row['imageThumb'] . "' style='max-height: 200px;' alt='Image Not found'>"
                                      : "<svg class='bd-placeholder-img card-img-top' width='100%' height='200px'
                                          xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail'
                                          preserveAspectRatio='xMidYMid slice' focusable='false'>
                                          <title>Placeholder</title>
                                          <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%'
                                              fill='#eceeef' dy='.3em'>ONTRAD IMAGE</text>
                                      </svg>";
                              
                                      echo "
                                      <div class='card-body'>
                                          <h4>" . $row['Stitle'] . "</h4>
                                          <small class='text-body-secondary'><strong>" . $row['circa'] . "</strong></small><small class='text-body-secondary'> " . $row['region'] . "</small>
                                          <p class='card-text'>" . substr($row['shortanno'], 0, 50) . "...</p>
                                      </div>
                                      <div class='card-footer' style='background-color: white;'>
                                      <div class='btn-group'>
                                          <a href='song1.php?id=".base64_encode($row['ID'])."' class='btn btn-sm btn-outline-secondary'>View Page</a>
                                        ";
                                            if($row['audio1']!=NULL && !empty($row['audio1'])){                                        
                                                echo "<button type='button' data-song-name='".$row['audio1']."' id='playSong' onclick='playAudio(event)' class='btn btn-sm btn-outline-secondary'>Play Song</button>";
                                            }elseif($row['audio2']!=NULL && !empty($row['audio2'])){
                                                echo "<button type='button' data-song-name='".$row['audio2']."' id='playSong' onclick='playAudio(event)' class='btn btn-sm btn-outline-secondary'>Play Song</button>";
                                            }else{
                                                echo " ";
                                            }
                              echo "
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          ";
                              }         
                            }else{
                                echo "No songs Found";
                            }
                            }else {
                              $sql = "SELECT * FROM `newtable` ORDER BY `Stitle` ASC LIMIT {$offset}, {$limit}";
                              $result = mysqli_query($conn, $sql);

                            if(mysqli_num_rows($result)>0){

                            
                              while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                    <div class='col'>
                                        <div class='card shadow-sm' style='height: 600px !important;'>
                                            <div class='d-flex flex-column justify-content-between' style='height: 100%;'>";
                                 $path = 'images/';
                                 $completePath = $path.$row['imageThumb'];
                                echo ($row['imageThumb'] != NULL || !empty($row['imageThumb'])) && file_exists($completePath)
                                    ? "<img src='images/" . $row['imageThumb'] . "' style='max-height: 200px;' alt='Image Not found'>"
                                    : "<svg class='bd-placeholder-img card-img-top' width='100%' height='200px'
                                        xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail'
                                        preserveAspectRatio='xMidYMid slice' focusable='false'>
                                        <title>Placeholder</title>
                                        <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%'
                                            fill='#eceeef' dy='.3em'>ONTRAD IMAGE</text>
                                    </svg>";
                            
                                echo "
                                            <div class='card-body'>
                                                <h4>" . $row['Stitle'] . "</h4>
                                                <small class='text-body-secondary'><strong>" . $row['circa'] . "</strong></small><small class='text-body-secondary'> " . $row['region'] . "</small>
                                                <p class='card-text'>" . substr($row['shortanno'], 0, 50) . "...</p>
                                            </div>
                                            <div class='card-footer' style='background-color: white;'>
                                            <div class='btn-group'>
                                                <a href='song1.php?id=".base64_encode($row['ID'])."' class='btn btn-sm btn-outline-secondary'>View Page</a>
                                    ";
                                        if($row['audio1']!=NULL && !empty($row['audio1'])){                                        
                                            echo "<button type='button' data-song-name='".$row['audio1']."' id='playSong' onclick='playAudio(event)' class='btn btn-sm btn-outline-secondary'>Play Song</button>";
                                        }elseif($row['audio2']!=NULL && !empty($row['audio2'])){
                                            echo "<button type='button' data-song-name='".$row['audio2']."' id='playSong' onclick='playAudio(event)' class='btn btn-sm btn-outline-secondary'>Play Song</button>";
                                        }else{
                                            echo " ";
                                        }

                                    echo "
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                            }
                        }else{
                            echo "No Songs Found";
                        }

                        }
                    ?>
                </div> -->
                <!-- <?php
                    // pagination while searching (Filtering through Songs)
                    if(isset($_GET['search_query'])){
                        $search_query = $_GET['search_query'];
                        $circa = $_GET['circa']; 
                        $region = $_GET['region']; 
                        $types = isset($_GET['type']) ? $_GET['type'] : array();
                        $sql1 = "SELECT * FROM `newtable` WHERE `Stitle` LIKE '%" . $search_query . "%'";                            ;

                        if (!empty($circa)) {
                            $sql1 .= " AND `circa` = '" . $circa . "'";
                        }

                        if (!empty($region)) {
                            $sql1 .= " AND `region` = '" . $region . "'";
                        }

                        if (!empty($types)) {
                        $typeConditions = array();
                        foreach ($types as $type) {
                            $typeConditions[] = "(`theme1` = '$type' OR `theme2` = '$type' OR `theme3` = '$type')";
                        }
                        $sql1 .= " AND (" . implode(" OR ", $typeConditions) . ")";
                        }

                        $sql1 .= " ORDER BY `Stitle` ASC";

                        $result1 = mysqli_query($conn, $sql1);
                        
                        if(mysqli_num_rows($result1)>9){
                        $totalRecords = mysqli_num_rows($result1);
                        $totalPages = ceil($totalRecords / $limit);
                        $pageLimit = 4;
                        echo "<ul class='pagination mt-3'>";
                        if($page>1){
                            if(!empty($types)){
                                if($page>=$pageLimit){
                                    echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&type[]=".$type."&page=1&status=songs'>First</a></li>";
                                }
                                echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&type[]=".$type."&page=".($page-1)."&status=songs'><i class='fa-solid fa-chevron-left'></i></a></li>";
                                if($page>=$pageLimit){
                                    echo "<li class='listStyle'>...</li>";
                                }
                            }else{
                                if($page>=$pageLimit){
                                    echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&page=1&status=songs'>First</a></li>";
                                }
                                echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&page=".($page-1)."&status=songs'><i class='fa-solid fa-chevron-left'></i></a></li>";
                                if($page>=$pageLimit){
                                    echo "<li class='listStyle'>...</li>";
                                }
                            }
                        }

                        $startPage = max(1, $page - 2);
                        $endPage = min($totalPages, $startPage + $pageLimit - 1);

                        for($i=$startPage; $i<=$endPage; $i++){
                            if($i==$page){
                            $active = "active";
                            }else{
                            $active = " ";
                            }
                            
                            if(!empty($types)){
                                echo "<li class='".$active."'><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&type[]=".$type."&page=".$i."&status=songs'>".$i."</a></li>";
                            }else{
                                echo "<li class='".$active."'><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&page=".$i."&status=songs'>".$i."</a></li>";
                            }
                        }

                        if(($page+1)<$totalPages){
                            if(!empty($types)){
                                if($totalPages>4){
                                    echo "<li class='listStyle'>...</li>";
                                }
                                echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&type[]=".$type."&page=".($page+1)."&status=songs'><i class='fa-solid fa-chevron-right'></i></a></li>";
                                if($totalPages>4){
                                    echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&type[]=".$type."&page=".$totalPages."&status=songs'>Last</a></li>";
                                }
                            }else{
                                if($totalPages>4){
                                    echo "<li class='listStyle'>...</li>";
                                }
                                echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&page=".($page+1)."&status=songs'><i class='fa-solid fa-chevron-right'></i></a></li>";
                                if($totalPages>4){
                                    echo "<li><a class='page-link' href='index.php?search_query=".$search_query."&circa=".$circa."&region=".$region."&page=".$totalPages."&status=songs'>Last</a></li>";
                                }
                            }
                        }
                        echo "</ul>";
                        }
                    }else{
                        $sql1 = "SELECT * FROM `newtable`";
                        $result1 = mysqli_query($conn, $sql1);
                        
                        if(mysqli_num_rows($result1)>0){
                        $totalRecords = mysqli_num_rows($result1);
                        $totalPages = ceil($totalRecords / $limit);
                        $pageLimit = 4;
                        echo "<ul class='pagination mt-3'>";
                        if($page>1){
                            if($page>=$pageLimit){
                            echo "<li><a class='page-link' href='index.php?page=1&status=songs'>First</a></li>";
                            }
                            echo "<li><a class='page-link' href='index.php?page=".($page-1)."&status=songs'><i class='fa-solid fa-chevron-left'></i></a></li>";
                            if($page>=$pageLimit){
                                echo "<li class='listStyle'>...</li>";
                            }
                        }

                        $startPage = max(1, $page - 2);
                        $endPage = min($totalPages, $startPage + $pageLimit - 1);
                        for($i=$startPage; $i<=$endPage; $i++){
                            if($i==$page){
                            $active = "active";
                            }else{
                            $active = " ";
                            }

                        echo  "<li class='".$active."'><a class='page-link' href='index.php?page=".$i."&status=songs'>".$i."</a></li>";
                        }
                        if(($page+1)<$totalPages){
                            if($totalPages>4){
                                echo "<li class='listStyle'>...</li>";
                            }
                            echo "<li><a class='page-link' href='index.php?page=".($page+1)."&status=songs'><i class='fa-solid fa-chevron-right'></i></a></li>";
                            if($totalPages>4){
                                echo "<li><a class='page-link' href='index.php?page=".$totalPages."&status=songs'>Last</a></li>";
                            }
                        }
                        echo "</ul>";
                        }
                    }
                ?> -->





<!-- start of theme  -->


 <!-- old theme design - its commented Please uncomment to use this design  -->
                <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> -->

                <?php
                    $limit = 9;
                    if(isset($_GET['themePage'])){
                      $page = $_GET['themePage'];
                    }else{
                      $page = 1;
                    }
                    $offset = ($page-1)*$limit;
                    

                        $sql = "SELECT * FROM `themes` WHERE `status` = 'Featured' LIMIT {$offset}, {$limit}";
                        $result = mysqli_query($conn, $sql);
                        
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                echo "
                                <div class='col'>
                                        <!-- songcard -->
                                        <div class='card shadow-sm' style='height: 500px !important;'>
                                   ";    
                                   $path = 'themeimage_uploads/';
                                   $completePath = $path.$row['theme_image'];
                                echo ($row['theme_image']!=NULL || !empty($row['theme_image'])) && file_exists($completePath) ?
                                "<img src='themeimage_uploads/" . $row['theme_image'] . "' style='max-height: 200px;' alt='Image Not found'>": "
                                <svg class='bd-placeholder-img card-img-top' width='100%' height='200'
                                                xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail'
                                                preserveAspectRatio='xMidYMid slice' focusable='false'>
                                                <title>Placeholder</title>
                                                <rect width='100%' height='100%' fill='#55595c' /><text x='50%' y='50%' fill='#eceeef'
                                                    dy='.3em'>ONTRAD IMAGE</text>
                                            </svg>";
                                echo "            
                                            <div class='card-body'>
                                                <h4> ".$row['theme_title']."</h4>
                                                <p class='card-text'>".substr($row['theme_info'], 0, 50)."...</p>
                                            </div>
                                            <div class='card-footer' style='background-color: white;'>
                                                <a href='theme1.php?id=" . base64_encode($row['id']) . "' class='btn btn-sm btn-outline-secondary'>View Page</a>
                                            </div>
                                        </div>
                                    </div><!-- End of songcard -->
                                ";
                            }
                        }
                    ?>
                </div>
             <?php
                // Pagination on themes Section
                    $sql1 = "SELECT * FROM `themes` WHERE `status` = 'Featured'";
                    $result1 = mysqli_query($conn, $sql1);

                    if(mysqli_num_rows($result1)>0){
                    $totalRecords = mysqli_num_rows($result1);
                    $totalPages = ceil($totalRecords / $limit);
                    $pageLimit = 4;
                    echo "<ul class='pagination mt-3'>";
                    if($page>1){
                        if($page>=$pageLimit){
                        echo  "<li><a class='page-link' href='index.php?themePage=1&status=themes'>First</a></li>";
                        }
                        echo  "<li><a class='page-link' href='index.php?themePage=".($page-1)."&status=themes'><i class='fa-solid fa-chevron-left'></i></a></li>";
                        if($page>=$pageLimit){
                            echo "<li class='listStyle'>...</li>";
                        }
                    }

                    $startPage = max(1, $page - 2);
                    $endPage = min($totalPages, $startPage + $pageLimit - 1);
                    for($i = $startPage; $i <= $endPage; $i++){
                        if($i==$page){
                        $active = "active";
                        }else{
                        $active = " ";
                        }

                    echo  "<li class='".$active."'><a class='page-link' href='index.php?themePage=".$i."&status=themes'>".$i."</a></li>";
                        
                    }
                    if(($page+1)<$totalPages){
                        if($totalPages>4){
                            echo "<li class='listStyle'>...</li>";
                        }
                        echo  "<li><a class='page-link' href='index.php?themePage=".($page+1)."&status=themes'><i class='fa-solid fa-chevron-right'></i></a></li>";
                        if($totalPages>4){
                            echo  "<li><a class='page-link' href='index.php?themePage=".$totalPages."&status=themes'>Last</a></li>";
                        }
                    }
                    echo "</ul>";
                    }

                ?>
            </div> 