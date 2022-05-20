<?php
if(isset($_POST['log_out']))
{ 
    session_destroy();
    header('Location:../../Main/index.php');
    
}
?>