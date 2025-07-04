<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';


// View without Login
switch($page){
    case "home":
        include 'views/home.php';
        break;
        case "new":
            include 'views/new.php';
            break;
        case "list":
            include 'views/list_eo.php';
            break;
        case "rpt_solusi":
            include 'views/rpt_solusi.php';
            break;
       case "divisi":
            include 'views/divisi/divisi.php';
            break;
        case "send_email":
                include 'views/divisi/send_email.php';
                break;
        case "jenis_eo":
            include 'views/jenis_eo/jenis_eo.php';
            break;
            case "edit_eo":
                include 'views/edit_eo.php';
                break;
            case "list_posting":
                    include 'views/list_posting.php';
                    break;
    default:
    include 'views/home.php';
    break;
}