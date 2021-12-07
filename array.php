    <?php 
         $title = "Array";
         
        include 'includes/header.php'; 
    ?>
    
    <h1>Arrays</h1>
    <?php
        // a variable
        $num = 3;

        // an  array
        // only  one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,12.45,78,789,1225,52,36,36,32,65);
        // you can access the value in a subscript of the array using the index 

        echo $numbers[5];

        echo "<p> $numbers[9]</p>";

        

        $size = count($numbers);

        echo "<p>  Array Numbers is size : $size </p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</P>";

        }




    
    ?>
    
    <?php require 'includes/footer.php' ?>
