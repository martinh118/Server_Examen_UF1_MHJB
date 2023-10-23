<?php

require_once '../model/pdo-articles.php';
require_once '../controller/session.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['postsPerPage'])){
        $post = 10;
    }else $post = $_POST['postsPerPage'];

    if(empty($_POST['orderBy'])){
        $order = "Date (desc)";
    }else  $order = $_POST['orderBy'];
   
    header("index.php?post=" . urlencode($post) . "&order=". urlencode($order));


}

//sustituir linea para tratar cookie.
$orderBy = 'date-desc';

$searchTerm = "";
if (isset($_GET['search'])) $searchTerm = $_GET['search'];

if(isset($_GET['post'])){
    $postsPerPage = $_GET['post'];
}else $postsPerPage = 10;

session_start();
$userId = getSessionUserId();

$nArticles = getCountOfPosts($userId, $searchTerm); 
$nPages = ceil($nArticles / $postsPerPage); 

if (isset($_GET['page'])) {
    $currentPage = $_GET['page'];
} else {
    $currentPage = 1;
}

if ($nArticles > 0 && ($currentPage > $nPages || $currentPage < 1)) {
    header("Location: index.php");
}

$ndxArticle = $postsPerPage * ($currentPage - 1);



$articles = getPosts($userId, $ndxArticle, $postsPerPage, $orderBy, $searchTerm); 

if ($currentPage <= 3) $backScope = $currentPage - 1;
else $backScope = 3;
if ($currentPage + 3 > $nPages) $frontScope = $nPages - $currentPage;
else $frontScope = 3;


$firstPage = $currentPage == 1;
$lastPage = $currentPage == $nPages;

$firstPageClass = $firstPage ? 'disabled' : '';
$lastPageClass = $lastPage ? 'disabled' : '';

$searchQuery = !empty($searchTerm) ? "?search=$searchTerm&" : "?";
$nextPageLink = $lastPage ? "#" : $searchQuery . "page=" . ($currentPage + 1);
$previousPageLink = $firstPage ? "#" : $searchQuery . "page=" . ($currentPage - 1);
$firstPageLink = $firstPage ? "#" : $searchQuery . "page=1";
$lastPageLink = $lastPage ? "#" : $searchQuery . "page=$nPages";

require_once '../view/index.view.php';


