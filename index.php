
<?php

if(!isset($_GET)){echo file_get_contents("toolset.html"); exit;}

if(isset($_GET['downloadmodule'])){
    header("Content-Disposition: attachment; filename=".$_GET["downloadmodule_name"]);
    echo file_get_contents($_GET['downloadmodule']);

    
}


?>