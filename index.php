<?php
function query_Executor($query){
	include "includes/creds.php";
	try{
		$pdoConfigString = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

		$conn = new PDO($pdoConfigString, $db_username, $db_password);

		$stmt = $conn -> prepare($query);
		$stmt -> execute();

		return $stmt -> fetchAll(PDO::FETCH_ASSOC);

	}
	catch (PDOException $e){
		echo "Exception" . $e;
	}
}
// $data = query_Executor('SELECT Name FROM weddingDB.Wishes WHERE idWishes="0"')

function getWish(){
	return query_Executor("SELECT Name,Wishes FROM weddingDB.Wishes LIMIT 5");

	// echo "<script>console.log('". $data[1] ."');</script>";
}

$wish = getWish();
$wish1 = $wish[0];
$wish2 = $wish[1];
$wish3 = $wish[2];
$wish4 = $wish[3];
$wish5 = $wish[4];
// $wish6 = $wish[5];

// echo "<script>console.log(". json_encode($wish) .")</script>";

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-K9KTB28');
		</script>
		<!-- End Google Tag Manager -->
		<!-- <script>
  			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  			ga('create', 'UA-96553664-1', 'auto');
  			ga('send', 'pageview');

		</script> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sashi &amp; Elsie</title>
	<meta name="robots" content="noindex" />
	<meta name="robots" content="nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="shortcut icon" href="bride-and-groom.ico" />
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


<style type="text/css">
       .fh5co-nav {
                        position:fixed;
                        top:0;
                        width:100%;
                        z-index:2000;
	        background: rgba(0, 0, 0, 0.1);
                        }
      .offcanvas #page
	      {
	       position: relative !important;
	     }
      #fh5co-offcanvas
                   {
	    position: fixed !important;
	  }
</style>

	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9KTB28"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="fh5co-logo"><a href="index.php">It's our Wedding<strong>.</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li id="event_button"><a href="#fh5co-event">Events</a></li>
						<li id="story_button"><a href="#fh5co-couple-story">Timeline</a></li>
						<li id="gallery_button"><a href="#fh5co-gallery">Gallery</a></li>
						<li id="testimonial_button"><a href="#fh5co-testimonial">Wishes</a></li>
						<li id="rsvp_button"><a href="#fh5co-started">RSVP</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Sashi &amp; Elsie</h1>
							<h2>We Are Getting Married in</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<p><a href="#" class="btn btn-default btn-sm">Save the date</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Hello!</h2>
					<h3>May 24th, 2017 Bangalore, India</h3>
					<p>Join us to celebrate our wedding</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/groom.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Sashiraj Chandrasekaran</h3>
						<p>Data Analyst, History Buff, Military fan, Future Winner of Best Husband award</p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/bride.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Elsie Cheruba</h3>
						<p>Biologist, Pet lover, Science whiz,         Future Winner of Best Wife award</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our Special Events</span>
					<h2>Wedding Events</h2>
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Wedding Service</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>3:30 PM</span>
										<span>4:30 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Wednesday 24</span>
										<span>May, 2017</span>
									</div>
									<p>Join us to witness the exchange of our marriage vows at
										<br> <br> Holy Trinity Church <br> Trinity Circle <br>
										Ulsoor <br> Bangalore - 560008</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">
									<h3>Reception</h3>
									<div class="event-col">
										<i class="icon-clock"></i>
										<span>6:30 PM</span>
										<span>10:00 PM</span>
									</div>
									<div class="event-col">
										<i class="icon-calendar"></i>
										<span>Wednesday 24</span>
										<span>May, 2017</span>
									</div>
									<p>Celebrate with us over dinner as we begin our life together at
										<br> <br> DRDO Community Hall <br> DRDO Township Phase 1<br>
										CV Raman Nagar <br> Bangalore - 560093</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Two hearts to be joined as one</span>
					<h2>Our lives thus far</h2>
					<p>Through the mountains and valleys of life, we have laboured alone thus far. <br>
						Looking forward to journeying together and explore new lands.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/baby2.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sashi Logged in</h3>
									<span class="date">August 29, 1991</span>
								</div>
								<div class="timeline-body">
									<p>Germany reunited, Soviet Union broke up and Sashi was born in thoonganagaram (Madurai city).</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/baby1.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Elsie Emerged</h3>
									<span class="date">April 7, 1992</span>
								</div>
								<div class="timeline-body">
									<p>Scientists achieve breakthrough in embryo testing and Elsie was born in the vibrant capital city of Chennai.</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/singapore-1.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Elsie translocated to Singapore</h3>
									<span class="date">December 27, 2006</span>
								</div>
								<div class="timeline-body">
									<p>Little did she know this foreign land would someday become her home.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/singapore-22.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sashi cut/pasted to Singapore</h3>
									<span class="date">October 5, 2014</span>
								</div>
								<div class="timeline-body">
									<p>Like every other immigrant to Singapore through the last 2 centuries,
										with starstruck eyes and lofty dreams.</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/grad-12.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Elsie Graduates from University </h3>
									<span class="date">July 10, 2015</span>
								</div>
								<div class="timeline-body">
									<p>Finally ready to join the workforce and do adult things like worrying about groceries.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/grad-22.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sashi Graduates from University</h3>
									<span class="date">April 2, 2016</span>
								</div>
								<div class="timeline-body">
									<p>Ready to move into production environment and do adult things like worrying about paying bills.</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/engagement.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sashi and Elsie get engaged </h3>
									<span class="date">April 16, 2017</span>
								</div>
								<div class="timeline-body">
									<p>I promise that I will marry you in 1 month</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/comingsoon.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Sashi and Elsie get married</h3>
									<span class="date">May 24, 2017</span>
								</div>
								<div class="timeline-body">
									<p>No more walking through the journey of life alone.</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>

	 <div id="fh5co-gallery" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Our People</span>
					<h2>Wedding Gallery</h2>
					<p>Glimpses into our life</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    						<li data-target="#myCarousel" data-slide-to="1"></li>
    						<li data-target="#myCarousel" data-slide-to="2"></li>
    						<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
							<li data-target="#myCarousel" data-slide-to="6"></li>
  						</ol>

  						<!-- Wrapper for slides -->
  						<div class="carousel-inner" role="listbox">
    						<div class="item active">
      							<img src="/images/Gallery/Gallery-01.jpg" alt="Elsie's Graduation">
    						</div>

    						<div class="item">
      							<img src="/images/Gallery/Gallery-02.jpg" alt="Sashi's Graduation">
							</div>

							<div class="item">
      							<img src="/images/Gallery/Gallery-03.jpg" alt="Sashi-Elsie Engagement">
							</div>

    						<!-- <div class="item">
      							<img src="/images/Gallery/Gallery-04.jpg" alt="Elsie">
    						</div> -->

							<div class="item">
      							<img src="/images/Gallery/Gallery-05.jpg" alt="Elsie">
      						</div>

							<!-- <div class="item">
      							<img src="/images/Gallery/Gallery-06.jpg" alt="Sashi">
    						</div> -->

							<div class="item">
								<img src="/images/Gallery/Gallery-07.jpg" alt="Couple with Sashi's family">
							</div>

							<div class="item">
								<img src="/images/Gallery/Gallery-08.jpg" alt="Couple with Elsie's family">
							</div>

							<div class="item">
								<img src="/images/Gallery/Gallery-09.jpg" alt="Both families">
							</div>
  						</div>



  						<!-- Left and right controls -->
  						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    						<span class="sr-only">Previous</span>
  						</a>

						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    						<span class="sr-only">Next</span>
  						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel owl-theme">
								<div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish1['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish1['Name']; ?></p>
										</blockquote>
									</div>
								</div>
								<div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish2['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish2['Name']; ?></p>
										</blockquote>
									</div>
								</div>
								<div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish3['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish3['Name']; ?></p>
										</blockquote>
									</div>
								</div>

								<div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish4['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish4['Name']; ?></p>
										</blockquote>
									</div>
								</div>

								<div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish5['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish5['Name']; ?></p>
										</blockquote>
									</div>
								</div>

								<!-- <div class="owl-item">
									<div class="testimony-slide active text-center">
										<span><?php echo $wish6['Wishes']; ?></span>
										<blockquote>
											<p><?php echo $wish6['Name']; ?></p>
										</blockquote>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<span>Add your wishes to Sashi and Elsie</span>
							<h2>Write a Wish</h2>
							<div id="successText"></div>
							<form class="form-inline" onsubmit="return false">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input type="text" class="form-control" name="name" id="name_wish_form" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="wishes" class="sr-only">Wishes</label>
										<input type="text" class="form-control" name="wish" id="wishes_wish_form"
										placeholder="Write your wishes"sing >
									</div>
								</div>

								<div class="col-md-4 col-sm-4" style="padding-top:7px">
									<button type="submit" class="btn btn-default btn-block" id="wish-submit">Send Wish</button>
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

	<!-- Modal -->
  <div class="modal fade" id="wishesModal" role="dialog">
    <div class="modal-dialog">
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Wishes</h4>
        </div>
        <div class="modal-body">
          <p>Thank you for your wishes.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
  </div>

<!--RSVP Section code begins here-->

<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_6.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Are You Attending?</h2>
				<p>Please fill this form to notify us that you are attending. Thanks.</p>
			</div>
		</div>

		<div class="row animate-box">
			<div class="col-md-10 col-md-offset-1">
				<form class="form-inline" onsubmit="return false">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-md-offset-1" style="color:#FFFFFF">
						<div class="form-group">
						<label for="name" class="sr-only">Name</label>
						<input type="name" class="form-control" id="rsvp_name" placeholder="Name">
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-md-offset-1" style="color:#FFFFFF">
						<div class="form-group">
						<label for="email" class="sr-only">Email</label>
						<input type="email" class="form-control" id="rsvp_email" placeholder="email(optional)">
						</div>
					</div>
				</div>

				<div><br></div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-md-offset-1">
						<div class="radio-inline form-group" style="color:#FFFFFF">
							<!--<label class="radio-inline sr-only" id="labelid">Attending</label>-->
							<input type="radio" name= "optradio" class="form-control" id="radio-button-1"></input><span>Attending</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-md-offset-1">
						<div class="radio-inline form-group" style="color:#FFFFFF">
							<!--<label class="radio-inline sr-only">Not Attending</label>-->
							<input type="radio"  name= "optradio" class="form-control" id="radio-button-2"></input><span>Not Attending</span>
						</div>
					</div>
				</div>
				<div>
					<br>
				</div>

				<div class="row collapse" id="attending-options">
					<div class="col-md-5 col-sm-5 col-md-offset-1" style="color:#FFFFFF;padding-top:10px">
						Number of persons:
						<input type="number" name="persons" id="rsvp_persons" min="1" max="5"
						style="color:#555555">
						<span><p></p></span>
					</div>
					<div class="col-md-5 col-sm-5" style="color:#FFFFFF;padding-top:10px">
						<div class="pull-left">Food Preference </div>
						<div class="dropdown">
							<button class="btn-md dropdown-toggle pull-left" type="button" id="food-button"
							data-toggle="dropdown" style="color:#000000">
							Food Preference<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li id="veg"><a role="menuitem" tabindex="-1">Vegetarian</a></li>
								<li id="non-veg"><a role="menuitem" tabindex="-1">Non-Vegetarian</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div>
					<br>
				</div>
				<div class="row">
						<div class="col-md-8 col-sm-8 col-md-offset-4 " style="padding-left:50px">
							<div class="form-group">
								<button type="submit" class="btn btn-default" id="rsvp-submit">Submit</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--RSVP section ends-->

	<!-- Modal -->
  <div class="modal fade" id="rsvpModal" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">RSVP</h4>
		</div>
		<div class="modal-body">
		  <p>Thank you for indicating your preference.</p>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	  </div>
  </div>
  </div>



	<footer id="fh5co-footer" role="contentinfo" style="padding-top:20px;padding-bottom:5px">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Sashi and Elsie</small>
					</p>
				</div>
			</div>

		</div>
	</footer>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script>
	// Gaurang' Code starts here......................................................................................
	var initial = '2017-05-24T15:30:00.593Z';
	var fromTime = new Date(initial);
	var toTime = new Date();

	var differenceTravel = fromTime.getTime() - toTime.getTime();
	var seconds = Math.floor((differenceTravel) / (1000));
	// console.log(seconds);


	var d = new Date(new Date().getTime() + (seconds*1000));

	// Gaurang' Code ends here......................................................................................
	var attending_status = 0;
	var persons = 0;
	var veg=0;
    // var d = new Date(new Date().getTime() + 282 * 120 * 120 * 2004);
	// console.log(d);
    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });

	$("#event_button").click(function() {
    $('html, body').animate({
        scrollTop: $("#fh5co-event").offset().top
    }, 2000);
	});

	$("#story_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#fh5co-couple-story").offset().top
		}, 2000);
	});

	$("#gallery_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#fh5co-gallery").offset().top
		}, 2000);
	});

	$("#testimonial_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#fh5co-testimonial").offset().top
		}, 2000);
	});

	$("#rsvp_button").click(function() {
		$('html, body').animate({
			scrollTop: $("#fh5co-started").offset().top
		}, 2000);
	});

	$("#wish-submit").click(function(){
		var name = $("#name_wish_form").val();
		var wishes = $('#wishes_wish_form').val();

		var postData = 'name='+name+"&wish="+wishes;

		$.ajax({
			url:"addWish.php",
			type:"POST",
			data:postData,
			success: function(data,status,xhr)
			{
				$("#sucessText").html("Successfully added your message.");
				$("#name_wish_form").val('');
				$('#wishes_wish_form').val('');
			},
			error: function(jqXHR,status,errorThrown)
			{
				$("successText").html("There was an error.");
				console.log("Error encountered");
			}
		});
	});

	$("#rsvp-submit").click(function(){
		var name = $("#rsvp_name").val();
		var email = $("#rsvp_email").val();
		var persons = $("#rsvp_persons").val();

		var postData = 'name='+name+"&email="+email+"&attending="+attending_status+"&persons="+persons+"&veg="+veg;
		// console.log(postData);
		$.ajax({
			url:"addRSVP.php",
			type:"POST",
			data:postData,
			success: function(data,status,xhr)
			{
				$("#rsvp_name").val('');
				$("#rsvp_email").val('');
				$("#rsvp_persons").val('');
			},
			error: function(jqXHR,status,errorThrown)
			{
				console.log("Error RSVP Encountered");
			}
		});
	});

	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        }
    }
});

	// $(document).ready(function(){
	// 	$('#attending-options').removeClass('hidden');
	// });
	$(document).ready(function(){
  		$(".owl-carousel").owlCarousel();
	});

	$("#veg").click(function(){
		veg = 1;
		$("#food-button").text('Vegetarian');
	});

	$("#non-veg").click(function(){
		veg = 0;
		$("#food-button").text('Non-Vegetarian');
	});

	$("#radio-button-2").click(function(){
		$('#attending-options').addClass('collapse');
	 	attending_status = 0;
		// console.log(attending_status);
	});

	$("#radio-button-1").click(function(){
		$('#attending-options').removeClass('collapse');
		attending_status = 1;
		// console.log(attending_status);
	});

	$(document).ready(function(){
		$("#wish-submit").click(function(){
			$("#wishesModal").modal({keyboard: true});
    });
});

$(document).ready(function(){
	$("#rsvp-submit").click(function(){
		$("#rsvpModal").modal({keyboard: true});
});
});
	</script>

	</body>
	</html>
