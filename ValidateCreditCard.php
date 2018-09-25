<!doctype html>

<html>
	<head>
<!--
        Project_02_03_01
        Author: Nathan Howard
        Date: 09.24.19
        Filename: ValidateCreditCard.php
-->
		<title>Validate Credit Card</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>Validate Credit Card</h2>
        <?php
//            array with the credit cards
            $creditCard = array("" ,
                               "8910-1234-5678-6543" ,
                               "0000-9123-4567-0123");
//            for each loop to process through the array
            foreach ($creditCard as $indexNumber => $cardNumber) {
//                figures out if credit cardn number is empty or not
                if (empty($cardNumber)) {
                    echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string.</p>";
                } else {
                    $creditCardNumber = $cardNumber;
                    $creditCardNumber = str_replace("-","", $creditCardNumber);
                    $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                    echo "<p>Credit Card Number $indexNumber $cardNumber removed dashes and spaces.</p>";
//                    nested if else to test if the number is numeric
                    if (!is_numeric($creditCardNumber)) {
                        echo "<p>Credit Card Number " , $indexNumber , " " , $creditCardNumber , " is invalid because it contains a non-numeric character";
                    }
                    else {
                        echo "<p>Credit Card Number " , $indexNumber , " " , $creditCardNumber , " is a valid credit card number";
                    }
                }
            }
            
        ?>
	</body>
</html>