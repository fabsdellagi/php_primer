<?php 
        $title = 'Array and Printouts';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
    // variable declaration
        $num = 3;
        $i = 0;
    // array declaration with homogeneous data type
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        $size = count($numbers);
        echo("<p>Array size: $size</p>");
        for ($i=0; $i < $size; $i++) {
            echo("<p>$numbers[$i] </p>");
        }      
    //    print_r(array_values($numbers));
    ?>  

<?php require 'includes/footer.php' ?>