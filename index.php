<!DOCTYPE html>
<html lang="en">
<head>
	    <?php
        require('connect.php');
         if(isset($_POST['first_name'])){
          //contact_us
	
	        $first_name = $_POST['first_name'];
	        $last_name = $_POST['last_name'];
	        $email = $_POST['email'];
	        $message = $_POST['message']; 
          
	        $query = mysqli_query($connection,"INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `message`) VALUES ('$first_name','$last_name','$email','$message')");
	        if($query){
	            echo "Thank you";
	        }
	        else {
	          echo "Error";
	        }
      }
        if(isset($_POST['name'])){
            //Registration Slip
	
	        $name = $_POST['name'];
	        $branch = $_POST['branch'];
	        $year = $_POST['year'];
	        $mobile = $_POST['mobile'];
	        $email = $_POST['email'];
	        $section = $_POST['section'];
          $temp = $_POST['event'];
          if($temp== "Roadies"){
            $e_id=1;
          }
          else if($temp == "ACM Elections(Upcoming Evevnt)"){
            $e_id==2;
          }
          else{
            $e_id=3;
          }
          date_default_timezone_set("Asia/Kolkata");
          $time=date("h:i a");
          $date=date("d-m-y"); 
          
	        $query = mysqli_query($connection,"INSERT INTO event_reg (`name`, `section`, `branch`, `year`, `mobile`, `email`, `event`, `time`, `date`) VALUES ('$name','$section','$branch','$year','$mobile','$email','$e_id','$time','$date')");
          $query1 = mysqli_query($connection,"SELECT * FROM event_reg where name='$name'");
          $row2 = mysqli_fetch_array($query1);
	        if($query){
	            session_start();

              $_SESSION['id'] = $row2['id'];
              ?>
              
                <script type="text/javascript">window.location = "registration/index.php"</script>
	            <?php 
	        }
	        else {
	          echo "Error";
	        }
      }       
	
    ?>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACM-Mjcet</title>
    <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
     <!-- Bootstrap and Font Awesome css-->
    <!-- we use cdn but you can also include local files located in css directory-->
   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



      <!-- Google fonts - Roboto Condensed for headings, Open Sans for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,700%7COpen+Sans:300,400,700">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="font-awesome-anomation.,in.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/style.css" id="theme-stylesheet">

  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <!-- intro-->
    <section id="intro" class="intro image-background">
      <div class="overlay"></div>
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <p class="roboto">Welcome to MJCET's ACM Student Chapter</p>
              <h1>We are<br /><span class="bold">ACM</span></h1>
              <p class="roboto">Proceed to acm.mjcet.org</p>
            </div>
          </div>
        </div>
      </div><a href="#about" class="icon faa-float animated scroll-to"><i class="fa fa-angle-double-down"></i></a>
    </section>
    <!-- /.navbar-->
       <header class="header">
      <div class="sticky-wrapper">
        <div role="navigation" class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="#intro" class="navbar-brand scroll-to"><img src="img/acm_logo1.gif" width="138" height="48" alt="logo"></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About </a></li>
                <li><a href="#services">Events</a></li>
                <li><a href="#portfolio">Snapshots</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact" data-target="#contact">Contact</a></li>
                <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </header>
 
   
    
    <!-- about us-->
    <section id="about">
      <div class="container clearfix">
        <div class="row margin-bottom">
          <div class="col-md-12 margin-bottom"> 
            <h2 class="heading">Welcome to MJCET's ACM Student Chapter</h2>
            
            <p>The Association for Computing Machinery is a U.S.-based international learned society for computing. It was founded in 1947 and is the world's largest and most prestigious scientific and educational computing society. ACM is widely recognized as the premier membership organization for computing professionals, delivering resources that advance computing as a science and a profession; enable professional development; and promote policies and research that benefit society.  </p>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li>Lectures and Workshops</li>
                  <li>Student Presentations</li>
                  <li>Exciting Events</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li>Competitions</li>
                  <li>Seminars</li>
                  <li>And so much more!</li>
                </ul>
              </div>
            </div>
          </div>



        <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5><i class="fa fa-arrows"></i>Discover Your Potential</h5>
            <p>Are you passionate about technology? Do you want to make a difference? Are you looking for employment? Do you enjoy free food? If you answered yes to any of these questions, ACM@MJCET could be the right organization for you.</p>
          </div>

          <div class="col-md-6">
            <h5> <i class="fa fa-image"></i>Who are we?</h5>
            <p>ACM@MJCET is MJCET's student chapter of the Association for Computing Machinery, the leading premier organization for computing professionals. We are dedicated to promoting interdisciplinary computing and enabling professional development on campus.</p>
          </div>
        </div>



  </section>
  <section id="services" class="section-gray">
  <div class="col-md-12 margin-bottom"> 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                    <div class="post-date">
                        <span class="date">15</span>
                        <span class="month">Sept</span>
                    </div>
                    <div class="post-content">
                        <img src="img/roadies.jpg" alt="">
                        <h3 class="post-title">
                            <a href="#">Roadies</a>
                        </h3>
                        <p class="post-description">
                       Get the Roadies like experience of a three-on-one panel interview. The winner gets a prize money of 1000 Rupees/
                        </p>
                        <a href="#register" data-toggle="modal" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-hand-right"></span> Register now!</a>
                    </div>
                </div>

 
                <div class="post-slide">
                    <div class="post-date">
                        <span class="date">23</span>
                        <span class="month">Sep</span>
                    </div>
                    <div class="post-content">
                        <img src="img/election.jpg" alt="">
                        <h3 class="post-title">
                            <a href="#">ACM Elections.</a>
                        </h3>
                        <p class="post-description">
                         Come with your updated resumes to the ACM Elections!
                        </p>
                        <a href="#register" data-toggle="modal"  class="btn btn-xs btn-success"><span class="glyphicon glyphicon-hand-right"></span> Reserve your seat!</a>
                    </div>
                </div>

                   <div class="post-slide">
                    <div class="post-date">
                        <span class="date">27</span>
                        <span class="month">Sep</span>
                    </div>
                    <div class="post-content">
                        <img src="img/quiztech.jpg" alt="">
                        <h3 class="post-title">
                            <a href="#">Quiztech!</a>
                        </h3>
                        <p class="post-description">
                        Catch this exciting fun event coming soon, Winner gets a prize of 300 Rs!
                        </p>
                        <a href="#register" data-toggle="modal" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-hand-right"></span> Reserve your seat!</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<section/>


  <section id="portfolio" class="no-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">SNAPSHOTS</h2>
            <p class="text-center">Check out the latest from ACM!</p>
            </div>
        </div>
      </div>
          
     

<div class="container">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
        <li data-target="#carousel" data-slide-to="4"></li>
        <li data-target="#carousel" data-slide-to="5"></li>
        <li data-target="#carousel" data-slide-to="6"></li>
        <li data-target="#carousel" data-slide-to="7"></li>
        <li data-target="#carousel" data-slide-to="8"></li>
        <li data-target="#carousel" data-slide-to="9"></li>
        <li data-target="#carousel" data-slide-to="10"></li>
        <li data-target="#carousel" data-slide-to="11"></li>
           <li data-target="#carousel" data-slide-to="12"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner carousel-zoom">
        <div class="active item"><img class="img-responsive" src="assets/1.png" style="width: 100%";>
          <div class="carousel-caption">
            <p>Commencement Day of the Year 2017</p>
          </div>
        </div>

        <div class="item"><img class="img-responsive" src="assets/2.jpg" style="width: 100%";>
          <div class="carousel-caption">
		  <p>Achievements of Adsophos</p>
          </div>
        </div>

        <div class="item"><img class="img-responsive" src="assets/3.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/4.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/5.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/6.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/7.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

       <div class="item"><img class="img-responsive" src="assets/8.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/9.jpg" style="width: 100%";>
          <div class="carousel-caption">
		  <p>Speech by the Chairman and Vice Chairman on day of Recruitment Drive.<p>
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/10.jpg" style="width: 100%";>
          <div class="carousel-caption">
          </div>
      </div>

      <div class="item"><img class="img-responsive" src="assets/11.jpg" style="width: 100%";>
          <div class="carousel-caption">
            <p>All the members of the Student Chapters combined.</p>
          </div>
      </div>

        <div class="item"><img class="img-responsive" src="assets/12.jpg" style="width: 100%";>
          <div class="carousel-caption">
             <p>All the members of the Student Chapters combined.</p>
          </div>
      </div>

    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
</div>
</div>


  </section>

    
    <!-- events-->
      <section id="team">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">ACM EXECOM MEMBERS 2017-18</h2>
            <div class="row"></div>
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/chair.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Shaikh Khaussain</a></h3>
                <p class="role">Chair</p>
                <div class="social">
                  <a href="https://www.facebook.com/shaik.khaussain" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>The Chairman of ACM for the year 2017-18</p>
                </div>
              </div>
            </div>




            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/vicechair.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Mohammad Abdul Kamran</a></h3>
                <p class="role">Vice Chair</p>
                <div class="social">
                  <a href="https://www.facebook.com/me.kay96" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Our Vice Chair!</p>
                </div>
              </div>
            </div>
            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/girl.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Amtul Shafia</a></h3>
                <p class="role">Associate Sectretary</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
             
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  
                </div>
              </div>
            </div>
            <!-- team-member col end-->
            <!-- team-member-->
            <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Asgar Mirza</a></h3>
                <p class="role">Secretary</p>
                <div class="social">
                  <a href="https://www.facebook.com/asgar.mirza.5" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Documenting reports about the meetings held by ACM</p>
                </div>
              </div>
            </div>

                 <div class="col-md-3 col-sm-6">
                <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Mohammad Anas Ansari</a></h3>
                <p class="role">Treasurer</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Treasurer, for handling the base level finances of ACM</p>
                </div>
              </div>
            </div>

                 <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/mujju.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Syed Mujtaba</a></h3>
                <p class="role">Joint Treasurer</p>
                <div class="social">
                  <a href="https://www.facebook.com/syed.mujtaba.58" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>This guy is responsible for handling some serious finances!</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/man.png" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Khizir</a></h3>
                <p class="role">Marketing Head</p>
                <div class="social">
                  <a href="https://www.facebook.com/khizir.thtsme" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>The Marketing Head as well as the mastermind behind the back-end code for the website.</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/hussain.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Hussain Sadullah</a></h3>
                <p class="role">ACM Care Head</p>
                <div class="social">
                  <a href="https://www.facebook.com/profile.php?id=100002098139068&ref=br_rs" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                <p>Communication with ACM International</p> 
                </div>
              </div>
            </div>
			</div>
 

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/girl.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Fariya Banu</a></h3>
                <p class="role">Newsletter Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Our Newsletter Head, who is responsible for fetching us the latest news and updates!</p>
                </div>
              </div>
            </div>
            

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/abdul.jpg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Abdul Aziz</a></h3>
                <p class="role">Technical Team Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Abdul's job is to design things like posters for events , ID Card for the ACM Team Members, etc</p>
                </div>
              </div>
            </div>

              <div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/Vaishnavi.jpeg" alt="" class="img-responsive"></a></div>
                <h3><a href="#">Valpureddy Vaishnavi</a></h3>
                <p class="role">Publicity Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Her job is to publicize ACM's Events , Registrations , Activies and so on.</p>
                </div>
              </div>
            </div>

  			<div class="col-md-3 col-sm-6">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/girl.jpg" alt="bushra" class="img-responsive"></a></div>
                <h3><a href="#">Bushra Sehar</a></h3>
                <p class="role">Recruitment Head</p>
                <div class="social">
                  <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Our recruitment head, keep in touch with her for details regarding the recruitments!</p>
                </div>
              </div>
            </div>

              <div class="row justify-content-center">
              <div class="col-2">
              <div class="team-member">
                <div class="image"><a href="#"><img src="img/rayyan.jpeg" alt="rayyan" class="img-responsive"></a></div>
                <h3><a href="#">Rayyan Shaji</a></h3>
                <p class="role">Web Master</p>
                <div class="social">
                  <a href="https://www.facebook.com/rayyan.shaji" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                <div class="text">
                  <p>Front-end Web Developer for the website.</p>
                </div>
              </div>
            </div>
			</div>


            
            <!-- team-member col end-->
          </div>
        </div>
      </div>
    </section>   


 <!--contact us-->

  <section id="contact">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12">
            <h2 class="heading">Give us some Feedback!</h2>
            <div class="row">
              <div class="col-md-6">
                <form id="contact-form" method="POST" action="contact.php" class="contact-form form">
                  <div class="controls">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="first_name">Your firstname *</label>
                          <input type="text" name="first_name" id="first_name" placeholder="Enter your firstname" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="last_name">Your lastname *</label>
                          <input type="text" name="last_name" id="last_name" placeholder="Enter your  lastname" required="required" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Your email *</label>
                      <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="message">Your message for us *</label>
                      <textarea rows="4" name="message" id="message" placeholder="Enter your message" required="required" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Send message" class="btn btn-primary btn-block">
                    </div>
                  </div>
                </form>

                <p>Let us hear from you! </p>
               
                <p class="social"><a href="https://www.facebook.com/blitzkrieg2010/?hc_ref=ARQh2jy-N4M5OzYfhREyMu5dKL87s9qTYx3LXKhTLIutYz78xZPWR4lv8lfY2S6QPBU&fref=nf" title="" class="facebook"><i class="fa fa-facebook"></i></a></i></a><a href="#" title="" class="email"><i class="fa fa-envelope"></i></a></p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row copyright">
          <div class="col-md-6">
            <p class="roboto">&copy;ACM@MJCET</p>
          </div>
          <div class="col-md-6">
            <p class="credit roboto"><a href="https://bootstrapious.com/tutorials">mjcet.acm.org</a></p>
            <!-- Please do not remove the backlink to us unless you support the development at https://bootstrapious.com/donate. It is part of the license conditions. Thanks for understanding :) -->
          </div>
        </div>
      </div>
      </div>
    </footer>  

     <!-- /.modal-->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Event Registration</h4>
            </div>
           <div class="modal-body">
           <div class="row main">
           <div class="panel-heading">
                 <div class="panel-title text-center">
                    <h4 class="title">Enter your details</h4>
                    <hr/>
                  </div>
                  </div>
              

        <div class="main-login main-center">
        <form class="form-horizontal" role="form" method="POST" action="index.php">
            
            <div class="form-group">
            <label  class="col-sm-2 control-label" for="name">Name *</label>
             <div class="col-sm-9">
                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Your Full Name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="email">Email *</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email" required="required"  placeholder="Your Email"/>
                </div>
              </div>
           </div>

            <div class="form-group">
              <label  class="col-sm-2 control-label" for="mobile">Mobile *</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-mobile aria-hidden"></i></span>
                  <input type="text" class="form-control" name="mobile" id="mobile" required="required" placeholder="Your Mobile"/>
                </div>
              </div>
          </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="branch">Branch *</label>
              <div class="col-sm-9">
    
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-book" aria-hidden="true"></i></span>
                  <select class="form-control" name="branch" id="branch" required="required" placeholder="-SELECT-">
                                    <option>-SELECT-</option>
                                    <option>IT</option>
                                    <option>CSE</option>
                                    <option>EEE</option>
                                    <option>ECE</option>
                    <option>MECH</option>
                    <option>CIVIL</option>
                    <option>IE</option>
                    <option>PROD</option>
                                    </select>
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <label class="col-sm-2 control-label" for="country">Section *</label>
            <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-minus" aria-hidden="true"></i></span>
                  <select class="form-control" name="section" id="section" required="required"  placeholder="-SELECT-">
                                    <option>-SELECT-</option>
                                    <option>A</option>
                                    <option>B</option>
                         </select>
                </div>
              </div>
               </div> 





            <div class="form-group">
              <label class="col-sm-2 control-label" for="country">Year *</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></span>
                  <select class="form-control" name="year" id="year" required="required"  placeholder="-SELECT-">
                                    <option>-SELECT-</option>
                                    <option>1st Year</option>
                                    <option>2nd Year</option>
                                    <option>3rd Year</option>
                                    <option>4th Year</option>
                                    </select>
                </div>
              </div>
          </div>
          
           
            <div class="form-group">
            <label class="col-sm-2 control-label" for="country">Event *</label>
            <div class="col-sm-9">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pawn" aria-hidden="true"></i></span>
                  <select class="form-control" name="event" id="event" required="required"  placeholder="-SELECT-">
                                    <option>-SELECT-</option>
                                  	<option>Roadies</option>
                                    <option>ACM Elections(Upcoming Evevnt)</option>
                                    <option>Quiztech(Upcoming Event)</option>
                         </select>
                </div>
              </div>
               </div>       
           
              <button type="submit" class="btn btn-primary btn-lg btn-block login-button" >Submit</button>
             </form>

              <center><p>* Feilds are Mandatory to Fill </p></center>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               
                </button>
            </div>
        </div>
    </div>



<!--scripts-->
	  <script> </script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="js/jquery.cookie.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/news.js"></script>
        <script src="js/carousel.js"></script>
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
      </body>
</html>
