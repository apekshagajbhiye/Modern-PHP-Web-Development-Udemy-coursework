<?php
    $title = "ForLoop";
      
    include 'includes/header.php'; 
?>


<h1> For Loops </h1>


<?php
// <!-- for loop -->

for($count=0 ; $count<10; $count++){
    echo '<p style = "color: blue">HELLO WORLD</p>';

}

for($count=0 ; $count<10; $count++){


    echo "<p style = 'color: purple'>The count is: $count </p>";
    

}
?>

    
<?php require 'includes/footer.php' ?>
