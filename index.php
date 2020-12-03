    <?php 
        $title = 'Index';
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>

    <?php
        //Printing to HTML using echo
        echo 'Hello PHP'; 
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

        // declare variable
        $name = 'Fabio Dellagiacoma';
        $age = 63;

        echo $name;
        // Use .$name. with single quote ''
        echo '<h1>My name is: '.$name.' </h1>';
        echo '<h1>My age is: '.$age.' </h1>';

        // Use $name with double quote ""
        echo "<h1>My name is: $name </h1>";
    ?>
    <br/>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>
    <br/>
    <br/>

    <?php
        require 'includes/footer.php' 
    ?>
    