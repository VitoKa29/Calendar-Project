<?php
error_reporting(0);

    $page = $_GET['page'];
	
    if (isset($page)) {
        switch($page){
            
            case "add_task" :
                include "add_task.php";
            break;

            case "detail" :
                include "detail.php";
            break;
            
        }
    }
    else {
        include "main_content.php";
    }	
		
		
?>