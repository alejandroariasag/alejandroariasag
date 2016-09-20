<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'alejandroariasag@gmail.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Rhino Project</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <!--Font Awesome-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> 
       
        <!--Hover.css   -->
       <link rel="stylesheet" href="assets/styles/hover.css">    
       
        <!--Custom-->
        <link rel="stylesheet" href="assets/styles/custom-style.css">
        <link rel="stylesheet" href="assets/styles/medias.css">
    </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="images/logo.png" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll hvr-underline-from-center" href="#about">ABOUT</a>
                    </li>
                    <li class="">
                        <a class="page-scroll hvr-underline-from-center" href="#services">SERVICES</a>
                    </li>
                    <li class="">
                        <a class="page-scroll hvr-underline-from-center" href="#portfolio">PORTFOLIO</a>
                    </li>
                    <li class="">
                        <a class="page-scroll hvr-underline-from-center" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
    <!--Video-->
    <div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth">
            <source src="video/Busy-People.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
            <source src="video/Busy-People.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="images/Busy-People.jpg" alt="">
        </div>
        
        <!--Video + Message-->
        <div class="highlight" id="about">
            <h1>Hello,</h1>
            <h2>my name is Alejandro, I am a web developer passionate about web done right
and clean code. I am also specialized in Marketing, so if you are a business looking
for a web presence you can contact me here.</h2>
         
          <!--Video + Contact buttoms -->
           <button class="btn btn-primary pink  hvr-icon-wobble-horizontal" type="button">I need some code</button>
        </div>
    </div>
</div>
<!--Services-->
    <div class="container" id="services">
        <div class="row">
            <div class="col-md-6">
                <i class="fa fa-code" aria-hidden="true" style="padding-top: 3%;"></i>
                <h1>Web Development</h1>
                <p>Something I am really passionate about is to bring web designs to life, through clean code. I'll make your website light and accesible by any device.</p>
                <p>If you already have a design and you need to code it, this might be your best option. </p>
            </div>
            <div class="col-md-6">
                <i class="fa fa-paint-brush" aria-hidden="true" style="padding-top: 3%;"></i>
                <h1>Web Design</h1>
                <p>Do you want a modern, simple and cool design? I can make it for you.</p>
                <p>I really enjoy designing websites with a personality. Something that matches your brand and your public. Hit me up with your likes and I'll give you the best option for your business.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <h1>eCommerce</h1>
                <p>Sell your products on the Internet with an easy and simple platform full of personality.</p>
                <p>Manage your castalogue, offers, orders and clients with an intuitive Control Panel.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-star" aria-hidden="true"></i>
                <h1>Branding</h1>
                <p>Be sure to know what are you selling before you try to sell. Let me build your brand.</p>
                <p>Just give me a few remarks and I'll give you a solid brand.</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                <h1>Online Marketing</h1>
                <p>I can help your business to enter into Social Channels and to create a solid Social Media Strategy: brands are shaping a heart and becoming more human. Let your business talk with your clients.</p>
                <p>It doesn't matter what your business is, I can help you with any type of topics.</p>
            </div>
        </div>
    </div>
<!--Portfolio-->
    <hr>
    <div class="container" id="portfolio">
        <div class="row">
           <div class="col-md-6">
               <div class="img-container">
                   <img src="images/portfolio-img/pgnrope.png" class="img-responsive">
               </div>
           </div>
           <div class="col-md-6">
               <div class="description">
                   <h1>PegNRope</h1>
                   <p>PegNRope is a travel agency that covers the destinations that most people are interested in visiting. I coded this website from a <span>PDF</span> that I found on <span>Upwork</span>.</p>
                   <span class="label label-default">Bootstrap 3</span> <span class="label label-default">jQuery</span> <span class="label label-default">HTML5/CSS3</span> <span class="label label-default">Responsive</span> <span class="label label-default">Google MAPS API</span>
                   <button class="btn btn-primary pink  hvr-icon-wobble-horizontal" type="button">Demo</button>
               </div>
           </div>
       </div>
       </div>
       
        <!--Contact-->
        <div id="contact" class="container-fluid">
            <div class="row">
               <div class="col-md-4">
                   <img src="images/rhino.png">
                   <h1>The Rhino Project</h1>
               </div>
                <div class="col-md-8">
                    <h3>Send me a message!</h3>
                    <form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
                </div>
            </div>
        </div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Custom JS-->
    <script src="assets/js/custom-js.js"></script>
  </body>
</html>