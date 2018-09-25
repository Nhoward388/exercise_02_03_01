<!doctype html>

<html>
	<head>
<!--
	    exercise 02_03_01
	   Author: Nathan Howard
	   Date: 9.19.18
	   filename: PasswordFields2.php
-->
		<title>Password Fields 2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Password Fields 2</h2>
        <?php
            $record = "jdoe:8w4dso3a39yk2:1463:24:John Doe:/home/jdoe:/bin/bash:extra 1:extra 2";
            $passwordFields = array("login name", "option encrypted password" , "numerical user ID" , "numerical group ID" , "user name" , "user home directoy" , "optional user command interpreter");
            $fieldIndex = 0;
            $extraFields = 0;
            $fields = explode(":", $record);
            foreach ($fields as $fieldIndex => $fieldValue) {
                if ($fieldIndex < count($passwordFields)) {
                    echo "<p>The {$passwordFields[$fieldIndex]} is <em>$fieldValue</em></p>\n";
                } else {
                    ++$extraFields;
                    echo "<p>Extra field # $extraFields is <em>$fieldValue</em></p>\n";
                }
            }
        ?>
	</body>
</html>