<!- Use of text box in php ->

<html>
    <body>
        <form action="" method="post">
            Name - <input type=text name="t1">            <BR>
            <input type=submit name="s">


            <?php
	if(isset($_POST['s']))
	{
   	$name=$_POST['t1']; 			// accessing value from the text field
    	echo "Input Name=".$name; 	// displaying result
	}
            ?>

        </form>
    </body>
</html>