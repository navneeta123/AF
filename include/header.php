
<?php
include('conn.php')
?>

<header >
     <ul >
            <?php 
                  $sql = "SELECT webmenuitem FROM websitemenu";
                  $result = $conn->query($sql);
                  while($record = $result->fetch_assoc())
                  {
                        echo " <li><a href=".$record['webmenuitem'].">".$record['webmenuitem']."</a></li>";
                  }
            ?>
      </ul>
      <div class="container">
            <div class="row">
                  <div class="col">
                        <img class="logo" src="../images/logo.jpg" height="150" width="150"/>
                        <h1 class="title">Company Name</h1>
                  </div>
            </div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                

            <!-- The slideshow -->
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <img src="../images/img1.jpg" alt="Los Angeles" width="1200" height="500">
                  </div>
                  <div class="carousel-item">
                        <img src="../images/img2.jpg" alt="Chicago" width="1200" height="500">
                  </div>
                  <div class="carousel-item">
                        <img src="../images/img3.jpg" alt="New York" width="1200" height="500">
                  </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
            </div> 
      </div>
</header>