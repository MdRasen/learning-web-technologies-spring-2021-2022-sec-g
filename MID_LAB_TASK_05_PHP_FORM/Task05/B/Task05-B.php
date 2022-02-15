<html>

<head>
    <title>Task 01</title>
</head>

<body>

    <?php

    if(isset($_REQUEST['submit']))
    {
        $degree = $_REQUEST['degree'];
        if($degree == ""){
            echo "Value is NULL!";
        }
        
        else{
            echo $degree;
        }	
    }

    else{
        echo "Invalid request!";
    }

    ?>
    
    <form method="post" action="Task05-B.php">
        <fieldset>
            <legend>Degree: </legend>
            <input type="checkbox" name="degree" value="SSC"> SSC
            <input type="checkbox" name="degree" value="HSC"> HSC
            <input type="checkbox" name="degree" value="BSc"> BSc
            <input type="checkbox" name="degree" value="MSc"> MSc <br> <hr>
            <input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>

</html>