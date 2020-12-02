<?php 
        $title = 'PHP Functions';
        include 'includes/header.php' 
?>
    <h1><?php echo $title ?></h1>
    <?php
    // Defining a function
        function writeMessage(){
            echo "You are a really nice person, have a good time<br/>";
        }
        
    // Calling a function
        writeMessage();
        echo("<hr/>");
        writeMessage();

    // Defining a function with parameters
        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum<br/>";
            return $sum;
        }

        function changeNum(&$num){
            $num = $num + 10;
        }

        function returnProduct($num1,$num2){
            $prod = $num1 * $num2;
            return $prod;

        }

        $a = 1;
        $b = 2;
        $c = addFunction($a,$b);
        echo "The sum is = $c<br/>";

        $num = 500;
        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10,200);
        echo "Product is: $return_value<br/>";
    ?>  

    
<?php require 'includes/footer.php' ?>