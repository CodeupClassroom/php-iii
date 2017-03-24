<!-- http://codeup.dev/php_lec/PHP_III/alt_syntax_lec.php -->
<?php 

    $movies = ["Sleepy Hollow", "The Conjuring", "The Shining", "A Nightmare on Elm Street", "Something Wicked This Way Comes", "It Follows"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Alternative Syntax</title>
</head>
<body>

    <h1>Scary Movies!</h1>

    <!-- Template Tags -->

    <h3><?php echo $movies[1] ?></h3> <!-- normal syntax  -->
    <h3><?= $movies[1] ?></h3> <!-- template tag-->

    <?php if (count($movies) > 3) { $longList = true; } ?><!-- normal syntax -->
    <!-- using a template tag with control structures inside will result in an error -->



    <!-- Alternative Syntax -->

    <h4>Top Movies...</h4> <!-- normal -->
    <ol>
        <?php foreach($movies as $movie) { ?>

            <li><?php echo $movie ?></li>

        <?php } ?>

    </ol>


    <h4>Top Movies...</h4> <!-- alternative -->
    <ol>

        <?php foreach($movies as $movie) : ?>

            <li><?= $movie ?></li>

        <?php endforeach ?>

    </ol>


    <h4>Underrated...</h4> <!-- normal -->
    <ul>

        <?php if (($movies[4]) == "Something Wicked This Way Comes") { ?>

            <li><?php echo $movies[4] ?></li>

        <?php } ?>

    </ul>


    <h4>Underrated...</h4> <!-- alternative -->
    <ul>

        <?php if (($movies[4]) == "Something Wicked This Way Comes") : ?>

            <li><?= $movies[4] ?></li>

        <?php endif ?>

    </ul>

    <!-- Same difference for if, while, for, foreach, switch -->



</body>
</html>