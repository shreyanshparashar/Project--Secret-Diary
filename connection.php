<?php

    $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "username", "password", "username");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>
