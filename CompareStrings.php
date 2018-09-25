<!doctype html>

<html>
	<head>
<!--
        Project_02_03_01
        Author: Nathan Howard
        Date: 09.24.19
        Filename: CompareStrings.php
-->
		<title>Compare Strings</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Compare Strings</h2>
        <?php
            $firstString = "Geek2Geek";
            $secondString = "Geezer2Geek";
//            if statement to find out if variables are empty
            if (!empty($firstString) && !empty($secondString)) {
//                decides if both strings are the same
                if ($firstString === $secondString) {
                    echo "<p>Both strings are the same.</p>";
                } else {
//                    uses functions to test the how much characters they have in common and how many they don't
                  echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.</p>";
                  echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the string the same.</p>";
                };
            } else {
                echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared</p>";
            }
        ?>
	</body>
</html>