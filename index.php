<?php
if(isset($_GET['downloadmodule'])){
    header("Content-Disposition: attachment; filename=".$_GET["downloadmodule_name"]);
    echo file_get_contents($_GET['downloadmodule']);
}
?>