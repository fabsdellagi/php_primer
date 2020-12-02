<?php 
        $title = 'While Loop';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
        $grade = 0;
        //Pre-Condition Loop
        while($grade < 10){
            echo "<p>I AM LESS THAN 10</p>";
            $grade++;
        }
        echo 'EXIT THE LOOP';
    ?>  


    <h1>Do While Loop</h1>
    <?php
        //Post-Condition Loop 
        do{
            echo "<p>I AM DO WHILE LOOP</p>";
            $grade++;
        }while($grade < 10);
    ?>
    
<?php require 'includes/footer.php' ?>