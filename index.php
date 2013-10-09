<?php
require_once('functions.php');

$page = substr($_SERVER['REQUEST_URI'], 1);
$page = (!empty($page)) ? $page : 'home';

if(strpos($page, '/') !== false)
{
   $page = explode('/', $page);
   $page = $page[1];
}

$menu = '<div class="sixteen columns">
			<nav>
				<ul>
					<li><a href="/home" title="Home" alt="Home"'; $menu .= ($page === 'home') ? ' class="active"' : ''; $menu .= '>Home</a></li>
					<li class="top"><a href="/event" title="Event" alt="Event"'; $menu .= ($page === 'event') ? ' class="active"' : ''; $menu .= '>Event</a>
						<ul>
							<li><a href="/event/CloudStack-CIO-event" title="CloudStack CIO event" alt="CloudStack CIO event"'; $menu .= ($page === 'CloudStack-CIO-event') ? ' class="active"' : ''; $menu .= '>CloudStack CIO event</a></li>
							<li><a href="/event/registration" title="Registration" alt="Registration"'; $menu .= ($page === 'registration') ? ' class="active"' : ''; $menu .= '>Registration</a></li>
							<li><a href="/event/hotels" title="Hotels" alt="Hotels"'; $menu .= ($page === 'hotels') ? ' class="active"' : ''; $menu .= '>Hotels</a></li>
						</ul>
					</li>
                                        <li class="top"><a href="/schedule" title="Schedule" alt="Schedule"'; $menu .= ($page === 'schedule') ? ' class="active"' : ''; $menu .= '>Schedule</a>
                                        	<ul>
							<li><a href="/schedule/Wednesday" title="Hackday on Wednesday" alt="Hackday on Wednesday"'; $menu .= ($page === 'schedulewed') ? ' class="active"' : ''; $menu .= '>Hackday on Wednesday</a></li>
							<li><a href="/schedule/Thursday" title="Conference Schedule Thursday" alt="Conference Schedule Thursday"'; $menu .= ($page === 'schedulethur') ? ' class="active"' : ''; $menu .= '>Conference Schedule Thursday</a></li>
							<li><a href="/schedule/Friday" title="Conference Schedule Friday" alt="Conference Schedule Friday"'; $menu .= ($page === 'schedulefri') ? ' class="active"' : ''; $menu .= '>Conference Schedule Friday</a></li>
						</ul>
					<li><a href="/sponsors" title="Sponsors" alt="Sponsors"'; $menu .= ($page === 'sponsors') ? ' class="active"' : ''; $menu .= '>Sponsors</a></li>
					<li><a href="/call-for-papers" title="Call for Papers" alt="Call for Papers" class="focus"'; $menu .= ($page === 'call-for-papers') ? ' class="active"' : ''; $menu .= '>Call for Papers</a></li>
					<li><a href="/contact" title="Contact" alt="Contact"'; $menu .= ($page === 'contact') ? ' class="active"' : ''; $menu .= '>Contact</a></li>
				</ul>
			</nav>
		</div>	';
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="lt-ie no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Apache CloudStack Collaboration Conference - 20/21/22 November 2013</title>
	<meta name="keywords" content="CloudStack Collaboration Conference Europe, apache, CloudStack, collaboration, conference, europe, 20, 21, 22, november, 2013" />
	<meta name="description" content="Cloudstack collaboration conference Europe" />
	<meta name="author" content="De Graaf & Partners Communications" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="/images/favicon.ico" />
	<link rel="apple-touch-icon" href="/images/appletouch/icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="/images/appletouch/57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="/images/appletouch/72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="/images/appletouch/114x114.png" />
	<!--[if lte IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
	<header>
		<div id="top-bar"></div>
				<?php
				if($page === 'home')
				{
				?>
				<div id="large-header">
					<div class="container">
						<div class="apache-cloudstack-logo"></div>
						<div class="large-header">
							<div class="six columns alpha large-header-text-left">
								Cloudstack<br/>
								collaboration<br/>
								conference<br/>
								Europe
							</div>
							<div class="eight columns offset-by-two omega large-header-text-right">
								<div class="date-days">
									20<span class="date-backslash">/</span>21<span class="date-backslash">/</span>22
								</div><br/>
								<div class="date-month">
									november 2013
								</div><br/>
								<div class="location">
									Beurs van Berlage, Amsterdam
								</div><br/>
								<div class="social">
									<div class="four columns alpha">
										<a href="https://github.com/awolfs/ccc-website" title="Github" alt="Github" target="_blank" class="socialmedia"><i class="icon-github-alt"></i></a>
										<a href="https://twitter.com/search?q=%23CCCEU13&src=typd" title="Twitter" alt="Twitter" target="_blank" class="socialmedia"><i class="icon-twitter"></i></a>
										<a href="https://www.facebook.com/CloudStack" title="Facebook" alt="Facebook" target="_blank" class="socialmedia"><i class="icon-facebook">
										</i></a>
									</div>
									<div class="four columns omega">
										<a href="/event/registration" title="Register now" alt="Register now" class="register-button">Register now</a>
									</div>
								</div>
							</div>
						</div>
						<?php echo $menu; ?>
					</div>
				</div>
				<?php
				}
				else
				{
				?>
				<div id="small-header">
					<div class="container">
						<div class="apache-cloudstack-logo"></div>
						<div class="small-header">
							<div class="sixteen columns small-header-text">
								<div>
									Cloudstack collaboration conference Europe
								</div>
								<div class="small">
									20/21/22 november 2013 - Beurs van Berlage, Amsterdam
								</div>
							</div>
						</div>
						<?php echo $menu; ?>
					</div>
				</div>
				<?php
				}
				?>
			</div>		
		</div>
	</header>
	<?php
	if($page === 'registration')
	{
		echo '<section id="body"><div class="container"><div class="sixteen columns"><h1><span>Registration</span></h1></div></div></div><iframe src="http://www.eventbrite.com/event/7944350767?ref=eweb" frameborder="0" height="2600" width="100%" vspace="0" hspace="0" marginheight="0" marginwidth="0" scrolling="auto" allowtransparency="true"></iframe></section>';
	}
	else
	{
	?>
	<section class="container">	
		<?php
		if(is_file('./pages/'.$page.'.phtml'))
		{
			require_once('./pages/'.$page.'.phtml');
		}
		else
		{
			require_once('./pages/404.phtml');
		}
		?>
		<div class="sixteen columns"><br class="clear"><?php echo sponsorblock('Sponsors'); ?></div>
	</section>
	<?php
	}
	?>
	<footer>
		<div class="container">
			<div class="sixteen columns">
				<div class="eight columns alpha">
					<p>Apache, CloudStack, Apache CloudStack, and the Cloud Monkey are trademarks or registered trademarks of the Apache Software Foundation</p>
				</div>
				<div class="eight columns omega right">
					<p>Web design and development by <br/><a href="http://www.degraafenpartners.nl" target="_blank" alt="De Graaf &amp; Partners Communications" title="De Graaf &amp; Partners Communications">De Graaf &amp; Partners Communications</a></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
