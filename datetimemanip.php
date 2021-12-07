    <?php
         $title = "Date And Time manipulation";
        
         include 'includes/header.php';
     ?>
    
    <h1> Date And Time Manipulation</h1>
    <?php
    $datenow = getdate();
    echo "today's date : <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . '<br/>';
    echo $datenow['year'] . '<br/>';


    
    
    echo "Today's Date: " . $datenow['mday'] . '-' . $datenow['mon'] . '-' . $datenow['year'] . '<br/>';

    echo time() . '<br/>';

    print date("m/d/y G.I:s<br>", time()) . '<br/>' ;
    print "Today's is " ;
    print date ("j of F Y, \a\\t g.i a", time());







    ?>

<?php require 'includes/footer.php' ?>
