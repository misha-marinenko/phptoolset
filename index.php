<?php


if(isset($_GET['downloadmodule'])){
    header("Content-Disposition: attachment; filename=".$_GET["downloadmodule_name"]);
    echo file_get_contents($_GET['downloadmodule']);

    
}
if(isset($_GET)){
    exit;
}else{}

?>
<!DOCTYPE html>
<html>
    <body>
        <p><p>downloadmodule</p><form method="GET" action="/">
            URL:<input type="text" name="downloadmodule"/>
            NAME:<input type="text" name="downloadmodule_name"/>
            <input type="submit" value="Submit"/>
        </form></p>
    </body>
</html>