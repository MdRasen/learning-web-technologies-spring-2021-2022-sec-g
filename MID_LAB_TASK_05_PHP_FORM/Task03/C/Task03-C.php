<html>

<head>
    <title>Task 01</title>
</head>

<body>
    
    <form method="post">
		<fieldset>
			<legend>Date Of Birth: </legend>
            <input type="date" name="dob" value="<?php
    
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

    //else{
        //echo "Invalid request!";
    //}

    ?>"><br/><hr>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>