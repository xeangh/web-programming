<!DOCTYPE html>
<html lang= "en">
    <head>
        <meta charset= "UTF-8">
        <meta name= "viewport" content= "width=device-width, intitial-scale=1.0">
        <title> Dynamic Table </title>
        <h1> Xean's Online Shop </h1>
        <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
        $products = array(
            array("no."=> "1", "name"=>"Product A", "price"=> 10.50, "stock"=> 12),
            array("no."=> "2","name"=>"Product B", "price"=> 5.60, "stock"=> 7),
            array("no."=> "3","name"=>"Product C", "price"=> 7.00, "stock"=> 5),
            array("no."=> "4","name"=>"Product D", "price"=> 3.00, "stock"=> 4),
            array("no."=> "5","name"=>"Product E", "price"=> 4.00, "stock"=> 5),
            array("no."=> "6","name"=>"Product F", "price"=> 2.00, "stock"=> 3),
        );
        ?>
    <table border=1>
        <tr>
            <th> No. </th>
            <th> Product Name </th>
            <th> Price </th>
            <th> Stock </th>

        <?php
            foreach($products as $p){
        ?>
            <tr>
                <td> <?=$p["no."] ?> </td>
                <td> <?=$p["name"] ?> </td>
                <td> <?=$p["price"] ?> </td>
                <td> <?=$p["stock"] ?> </td>
            </tr>
        <?php
            }
        ?>

</table>
</body>
</html>