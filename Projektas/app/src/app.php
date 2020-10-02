<?php 
if(isset($_POST['submit'])){
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            include('db.php');
        //REMOVING RESUBMITTION
        setcookie("form_submitted", "submitted", time() + (86400 * 30), "/");
        header("Location: index.php?gerai");
        }
    
    }
}
?>