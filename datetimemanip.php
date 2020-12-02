<?php 
        $title = 'Date and Time Manipulation';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
    // variable declaration
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'].'<br/>';
        echo $datenow['mon'].'<br/>';
        echo $datenow['year'].'<br/>';
        echo "Today's Date is: ".$datenow['mday']."/".$datenow['mon']."/".$datenow['year'].'<br/>';
        echo time() .'<br/>';

        print date("d/m/y G.i:s<br>", time()) .'<br/>';
        print "Today is: ";
        print date("j \of F Y, \a\\t h:i:s A", time());

    // For more information on date() see https://www.w3schools.com/php/func_date_date.asp

    ?>  

<?php require 'includes/footer.php' ?>