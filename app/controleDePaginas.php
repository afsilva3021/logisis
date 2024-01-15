<?php 
    switch(@$_REQUEST["pages"]){
        case 'cadastro':
            include("./conferencia.php");
            break;
        default:
            include('./dashboard.php');
            break;
    }