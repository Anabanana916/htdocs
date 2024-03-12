<?php
    //Connect to server and select database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "anawk5";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo"Connected Successfully";
    
    $sql = "SELECT * from test where name = '$_GET[id]'";
    //Execute query
    $row = mysql_fetch_assoc($result);
?>
<html>
    <body>
        <form action = "" method = 'post'>
            Name:
            <input type = text name = txtname value = "<? echo $row[name] ?>" readonly/>
            </br>
            Phone number :
	        <input type=text name=txttelno value="<? echo $row[phone_number] ?>" />
	        </br>
	        Email :
	        <input type=text name=txtemail value="<? echo $row[email] ?>" />
	        </br>
	        <input type=submit name=btnsubmit value="save"/>
        </form>
    </body>