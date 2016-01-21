<!DOCTYPE html>
    <html>
    <head>
        <meta content="text/html"; charset="utf-8" http-equiv="content-type">
        <title>Beer Saved</title>
    </head>
<body>
<?php
// store the form inputs in variables
$name = $_POST['name'];
$alcohol_content = $_POST['alcohol_content'];
$domestic = $_POST['domestic'];
$light = $_POST['light'];
$price = $_POST['price'];

// display the beer name
echo $name . '<br />';
echo $alcohol_content . '<br />';
echo $domestic . '<br />';
echo $light . '<br />';
echo $price . '<br />';

// connect to the data base
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200306175','gc200306175','pass-here');
// set up the sql command to save the data
$sql = "INSERT INTO beers (name, alcohol_content, domestic, light, price)
   VALUES (:name, :alcohol_content, :domestic, :light, :price)";

// create a command object
$cmd = $conn -> prepare($sql);

// put each input value into the proper field
$cmd -> bindParam(':name', $name, PDO::PARAM_STR);
$cmd -> bindParam(':alcohol_content', $alcohol_content, PDO::PARAM_INT);
$cmd -> bindParam(':domestic', $domestic, PDO::PARAM_BOOL);
$cmd -> bindParam(':light', $light, PDO::PARAM_BOOL);
$cmd -> bindParam(':price', $price, PDO::PARAM_INT);

// execute the save
$cmd -> execute();
// disconnect
$conn = null;

echo 'Beer Saved';
?>
</body>
</html>