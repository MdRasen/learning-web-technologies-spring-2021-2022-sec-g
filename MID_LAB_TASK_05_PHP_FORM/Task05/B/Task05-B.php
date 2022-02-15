<html>

<head>
    <title>Task 01</title>
</head>

<body>

    <?php

    if(isset($_REQUEST['submit']))
    {
        $dob = $_REQUEST['dob'];
        if($dob == ""){
            echo "Value is NULL!";
        }
        
        else{
            echo $dob;
        }	
    }

    else{
        echo "Invalid request...";
    }

    ?>
    
    <form method="post" action="Task03-B.php">
        <fieldset>
			<legend>Date Of Birth: </legend>
            <input type="date" name="dob" value=""><br/><hr>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>