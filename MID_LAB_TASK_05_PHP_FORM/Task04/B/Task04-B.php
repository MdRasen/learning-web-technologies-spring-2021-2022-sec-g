<html>

<head>
    <title>Task 01</title>
</head>

<body>

    <?php

    if(isset($_REQUEST['submit']))
    {
        $gender = $_REQUEST['gender'];
        if($gender == ""){
            echo "Value is NULL!";
        }
        
        else{
            echo $gender;
        }	
    }

    else{
        echo "Invalid request...";
    }

    ?>
    
    <form method="post" action="Task04-B.php">
    <fieldset>
			<legend>Gender: </legend>
            <input type="radio" name="gender" value= "Male">Male
            <input type="radio" name="gender" value= "Female">Female
            <input type="radio" name="gender" value= "Other">Other<br/><hr>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>