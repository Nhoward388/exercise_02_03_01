<!doctype html>

<html>
	<head>
<!--
	    exercise 02_03_01
	   Author: Nathan Howard
	   Date: 9.19.18
	   filename: Presidents2.php
-->
		<title>Presidents</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Presidents2</h2>
        <?php
            $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
            $thisPresident = strtok($presidents, ";");
            while ($thisPresident != NULL) {
                echo "$thisPresident<br>";
                $thisPresident = strtok(";");
            }
       ?>
	</body>
</html>