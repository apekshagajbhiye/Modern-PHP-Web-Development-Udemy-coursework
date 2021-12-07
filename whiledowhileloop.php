    <?php 
        $title = "WhileDoWhileLoop";
        include 'includes/header.php'; 
    ?>

    <h1> While Loop</h1>
    <?php
        $grade = 0;
        //  Infinte Loop
        // while($grade < 10){
        //     echo '<p> I Am Less Than 10!</P>';
        // }
        
        // Pre-Condition Loop
        while($grade < 10){
            echo  '<p> I Am Less Than 10!</P>';
            $grade++;
        }

        echo 'EXIT LOOP !';



    ?>
    <h1> Do-While loop</h1>
    <?php
    // Post-Condition Loop
        $grade = 0;
        do{
            echo '<p> I AM DO WHILE LOOP</p>';
            $grade++;

        }while($grade < 10);

        echo 'EXIT LOOP !';
    ?>
    <?php require 'includes/footer.php' ?>
