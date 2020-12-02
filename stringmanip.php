<?php 
        $title = 'String Manipulation';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
    // variable declaration
        $phrase1 = "Student who came late";
        $phrase2 = "in class, stand with Rock";
        $i = 0;
        $name = "fabio dellagiacoma";
    // String Concatenation  
       echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br/>'; 
        echo '<hr/>';   
    // String Transformation
        echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name) . '<br/>';
        echo 'Upper case: ' . strtoupper($name) . '<br/>';
        echo 'Lower case: ' . strtolower("THIS WAS ALL UPPERCASE") . '<br/>';
        echo '<hr/>'; 
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat($name,3)) . '<br/>';
        echo 'Get a substring: ' . substr($name,5,17) . '<br/>';
        echo 'Get position of string:' .strpos($name,'g').'<br/>';
        echo 'Find length of string:' .strlen($name).'<br/>';

        echo 'Without trim: ' ."A"." B C D "."E".'<br/>';
        echo 'trim spaces on both sides: ' ."A".trim(" B C D ")."E".'<br/>';
        echo 'trim spaces to the left: ' ."A".ltrim(" B C D ")."E".'<br/>';
        echo 'trim spaces to the right: ' ."A".rtrim(" B C D ")."E".'<br/>';

        echo 'Replace String with another: ' .str_replace("stand","sit",$phrase2). '<br/>';
    ?>   

<?php require 'includes/footer.php' ?>