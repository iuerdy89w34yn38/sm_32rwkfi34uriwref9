
      
      <br><br>
      <center><h1>Our Services</h1></center>
      <br><br>

    </div>


    <div class="banner" >
      <div id="myCarousel" class="carousel slide mcar">
        <!-- Indicators 
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php

          $result =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
          $rowcount=mysqli_num_rows($result);
          $rows =mysqli_query($con,"SELECT * FROM slider  ORDER BY ordr" ) or die(mysqli_error($con));
          $n=0;

          while($row=mysqli_fetch_array($rows)){

            $name = $row['name']; 
            $img = $row['img']; 
            $ordr = $row['ordr']; 
            $desp = $row['desp']; 
            $url = $row['url']; 

            ?>
            <div class="item <?php if($n==0) echo "active"; ?>">
              <img onclick="location='<?php echo $url ?>'" src="images/slider/<?php echo $img ; ?>" alt="Los Angeles" style="width:100%; cursor: pointer;">
              <div class="carousel-caption">
                <h3 style="text-transform: uppercase;"><?php echo $name ?></h3>
                <p style="text-transform:capitalize;"><?php echo $desp ?></p>
              </div>

            </div>

            <?php $n++;
          } ?>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="    background: none;">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next" style="    background: none;">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <style type="text/css">
        .carousel-caption {
    padding-bottom: 0px;
}

      </style>

    </div> <!--banner ends-->


    <br><br>
