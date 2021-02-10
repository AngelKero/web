<?php 
if (isset($_COOKIE['font-size'])) {
    $tamaño = htmlspecialchars($_COOKIE['font-size']);
} else {
    $tamaño = '20px';
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quaerat, autem tenetur perspiciatis nihil quam eum pariatur quae eaque saepe voluptas repellat reiciendis labore delectus voluptatum, minus magnam eligendi ex.
        </p>
</body>
</html>