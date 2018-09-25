<!doctype html>

<html>
	<head>
<!--
	    exercise 02_03_01
	   Author: Nathan Howard
	   Date: 9.19.18
	   filename: PHPEmail2.php
-->
		<title>PHP Email 2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
		<script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h2>PHP Email 2</h2>
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
            function sortAddresses($addresses) {
                $sortedAddresses = array();
                $ilimit = count($addresses) - 1;
                $jlimit = count($addresses);
                for ($i = 0; $i < $ilimit; $i++) {
                    $currentAddress = $addresses[$i];
                    for ($j = $i + 1; $j < $jlimit; $j++) {
                        if (strcasecmp($currentAddress, $addresses[$j])) {
                            $tempVal = $addresses[$j];
                            $addresses[$j] = $currentAddress;
                            $currentAddress = $tempVal;
                        }
                    }
                    $sortedAddresses[] = $currentAddress;
                }
                return($sortedAddresses);
            };
            $sortedAddresses = sortAddresses($emailAdresses);
            $sortedAddressList = implode(", " , $sortedAddresses);
            echo "<p>Sorted Addresses: $sortedAddressList</p>\n";
            foreach ($sortedAddresses as $thisAddress) {
                if (validateAdress($thisAddress) === false) {
                    echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
                }
            };
       ?>
	</body>
</html>