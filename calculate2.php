<?php
$val1 = $_REQUEST["value1"];
$val2 = $_REQUEST["value2"];
if (($val1 == "") || ($val2 == "")) header("Location:simplestcalculator2.html"); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Calculator</title>
</head>

<body>
<?php
if (isset($_REQUEST['op1'])) $result1 = "$val1 + $val2";
if (isset($_REQUEST['op2'])) $result2 = "$val1 - $val2";
if (isset($_REQUEST['op3'])) $result3 = "$val1 * $val2";
if (isset($_REQUEST['op4'])) $result4 = "$val1 / $val2";

 for ($i=1; $i<5; $i++) {
	$result = '$result' . $i;
	eval("\$expr = $result;");
	if ($expr != "") {
		eval("\$value = $expr;");
	    echo $expr . '=' . $value . "<br/><br/>";
    }
}
?>

</body>
</html>