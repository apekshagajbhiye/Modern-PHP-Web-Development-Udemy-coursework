    <?php 
        
        $title = "Function";
        include 'includes/header.php'; 
    ?>
    
    <h1> Functions </h1>

    <?php
        
        // defining a function

        function writeMessage(){
            echo "You are a really nice person, Have a nice time! <br/>";

        }
        // calling a function
         writeMessage();
         
         
    
         echo "<hr/>";
         writeMessage();


        //  functions with parameters

        function addFunction($num1, $num2){
            $sum = $num1 +  $num2;
            echo "the sum of $num1 and $num2 is : $sum <br/>";

        }
        // pass by reference - use ampersand in parameter
        function changeNum($num){
            $num = $num + 10;


        }
        
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }
        
            $num = 800;
            addFunction(40, 20);
            addFunction(40, $num);
            addFunction("10", "$num");
            changeNum($num);
            echo $num . '<br/>';
        
            
            $return_value = returnProduct(10, 200);
            echo $return_value . '<br/>'

        


    


        
 
    ?>
    
    <?php require 'includes/footer.php' ?>
