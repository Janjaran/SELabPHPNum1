<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PASCUAL</title>
</head>
<body>
    <h1>Discriminant of a quadratic equation</h1>

    <form action="" method="POST">
        <p>A<input type="number" name="a" placeholder="Value of A here"></p>
        <p>B<input type="number" name="b" placeholder="Value of B here"></p>
        <p>C<input type="number" name="c" placeholder="Value of C here"></p>
        <p><input type="submit" value="Submit" name="submitButton"></p>
    </form>

    <?php
    if (isset($_POST['submitButton'])) {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
 
        $discriminant = $b ** 2 - 4 * $a * $c;

        echo $discriminant;
    }
    ?>

</body>
</html>