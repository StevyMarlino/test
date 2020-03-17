<?php

$page=$_get['page']?? null;
    if(is_null($page)){
        include "../app/models/user.php";
        
        include "../app/controllers/index.php";
        
        include "../app/views/index.php";
    }elseif($page="inscript"){
        include "/app/views/inscript.php";
    }else{
        include "app/views/error.php
    };

?>