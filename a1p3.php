<?php
// Divya Gupta 8622600
function differntWords($string)
{
	
   $string = str_replace(' ', '<br>', $string);
    echo trim($string," ");
	for($i = 0; $i < strlen($string); $i++) 
	{ 
		for($j = $i + 1; $j < strlen($string); $j++) 
		{ 
			if($string[$i] == $string[$j]) 
			{ 
				return true; 
			} 
		} 
	} 
	
	return false; 
} 


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['firstname'])){
            
            $checkWords = differntWords($_POST['firstname']); // To check the charcters whether these are duplicate or not
            
            if($checkWords == true)
            {
                echo '<p>These charcters are duplicate</p>'; // These are duplicate 
            }
            else
            {
                echo '<p>Characters are not duplicate</p>'; // These are not duplicate
            }
           
        }
     else
     {
            echo '<p>Please enter characters </p>'; // Enteries are empty
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

    
    
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>