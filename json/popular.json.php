<?php
	include_once '../functions/class.content.php';
	include_once '../functions/class.video.php';
	include_once '../functions/class.user.php';
	include_once '../functions/interface.php';
	//The front page design requires only 4 videos in popular category. If needed less/more, the get variable should be set.
	if(!isset($_GET['count']))
		$_GET['count']=8;
	echo getPopularVideoJson($_GET['count']);
	
?>
