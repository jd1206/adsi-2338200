<?php
if($_SESSION['trole']!='Admin'){
    $_SESSION['error'] = "Permission denegated!";
    echo "<script> 
            window.location.replace('".$base_url."/index.php')
      </script>";
}