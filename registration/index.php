

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
        session_start();
        $row2 = $_SESSION['id'];
        require('connect.php');

        
        $id1 = 1;
        $result = mysqli_query($connection,"SELECT * FROM event_reg WHERE id = '$row2'");
        $row = mysqli_fetch_array($result);
        $id1 = $row['event'];
        $result1 = mysqli_query($connection,"SELECT * FROM events WHERE id = '$id1'");

        $row1 = mysqli_fetch_array($result1);
    ?>

    <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>ACM Registration Slip</title>
	  <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/datepicker3.css" rel="stylesheet">
	  <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="../index.php" class="navbar-brand scroll-to"><img src="acm_logo1.gif" width="200" height="80" alt="logo"></a>
      <!--<img src="acm_logo1.gif" height="80px" weidth="200">-->
</div>
<div class="col-md-6 text-right">
  <h3>Registration No : #00<?php echo $row['id']?></h3>
  <h3><small>Unpaid<br>
  <?php
                 echo "Date : " . $row['date'] . "<br>";
                 echo "time : " . $row['time'];      
                      ?></small></h3>
</div>
<hr>
<div class="row">
        <div class="col-md-5">
          <div class="login-panel panel panel-default">
                  <div class="panel-heading">
                    <h4>Event Details</h4>
                  </div>
                  <div class="panel-body">
                    <p>
                      <?php echo $row1['event']?> <br>
                      On <?php echo $row1['date']?> <br>
                      At <?php echo $row1['time']?> <br>
                      Venue : <?php echo $row1['venue']?><br>
                    </p>
                  </div>
                </div>
        </div>
        <div class="col-md-5 col-md-offset-2 text-right">
          <div class="login-panel panel panel-default">
                  <div class="panel-heading">
                    <h4><?php echo $row['name']?></h4>
                  </div>
                  <div class="panel-body">
                    <p>
                      Branch : <?php echo $row['branch']?> <br>
                      <?php echo $row['year']?><br>
                      Section : <?php echo $row['section']?><br>
                    </p>
                  </div>
                </div>
        </div>
      </div> <!-- / end client details section -->

        </div> <!-- /row -->
    </div> <!-- /container -->

    <script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  </body>
</html>
