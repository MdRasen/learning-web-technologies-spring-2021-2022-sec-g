<html>

<head>
    <title>Task 01</title>
</head>

<body>
    
    <form method="post">
		<fieldset>
			<legend>Email: </legend>
            <input type="text" name="email" value="<?php
    
    if(isset($_REQUEST['submit']))
    {
        $email = $_REQUEST['email'];
        if($email == ""){
            echo "Value is NULL!";
        }
        
        else{
            echo $email;
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