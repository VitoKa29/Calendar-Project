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

            case "detail_task_view" :
                include "detail_task_view.php";
            break;


            case "task_view" :
                include "task_view.php";
            break;

            case "profile" :
                include "profile.php";
            break;

            
            
        }
    }
    else {
        include "main_content.php";
    }	
		
		
?>