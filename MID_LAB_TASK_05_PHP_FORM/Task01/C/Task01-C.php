<html>

<head>
    <title>Task 01</title>
</head>

<body>
    
    <form method="post">
		<fieldset>
			<legend>Name: </legend>
            <input type="text" name="name" value="<?php
    
    if(isset($_REQUEST['submit']))
    {
        $name = $_REQUEST['name'];
        if($name == ""){
            echo "Value is NULL!";
        }
        
        else{
            echo $name;
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