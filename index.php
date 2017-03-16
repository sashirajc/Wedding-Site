<?php
function query_Executor($query){
	include "includes/creds.php";
	try{
		$pdoConfigString = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=utf8";

		$conn = new PDO($pdoConfigString, $db_username, $db_password);

		$stmt = $conn -> prepare($query);
		$stmt -> execute();

		return $stmt -> fetch();

	}
	catch (PDOException $e){
		echo "Exception" . $e;
	}
}
// $data = query_Executor('SELECT Name FROM weddingDB.Wishes WHERE idWishes="0"')

function getWish(){
	$data = query_Executor("SELECT Name,Wishes FROM weddingDB.Wishes");
	// echo "<script>console.log('". $data[1] ."');</script>";
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sashi &amp; Elsie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wedding Site of Elsie and Sashi" />
	<meta name="keywords" content="sashi, elsie" />
	<meta name="author" content="Sashiraj" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

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

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

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
						<li id="event_button"><a href="#">Events</a></li>
						<li id="story_button"><a href="#fh5co-couple-story">Timeline</a></li>
						<!-- <li id="gallery_button"><a href="#fh5co-gallery">Gallery</a></li> -->
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
									<p>Join us to witness the exchange of our marriage vows at <br> <br> Holy Trinity Church <br> Trinity Circle <br> Ulsoor <br> Bangalore - 560008</p>
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
									<p>Celebrate with us over dinner as we begin our life together at <br> <br> DRDO Community Hall <br> DRDO Township Phase 1<br> CV Raman Nagar <br> Bangalore - 560093</p>
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
					<p>Through the mountains and valleys of life, we have laboured alone thus far. <br> Looking forward to journeying together and explore new lands.</p>
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
									<p>Like every other immigrant to Singapore through the last 2 centuries, with starstruck eyes and lofty dreams.</p>
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
							<div class="timeline-badge" style="background-image:url(images/comingsoon.jpg);"></div>
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

	<!-- <div id="fh5co-gallery" class="fh5co-section-gray">
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
					<ul id="fh5co-gallery-list">
 -->
						<!-- <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-1.jpg); "> -->
						<!-- <a href="images/gallery-1.jpg"> -->
							<!-- <div class="case-studies-summary">
								<span>Sashi's family</span>
								<h2>Sashi's family</h2>
							</div> -->
						<!-- </a> -->
					<!-- </li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-2.jpg); "> -->
						<!-- <a href="#" class="color-2"> -->
							<!-- <div class="case-studies-summary">
								<span>Elsie's family</span>
								<h2>Elsie's family</h2>
							</div> -->
						<!-- </a> -->
					<!-- </li>


					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-3.jpg); ">
						<a href="#" class="color-3">
							<div class="case-studies-summary">
								<span>Poo Vaikradhu</span>
								<h2>Poo Vaikradhu</h2>
							</div>
						</a>
					</li>
					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-4.jpg); ">
						<a href="#" class="color-4">
							<div class="case-studies-summary">
								<span>Engagement</span>
								<h2>Engagement</h2>
							</div>
						</a>
					</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-5.jpg); ">
							<a href="#" class="color-3">
								<div class="case-studies-summary">
									<span>Wedding</span>
									<h2>Wedding</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-6.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>Photoshoot</span>
									<h2>Photoshoot</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-7.jpg); ">
							<a href="#" class="color-4">
								<div class="case-studies-summary">
									<span>35 Photos</span>
									<h2>Two Glas of Juice</h2>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-8.jpg); ">
							<a href="#" class="color-5">
								<div class="case-studies-summary">
									<span>90 Photos</span>
									<h2>Timer starts now!</h2>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery-9.jpg); ">
							<a href="#" class="color-6">
								<div class="case-studies-summary">
									<span>56 Photos</span>
									<h2>Beautiful sunset</h2>
								</div>
							</a>
						</li> -->
					<!-- </ul>
				</div>
			</div>
		</div>
	</div> -->


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
							<div class="owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<span>John Doe</span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<span>John Doe</span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<span>John Does</span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
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
										<input type="text" class="form-control" name="wish" id="wishes_wish_form" placeholder="Write your wishes"sing >
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-default btn-block" id="wish-submit">Send Wish</button>
								</div>
							</form>
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

	<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Are You Attending?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline" onsubmit="return false">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-md-offset-1">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="rsvp_name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-md-offset-1">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="rsvp_email" placeholder="email">
								</div>
							</div>
						</div>
						<div class="row">
						<div class="col-md-4 col-sm-4 col-md-offset-1">
							<div class="radio-inline form-group">
								<label class="radio-inline sr-only">Attending</label>
									<input type="radio" name= "optradio" class="form-control" id="radio-button-1">Attending</input>

							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="radio-inline form-group">
								<label class="radio-inline sr-only">Not Attending</label>
									<input type="radio"  name= "optradio" class="form-control" id="radio-button-2">Not Attending</input>
							</div>
						</div>
					</div>

					<div class="row collapse" id="attending-options">
						<div class="col-md-5 col-sm-5 col-md-offset-1">
							Number of persons:
							<input type="number" name="persons" id="rsvp_persons" min="1" max="5">

					</div>
					<div class="col-md-5 col-sm-5 col-md-offset-1">
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Food Preference
								<span class="caret"></span>
							</button>
								<ul class="dropdown-menu" role="menu">
									<li id="veg"><a role="menuitem" tabindex="-1">Vegetarian</a></li>
									<li id="non-veg"><a role="menuitem" tabindex="-1">Non-vegetarian</a></li>
								</ul>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-4 col-md-offset-4">
							<div class="form-group">
								<button type="submit" class="btn btn-default btn-block" id="rsvp-submit">Submit</button>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

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



	<footer id="fh5co-footer" role="contentinfo">
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
	</div>

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

	// $(document).ready(function(){
	// 	$('#attending-options').removeClass('hidden');
	// });

	$("#veg").click(function(){
		veg = 1;
	});

	$("#non-veg").click(function(){
		veg = 0;
	});

	$("#radio-button-2").click(function(){
		$('#attending-options').addClass('collapse');
	 	attending_status = 0;
		console.log(attending_status);
	});

	$("#radio-button-1").click(function(){
		$('#attending-options').removeClass('collapse');
		attending_status = 1;
		console.log(attending_status);
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
