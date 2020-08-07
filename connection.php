<?php

    $link = mysqli_connect("shareddb-o.hosting.stackcp.net", "secretdi-3130393345", "Secret@di", "secretdi-3130393345");
        
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>