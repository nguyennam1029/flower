<?php 
    switch ($_GET['go']) {
        case 'home':
            include ('homePage.php');
            break;
        case 'contact':
            include ('contactPage.php');
            break;
        case 'products':
            include ('productsPage.php');
            break;
        default:
        include ('homePage.php');

            break;
    }
