<!doctype html>

<html>
	<head>
<!--
	    exercise 02_03_01
	   Author: Nathan Howard
	   Date: 9.19.18
	   filename: PHPEmail.php
-->
		<title>PHP Email</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>PHP Email</h2>
        <?php
            $emailAdresses = array("john.smith@php.test" , 
                                  "mary.smith.mail@php.sample" ,
                                  "john.jones@php.invalid" ,
                                  "alan.smithy@test" ,
                                  "jsmith456@example.com" ,
                                  "jsmith456@test" ,
                                  "mjones@example" ,
                                  "mjones@example.net" ,
                                  "jane.a.doe@example.org");
            function validateAdress($address) {
                if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
                    return true;
                } else {
                    return false;
                };
            };
            foreach ($emailAdresses as $thisAddress) {
                if (validateAdress($thisAddress) === false) {
                    echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
                } else {
                    echo "<p>The e-mail address <em>$thisAddress</em> does appear to be valid.</p>";
                }
            };
       ?>
	</body>
</html>