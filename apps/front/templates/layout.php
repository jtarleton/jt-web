<?php $sess = @$_SESSION['fbsess']; 

$valid = false;
if(is_object($sess)) {

$info = $sess->getSessionInfo();

$valid = $info->isValid();

}


?>
<!DOCTYPE html>
<html>
<head>
	<?php include_http_metas() ?>
    	<?php include_metas() ?>
    	<?php include_title() ?>
    	<link rel="shortcut icon" href="https://www.jamestarleton.com/favicon.ico">



<link rel="stylesheet" type="text/css" media="all" href="https://www.jamestarleton.com/css/boots/bootstrap-3.3.0/dist/css/bootstrap.css">


    	<?php include_stylesheets() ?>
    	<?php include_javascripts() ?>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.3/css/jquery.dataTables.css" type="text/css" media="all">


<script type="text/javascript" src="https://cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#example').DataTable();
} );

</script>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />


	<meta name="description" content="Your description goes here" />


	<meta name="keywords" content="your,keywords,goes,here" />


	<meta name="author" content="Your Name" />


	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans" rel="stylesheet" type="text/css">

 	<link rel="stylesheet" type="text/css" href="https://www.jamestarleton.com/css/bootflat.github.io-master/css/site.css" media="all">


	<link rel="stylesheet" type="text/css" media="all" href="https://www.jamestarleton.com/css/inland-wood.css">
	
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script> -->


	<script type="text/javascript" src="https://www.jamestarleton.com/js/jquery.nivo.slider.js"></script>




</head>

<body><div id="wrapper960" class="clearfix">


	<div id="toplinks">


		<ul class="toplinks_links">
<li>
<a href="https://www.jamestarleton.com/sun/index">Sun</a>
</li>
<li>
<a href="https://www.jamestarleton.com/weather/index">Weather</a>
</li>
<?php if(sfContext::getInstance()->getUser()->isAuthenticated() ): ?>
		<li>
<a href="https://www.jamestarleton.com/musicvideos">Music</a>
</li>
			<li><a href="https://www.jamestarleton.com/phpbooks">PHP Books</a></li>
			<li><a href="https://www.jamestarleton.com/tutorials">PHP Tutorials</a></li>
			<!-- <li><a href="top3">Top link #3</a></li>
			<li><a href="top4">Top link #4</a></li> -->

<?php endif; ?>

		</ul>
	</div>

	<div id="header" class="clearfix shadow">
		<div id="sitetitle" class="clearfix">
			<h1><a href="/">James's Homepage</a></h1>
		</div>

		<div id="nav" class="clearfix">
			<ul>
				<li><a class="current" href="https://www.jamestarleton.com/">Home</a></li>

<?php if(sfContext::getInstance()->getUser()->isAuthenticated()): ?>

				<li><a href="https://www.jamestarleton.com/about">About</a></li>

 <li><a href="https://www.jamestarleton.com/running
">Running</a></li>
 <li><a href="https://www.jamestarleton.com/pics
">Pics</a></li>
<li>
<a href="https://www.jamestarleton.com/links">Links</a>
</li>


				<li><a href="https://www.jamestarleton.com/projects">Projects</a></li>
				<!-- <li><a href="races">Races</a></li> >
				<li><a href="https://www.jamestarleton.com/contact">Contact</a></li>
				--><li> 
<?php endif; ?>
<?php

/*

$helper = new \Facebook\FacebookRedirectLoginHelper('https://www.jamestarleton.com/fbredirect');
$loginUrl = $helper->getLoginUrl();



if(!sfContext::getInstance()->getUser()->isAuthenticated() && ( 
empty($sess) || !$valid )
) {

echo '<a href="' . $loginUrl . '">Login w/ FB</a>';
} 

elseif( !sfContext::getInstance()->getUser()->isAuthenticated() ) {

?>
<a href="https://www.jamestarleton.com/frontdoor">Login</a>
<?php


}

elseif($sess && $valid) {
*/

/* 
?><span style="font-weight:800;"><?php 
echo 'Welcome '; //.  $sess->getSessionInfo()->getId();

$request = new \Facebook\FacebookRequest(
  $sess,
  'GET',
  '/'. $sess->getSessionInfo()->getId()
);
$response = $request->execute();
$graphObject = $response->getGraphObject();







$request2 = new \Facebook\FacebookRequest(
  $sess,
  'GET',
  '/me/picture',
  array (
    'redirect' => false,
    'height' => '200',
    'type' => 'normal',
    'width' => '200',
  )
);
$response2 = $request2->execute();
$graphObject2 = $response2->getGraphObject();


*
?><img src="<php echo $graphObject2->getProperty('url'); ?>" style="
width:50px; height:50px;
"></img>
<?php */ 
/*
 //->getPropertyNames());
//[0] => id [1] => first_name [2] => gender [3] => last_name [4] => link [5] => locale [6] => name [7] => timezone [8] => updated_time [9] => verified
//
echo $graphObject->getProperty('first_name');
?>
<a href="https://www.facebook.com/logout.php?access_token=<?php echo $_SESSION['fbat']; ?>&confirm=1&next=https://www.jamestarleton.com/logout">Logout</a>
</span>
<?php } 

*/
if($sf_user->isAuthenticated())
{
?>
<a href="https://www.jamestarleton.com/logout">Logout</a>
<?php
}


?>

</li>
			</ul>
		</div>
	</div>

	<div class="slider-wrapper">
		<div id="slider" class="nivoSlider">
			<img src="https://www.jamestarleton.com/images/slider3.jpg" alt="" />
			<img src="https://www.jamestarleton.com/images/slider1.jpg" alt="" />
			<img src="https://www.jamestarleton.com/images/slider2.jpg" alt="" />
			<img src="https://www.jamestarleton.com/images/slider0.jpg" alt="" />
			<img src="https://www.jamestarleton.com/images/slider4.jpg" alt="" />
		</div>
	</div>

	<div id="content" class="clearfix shadow">


		

	</div>

	<div id="extended" class="clearfix shadow">

<?php echo $sf_content ?>
<!-- 
		<div id="trio1">
			<div class="inner">
				<h3>Standards-compliant code</h3>
				<p>The Inland Wood template is written with standards-compliant HTML5 and CSS3.</p>
			</div>
		</div>

		<div id="trio2">
			<div class="inner">
				<h3>Slider included</h3>
				<p>The slider is made with a jQuery plugin called <a href="http://nivo.dev7studios.com">Nivo Slider</a>, created by Gilbert Pellegrom of dev7studios and released under the <a href="http://www.opensource.org/licenses/mit-license.php">MIT Licence</a>. The sample photos are taken by Thomas Wallström and released under a CC-BY license.</p>
			</div>
		</div>

		<div id="trio3">
			<div class="inner">
				<h3>Multiple layout options</h3>
				<p>Single-column, two columns with left or right sidebars, three columns - or a combination of any two layout options.</p>
			</div>
		</div> -->
	</div>

	<div id="footer" class="shadow">
		<p>&copy; 2014 James Tarleton | Design by <a href="http://andreasviklund.com/">andreasviklund.com</a><br />Generated by <a href="http://www.kazila.com" title="Kazila">kazila</a></p>
	</div>
</div>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
</body>
</html>
