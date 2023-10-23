<?php 
include_once("../view/users.view.php");
require_once '../model/pdo-users.php';
session_start();
$userId = getSessionUserId();

function llistarUsuaris(){

    $text = "<table><tr>
    <th>ID</th> <th>nickname</th> <th>email</th> </tr>";
    $users = getAllUsers();
    foreach($users as $user){
        $text .= "<tr><td>" . $user['id'] . "</td><td>" . $user['nickname'] . "</td><td>" . $user['email'] . "</td></tr>";
    }

    $text .= "</table>";
    echo $text;
}


require_once '../view/users.view.php';
?>