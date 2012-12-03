<?php
if(isset($_POST['submit'])) {
	$integer =trim( $_REQUEST["integer"]);
	$integer = trim( $_POST["integer"]);
	//check if it's a positive number
	if ($integer<="0" || $integer=="") {
		$val = "<p>ERROR:</p>";
		$val .= "Enter a positive value!";
		$val .= "Enter a positive numeric value!";
	}
	else {
		$val = "<p>RESULTS:</p>";
		$val .= $integer;	
		for($i = 1; $i < 10; $i++) {
			$val .= $integer + $i." ";
		}
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
Enter a number: <input name="integer" type="text" value="" size="5" /> <input name="submit" type="submit" />
Enter a number: <input name="integer" type="text" \size="5" /> <input name="submit" type="submit" />
</form>
<?php
	if(isset($_POST['submit'])) {
	if(isset($_POST['integer'])) {
		echo $val;
	}
?>
</body>
</html>