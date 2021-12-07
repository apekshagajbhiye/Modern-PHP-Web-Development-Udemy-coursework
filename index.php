    <?php
         $title = "index";
         include 'includes/header.php'; 
    ?>
    <!-- Basic Html -->
    <h1> Hello World - PHP PRIMER</h1>
    </br>


    <!-- printing to html using echo-->
    <?php
        echo 'HELLO PHP!';
        echo '</br>';
        echo 'second line';
        echo '</br>';


    ?>

    <?php
        // declare variable
        $name = 'Apeksha Gajbhiye';
        $age = '25';
        // echo variable
        echo $name;
        echo '<h1> My Name Is: '.$name.'</h1>';
        echo '<h1> My Age Is: '.$age.'</h1>';
        // we can write in this way also
        echo "<h1> My Name Is: $name </h1>"

    ?>
    <?php require 'includes/footer.php' ?>
        
   
