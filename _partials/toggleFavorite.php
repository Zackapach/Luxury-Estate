<?php 

session_start();
if (!empty($_SESSION['isLoggedIn'])){
    header("Location:/src/security/login.php");
}
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $id = $_GET['id'];

    var_dump($_SESSION['cards'][$id]);

    $cardsFavorite = $_SESSION['cards'][$id]['favorite'];

    $_SESSION['cards'][$id]['favorite'] = false ; 

if ($_SESSION['cards'][$id]['favorite'] === true ) {
    $_SESSION['cards'][$id]['favorite'] = false ; 
} else {
    $_SESSION['cards'][$id]['favorite'] = true ;
}
}

?>