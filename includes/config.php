<?php

include(__DIR__."/../model/quantumzDb.php");
include(__DIR__."/../model/contactedByManager.php");



switch ($_SERVER["SCRIPT_NAME"]) {

    case "/quantumz/skills.php";
        $currentPage = "Skills";
        $pageTitle = "Mes Competences";
        break;

    case "/quantumz/portfolio.php";
        $currentPage = "Portfolio";
        $pageTitle = "Portfolio";
        break;

    case "/quantumz/contactUs.php";
        $currentPage = "Contact Us";
        $pageTitle = "Me Contacter";
        break;

    case "/quantumz/aboutMe.php";
        $currentPage = "aboutMe";
        $pageTitle = "A propos";
        break;


    default :
        $currentPage = "Index";
        $pageTitle = "Index";
}   