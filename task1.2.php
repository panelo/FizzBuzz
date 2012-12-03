<?php
if(isset($_POST['submit'])) {
	$integer = trim($_POST["integer"]);
	//check if it's a positive number
	if ($integer<="0" || $integer=="") {
		$val = "<p>ERROR:</p>";
		$val .= "Enter a positive numeric value!";
	}
	//create series of numbers and check if divisible by 3 and 5
	else {
		$val = "<p>RESULTS:</p>";
		for($i = 1; $i < 30; $i++) {
			$init = $integer + $i;
			if ($init % 3 == 0) {
				$series .= "Fizz ";
				$fizz = "1";
			}
			elseif ($init % 5 == 0) {
				$series .= "Buzz ";
				$buzz = "2";
			}
			elseif ($fizz=="1" && $buzz=="2") {
				$series .= "Bazz ";
				$fizz = "0";
				$buzz = "0";
			}
			else {
				$series .= $integer + $i." ";
			}
		}
		$val .= "for f[".$integer."..".$init."], the output is ".$series."";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fizz/Buzz</title>
</head>

<body>
<form method="post" name="fizzbuzz">
<p>Write a script that accepts a positive integer range and, for each increment in the range, prints:</p>
<ul>
  <li>"Fizz" if a multiple of 3
  </li>
  <li>"Buzz" if a multiple of 5</li>
  <li>The integer itself otherwise.  </li>
</ul>
Enter a number: <input name="integer" type="text" size="5" /> <input name="submit" type="submit" />
</form>
<?php
	if(isset($_POST['integer'])) {
		echo $val;
	}
?>
</body>
</html>