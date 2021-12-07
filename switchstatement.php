<?php 
    $title = "Switch Statement";
    include 'includes/header.php';
    
?>

<h1> Switch Statements </h1>
<?php
    $grade = 'A';

    switch($grade){
        case 'A':
            echo '<h2 style="color:  blue"> YOU ARE SUPERSTAR</h2>';
            break;
        case 'B':
           echo '<h2  style="color: pink">YOU DID WELL</h2>';
           break;
        default:
           echo '<h2  style="color: black">YOU HAVE FAILED....</h2>';
           break;
    }
?>
    
    <?php require 'includes/footer.php' ?>
