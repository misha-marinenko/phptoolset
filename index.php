<?php
if(isset($_GET['downloadmodule'])){
    echo file_get_contents($_GET['downloadmodule']);
}
?>