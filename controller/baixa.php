<?php
require_once '../model/pdo-users.php';
require_once '../controller/session.php';
require_once '../view/baixa.view.php';

session_start();
$id = getSessionUserId();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $option = $_POST['baixa'];
    realizarMovimiento($option, $id);
}



function realizarMovimiento($opt, $id){
    if($opt == "SI"){
        eliminarUser($id);
        echo "usuari eliminat";
        session_abort();
    }else if($opt == "NO"){
        header('Location: index.php');
    }

}

