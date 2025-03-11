<?php
setcookie("FULLNAME", "", time()-3600);
setcookie("USERNAME", "", time()-3600);

header("Location: ./login.php");

?>