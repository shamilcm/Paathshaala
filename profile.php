<!DOCTYPE HTML>
<html>
<head>
<title>Paathshaala Profile</title>

<?php

	include 'source.php';
	echo $header;
?>
<link rel='stylesheet' href='css/profile.css'>
</head>
<body>
<div id='topbar'></div>
<div id='feedback'></div>
<img src="pics/load.gif" id='loading'/ style='display:none;'>


<div id='container'>
<?php echo $topNotLoggedIn; ?>



</div><!-- /container -->

<?php echo $bottomBar; ?>
<div id="bottombar"></div>
<script src='js/ui.js' type='text/javascript' ></script>
</body>
</html>
