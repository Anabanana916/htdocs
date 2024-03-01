<html>
    <head><title>Select colour page</title></head>
    <?php session_start(); ?>
    <body>
            <form action="selectcolour.php"  method="post">
	            Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	            <?php
                    $_SESSION["qty"] = (float)$_POST["selqty"];
                    ?>
                <select name="selsize">
   	                    <option>Small</option>
	                    <option>Medium</option>
	                    <option>Large</option>
	                    <option>Extra large</option>
                    </select>
                <br/><br/>

                
                <?php
                    switch ("selsize") {
                        case "selsize"=="Small":
                            echo "Price = 15.75";
                            "selsize"=="15.75";
                            break;
                        case "selsize"=="Medium":
                            echo "Price = 16.75";
                            "selsize"=="16.75";
                            break;
                        case "selsize"=="Large":
                            echo "Price = 17.75";
                            "selsize"=="17.75";
                            break;
                        case "selsize"=="Extra Large":
                            echo "Price = 18.75";
                            "selsize"=="18.75";
                            break;
                        }
                ?>
                <input type="submit" value="Buy"/>
                    
            </form>

    </body>

</html>	