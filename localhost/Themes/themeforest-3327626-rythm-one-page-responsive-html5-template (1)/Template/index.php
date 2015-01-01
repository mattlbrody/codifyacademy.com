<?php
$emailTo = 'your@email.com'; //Put your own email address here

//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}
	
	//Email Subject
	$subject = "Contact Form Message";

	//If there is no error, send the email
	if(!isset($hasError)) {
		$body = "Name: $name \n\nEmail: $email \n\nComments:\n $comments";
		$headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rythm - Responsive One-Page Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Le styles -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
	<!-- Le javascript -->
	<script src="js/modernizr.custom.js"></script>

</head>
<body id="top">

	<!-- Header -->
	<header id="header">
    	<div class="container">
            <!-- Logo -->
            <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="Rythm"></a>
            </div>
            <!-- Navigation -->
            <nav>
                <ul>
                    <li class="current-menu-item"><a href="#top">Top</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#the-team">The Team</a></li>
                    <li><a href="#connect">Connect</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <li><a href="#get-in-touch">Get In Touch</a></li>
                </ul>
            </nav>
        </div>
    </header><!-- #header -->
 
    
    <!-- Slider -->
	<section id="slider">
    	<div class="flexslider">
        	<ul class="slides">
            	<!-- Slide -->
            	<li>
                	<h1>Thanks for purchasing <br>Rythm! Enjoy it!</h1>
                    <img src="img/pictures/slide.png" alt="">
                </li>
            	<!-- Slide -->
            	<li>
                	<h1>Thanks for purchasing <br>Rythm! Enjoy it!</h1>
                    <img src="img/pictures/slide.png" alt="">
                </li>
            </ul>
        </div>
    </section><!-- #slider -->
  
    
    <!-- Portfolio Page -->
    <article class="page portfolio" id="portfolio">
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>Featured Work</h1></a></div>
            <p>Below are some of our best design works we have done for clients.</p>
            
            <div class="portfolio-items">
	            <div class="row">

		            <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>CinkiLinki</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>

		            <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>Mighty Beaver Designs</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>
		
                    <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>CinkiLinki</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>

		            <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>CinkiLinki</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>

		            <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>Mighty Beaver Designs</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>

		            <!-- Portfolio Item -->
		            <a href="#" data-toggle="modal">
			            <dl class="span4">
			            	<dt><img src="img/pictures/portfolio-item.png" alt=""></dt>
			                <dd>CinkiLinki</dd>
			            </dl>
		            </a>
                    <!-- Modal -->
                    <div class="modal">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <img src="img/pictures/modal.png" alt="">
                        <div class="modal-body">
                            <h1>Clinkilinki Logo Design</h1>
                            <div class="description">
	                            <ul class="meta">
	                                <li><strong>Client:</strong> Clinkilinki</li>
	                                <li><strong>Year:</strong> 2012</li>
	                                <li><strong>Services:</strong> Logo design</li>
	                            </ul>
                                <p>User interface design or user interface engineering is the design of computers, appliances, machines, mobile communication devices, software applications, and websites with the focus on the user's experience and interaction. The goal of user interface design is to make the user's interaction as simple and efficient as possible.</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="prev"></a>
                            <a href="#" class="next"></a>
                        </div>
                    </div>
	            </div>
            </div>
            
        </div>
    </article>
    <!-- #portfolio -->

    
    <!-- Services Page -->
    <article class="page even" id="services">
    
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>What We Do</h1></a></div>
            <p>Here is what we can do for your next awesome idea!</p>
       	</div>
        
        <div class="widget-area">
        	<div class="container">
            	<!-- Item -->
                <div class="widget widget-teaser width-33">
                    <img src="img/pictures/services-1.png" alt="">
                    <h2 class="widget-title">Concept&amp;Design</h2>
                    <div class="widget-content">
                    	There are several phases and processes in the user interface design. Just placeholder text.
                    </div>
                </div>
            	<!-- Item -->
                <div class="widget widget-teaser width-33">
                    <img src="img/pictures/services-2.png" alt="">
                    <h2 class="widget-title">Excecution&amp;Testing</h2>
                    <div class="widget-content">
                    	There are several phases and processes in the user interface design. Just placeholder text.
                    </div>
                </div>
            	<!-- Item -->
                <div class="widget widget-teaser width-33">
                    <img src="img/pictures/services-3.png" alt="">
                    <h2 class="widget-title">Launch&amp;Support</h2>
                    <div class="widget-content">
                    	There are several phases and processes in the user interface design. Just placeholder text.
                    </div>
                </div>
            </div>
        </div>
        
   	</article>
    <!-- #services -->    

    
    <!-- Team Page -->
    <article class="page staff" id="the-team">
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>An Awesome Team</h1></a></div>
            <p>We are a small but dedicated team. And a bunch of nice people.</p>
            
            <div class="staff-items">
	            <div class="row">
                	<!-- Item -->
                    <dl class="span4">
                        <dt><img src="img/pictures/staff-item.png" alt=""></dt>
                        <dd>
                            <h3>Jason Bollocks</h3>
                            <p>- The developer -</p>
                            <ul class="social-profiles">
                                <li><a href="#" title="Dribbble"><img src="img/i-dribbble.png" alt="Dribbble"></a></li>
                                <li><a href="#" title="Forrst"><img src="img/i-forrst.png" alt="Forrst"></a></li>
                                <li><a href="#" title="Twitter"><img src="img/i-twitter.png" alt="Twitter"></a></li>
                            </ul>
                        </dd>
                    </dl>
                	<!-- Item -->
                    <dl class="span4">
                        <dt><img src="img/pictures/staff-item.png" alt=""></dt>
                        <dd>
                            <h3>Marina Jones</h3>
                            <p>- The designer -</p>
                            <ul class="social-profiles">
                                <li><a href="#" title="Dribbble"><img src="img/i-dribbble.png" alt="Dribbble"></a></li>
                                <li><a href="#" title="Forrst"><img src="img/i-forrst.png" alt="Forrst"></a></li>
                                <li><a href="#" title="Twitter"><img src="img/i-twitter.png" alt="Twitter"></a></li>
                            </ul>
                        </dd>
                    </dl>
                	<!-- Item -->
                    <dl class="span4">
                        <dt><img src="img/pictures/staff-item.png" alt=""></dt>
                        <dd>
                            <h3>John Stobbard</h3>
                            <p>- The project manager -</p>
                            <ul class="social-profiles">
                                <li><a href="#" title="Dribbble"><img src="img/i-dribbble.png" alt="Dribbble"></a></li>
                                <li><a href="#" title="Forrst"><img src="img/i-forrst.png" alt="Forrst"></a></li>
                                <li><a href="#" title="Twitter"><img src="img/i-twitter.png" alt="Twitter"></a></li>
                            </ul>
                        </dd>
		            </dl>
	            </div>
            </div>
            
        </div>
    </article>
    <!-- #the-team -->
 
    
    <!-- Connect Page -->
    <article class="page portfolio even" id="connect">
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>Connect With Us</h1></a></div>
            <p>Connect with us through social media and get updates and news.</p>
	        <ul class="connect">
	        	<li><a href="#"><img src="img/c-dribbble.png" alt="Dribbble"></a></li>
	        	<li><a href="#"><img src="img/c-forrst.png" alt="Forrst"></a></li>
	        	<li><a href="#"><img src="img/c-twitter.png" alt="Twitter"></a></li>
	        	<li><a href="#"><img src="img/c-facebook.png" alt="Facebook"></a></li>
	        	<li><a href="#"><img src="img/c-pinterest.png" alt="Pinterest"></a></li>
	        	<li><a href="#"><img src="img/c-linkedin.png" alt="LinkedIn"></a></li>
	        </ul>
       	</div>
   	</article>
    <!-- #connect -->
    
    
    <!-- Clients Page -->
    <article class="page staff" id="clients">
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>Selected Clients</h1></a></div>
            <p>These are some of the nicest brands we have worked for.</p>
            
            <div class="client-items">
	            <div class="row">
                	<!-- Item -->
                    <div class="span4">
                        <img src="img/pictures/client-item.png" alt="">
                    </div>
                	<!-- Item -->
                    <div class="span4">
                        <img src="img/pictures/client-item.png" alt="">
                    </div>
                	<!-- Item -->
                    <div class="span4">
                        <img src="img/pictures/client-item.png" alt="">
                    </div>
	            </div>
            </div>
            
        </div>
    </article>
    <!-- #clients -->
    
    
    <!-- Contact Page -->
    <article class="page portfolio even" id="get-in-touch">
    
    	<div class="container">
        	<div class="page-title"><a href="#top"><h1>Get In Touch</h1></a></div>
            <p>We are currently accepting new projects! Get in touch with us.</p>
            
            <div id="map"></div>
            
            <div class="address">
		        <div class="row">
	            	<div class="span6">
	                	<p><img src="img/logo-2.png" alt=""></p>
	                    <p><strong>1 Infinite Loop, Cupertino, CA 95014 / 408.996.1010</strong></p>
	                    <p>We are located in California, serving clients worldwide. If you want to work with us, shoot us an email using the form on the right and we will get back to you. Thanks!</p>
	                </div>
	            	<div class="span5 offset1">
                    
						<?php
                        if(isset($hasError)) { //If errors are found ?>
                            <div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Error!</strong> Please check if you've filled all the fields with valid information.
                            </div><?php
                        }
                        
                        if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>Email Successfully Sent!</strong> Thank you <strong><?php echo $name;?></strong> for contacting us! Your email was successfully sent and we will be in touch with you soon.
                            </div><?php
                        } ?>
                    
	                	<form action="<?php echo $_SERVER['PHP_SELF']; ?>#get-in-touch" method="POST" id="contact">
	                    	<input type="text" id="contactname" name="contactname" placeholder="Name">
	                    	<input type="text" id="email" name="email" placeholder="Email">
	                    	<div class="textarea-container"><textarea id="message" name="message" placeholder="Message"></textarea></div>
	                    	<input type="submit" id="submit" name="submit" value="Send">
	                    </form>
	                </div>
	            </div>
            </div>
	            
       	</div>
                
   	</article>
    <!-- #get-in-touch -->
    
    
    <!-- Footer -->
    <footer id="footer">
    	<div class="container">
        	<div class="row">
            
            	<!-- Widget -->
            	<div class="widget widget-text span4">
                	<div class="widget-title"><h3>A Text Widget</h3></div>
                    <div class="widget-content">
                    	<p>Rythm is based on the Bootstrap CSS framework, which provides a future-proof foundation for the design and layout.</p>
                        <p>Now I need to just add some text here and there and maybe repeat this. I do not think it is necessary.</p>
                    </div>
                </div>

            	<!-- Widget -->
            	<div class="widget widget-twitter span4">
                	<div class="widget-title"><h3>Latest Tweets</h3></div>
                    <div class="widget-content">
                    	<div></div>
                    </div>
                </div>

            	<!-- Widget -->
            	<div class="widget widget-flickr span4">
                	<div class="widget-title"><h3>Photostream</h3></div>
                    <div class="widget-content">
                    	<div>
	                    	<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155@N08"></script>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    
       	<!-- Copyright -->
    	<section id="copyright">
	    	<div class="container">
	        	<div class="pull-right"><a href="#top" id="go-top"><img src="img/top.png" alt="Go Top"></a></div>
                <div class="pull-left">Copyright 2012 - Rythm</div>
	        </div>
        </section>	
    </footer>
    <!-- #footer -->
    

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery.mobilemenu.js"></script>
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.simplemodal.1.4.3.min.js"></script>
	<script src="js/jquery.tweet.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj3DA7bdxu7m7EKVYR_bKeDKuHOn9Vg9A&sensor=true"></script>
    
	<script src="js/main.js"></script>     
    
</body>
</html>
