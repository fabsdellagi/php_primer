<?php 
        $title = 'If Statement';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php

    // Id statement that will carry out an action based on the value of a variable
        echo '<h2>If statement</h2>';

        $grade = 50;
    // ==, ===, <=, >=, <, >
        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }
    // If-Else If-Else
        $grade = 'A';
        if($grade == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU DID NOT PASS</h2>';
        }
    ?>
    
<?php require 'includes/footer.php' ?>