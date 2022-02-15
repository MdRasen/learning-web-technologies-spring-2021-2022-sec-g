<html>

<head>
    <title>Task 01</title>
</head>

<body>

    <?php

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

    else{
        echo "Invalid request!";
    }

    ?>
    
    <form method="post" action="Task01-B.php">
		<fieldset>
			<legend>Name: </legend>
            <input type="text" name="name" value=""><br/><hr>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>