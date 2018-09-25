<!doctype html>

<html>
	<head>
<!--
        Project_02_03_01
        Author: Nathan Howard
        Date: 09.24.19
        Filename: ValidateLocalAddress.php
-->
		<title>Compare Strings</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Validate Local Address</h2>
        <?php
//            global array holding all the emails
            $email = array("jsmith123@example.org" , 
                          "john.smith.mail@example.org" ,
                           "john.smith@example.org" ,
                          "john.smith@example" , 
                          "jsmith123@mail.example.org");
//            foreach to process through the email array
            foreach ($email as $emailAddress) {
                echo "The email address &ldquo; " . $emailAddress . "&rdquo;";
//                if statements containing a regex pattern to match the email to
                if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z] + \.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i" , $emailAddress) === 1) {
                    echo " is a valid e-mail address.<br>";
                } else {
                    echo " is not a valid email address.<br>";
                }
            }
        ?>
	</body>
</html>