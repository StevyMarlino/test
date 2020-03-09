<!DOCTYPE html>
<html>
<head>
	<title>le super blog de ça...</title>
</head>
<body>
	<!-- je ne refuse pas que je la consome... mais je la consomme -->
	<?php
		$page = $_GET["page"];
		if(enpty($page)){
			include(".../views/home.php");
			}
			elseif($page = "blog"){
				include(".../views/blog.php");
			}
	 ?>
</body>
</html>