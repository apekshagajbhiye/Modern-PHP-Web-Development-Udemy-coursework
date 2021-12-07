    <?php 
        $title = "String Manipulation";
        include 'includes/header.php'; 
    ?>
    
    <h1> PHP String Manipulation</h1>
    <?php
        // concatenation of string
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "apeksha gajbhiye";
        echo $phrase1 . ", named apeksha, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';


        // string transformation
        echo 'Uppercase first letter : ' . ucfirst($name) .'<br/>';
        echo 'Uppercase first letter of each word : ' . ucwords($name) .'<br/>';
        echo 'Upper case: ' .strtoupper($name) . '<br/>';
        echo 'Upper case: ' .strtolower('THIS WAS ALL UPPER CASE') . '<br/>';
        echo '<hr/>';
        echo 'Repeat string: ' .str_repeat('a',10). '<br/>';
        echo 'Repeat string: ' .strtoupper(str_repeat('a',10)). '<br/>';

        echo 'Getting a substring: ' .substr($name, 5, 10) . '<br/>';
        echo 'Get position of string: ' .strpos($name, 'g') . '<br/>';
        // Returns Null
        // echo 'Get position of string: ' .strpos($combine, 'z') . '<br/>'
        echo 'Find Charcter "J" : ' .strchr($name, 'J') . '<br/>';
        echo 'Find Charcter "j" : ' .strchr($name, 'j') . '<br/>';
        echo 'Find Charcter "P" : ' .strchr($name, 'P') . '<br/>';
        echo 'Find Charcter "p" : ' .strchr($name, 'p') . '<br/>';
        echo 'Find length of string : ' .strlen($name) . '<br/>';

        echo 'without trim : '. "A" .  " B C D "  . "E"  . '<br/>';
        echo 'trim spaces on both sides : '. "A" . trim(" B C D ")  . "E"  . '<br/>';
        echo 'trim spaces to left sides : '. "A" . ltrim(" B C D ")  . "E"  . '<br/>';
        echo 'trim spaces to right sides : '. "A" . rtrim(" B C D ")  . "E"  . '<br/>';
        echo 'replace string with another : ' .str_replace("stand", "sit", $phrase2) . '<br/>';






        





        







    ?>
    
    <?php require 'includes/footer.php' ?>
