
<?php
include ('con.php');


$q  = "select * from Person";
$r = mysql_query ($q) or die(mysql_error()); 

while ( $row  = mysql_fetch_array($r)) {
    
    echo $row ['Address'];
    
    
    
    
    
}

mysql_close();

?>















