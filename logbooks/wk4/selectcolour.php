<html>
    <head><title>Select colour page</title></head>
    <?php session_start(); ?>
    <body>
            <form action="confirmation.php"  method="post">
	            Select the colour for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	            <?php $_SESSION['qty'] = $_POST["selqty"]; ?>
                <select name="selcolour">
   	                    <option>white</option>
	                    <option>red</option>
	                    <option>yellow</option>
	                    <option>green</option>
	                    <option>blue</option>
                    </select>
                <br/><br/>

                    <input type="submit" value="Buy"/>
                    
            </form>

    </body>

</html>	
