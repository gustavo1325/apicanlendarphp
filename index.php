<?php 
// Include configuration file 
include_once 'config.php'; 
 /*
$postData = ''; 
if(!empty($_SESSION['postData'])){ 
    $postData = $_SESSION['postData']; 
    unset($_SESSION['postData']); 
} 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
    $status_response = $_SESSION['status_response']; 
    $status = $status_response['status']; 
    $statusMsg = $status_response['status_msg']; 
} */
header("Location: $googleOauthURL"); 
            exit(); 
            header("Location: index.php"); 
exit(); 
?>
