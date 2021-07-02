<?php
session_start();
?>

<!DOCTYPE html>
<html>
<div >  
<?php
require("header.html")
?>
</div>

<div class="nested">
<?php

// Include all Project data here 

echo "";
echo '<h1 align = "center">'.'LET"s SEE WHAT YOU WANT '." ".$_SESSION["username"].'!'.'</h1>';
echo "<div class = 'main'>";
include('show.php');
echo "</div>";
echo "<div class = 'main'>";
include('date.php');
echo "</div>";

?>
</div>
</html>