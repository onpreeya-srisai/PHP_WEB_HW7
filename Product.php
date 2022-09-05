<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onpreeya srisai 6230301067</title>
</head>
<body>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
th,td {
    border: 2px solid #dddddd;
    text-align: center;
    font-size: 40px;
    padding: 8px;
}

/* td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
} */

</style>

<?php
    //this is mycomment
    function hello($name){
        echo "Hello I am $name";
    }
    $name = "onpreeya";
    
    echo "<h2>";
    echo hello("onpreeya");
    echo "</h2>";

    $product = array(
        array(1,"Bottle",375,"https://i.ibb.co/Sn5QyBG/bottle.jpg"),
        array(2,"Cap",250,"https://i.ibb.co/k62VZQL/cap.jpg"),
        array(3,"Cat Carpet",1200,"https://i.ibb.co/JqsMvv8/capatPet.jpg"),
        array(4,"Dog long sleeved shirt",1350,"https://i.ibb.co/0hkD2fQ/clothD.jpg"),
        array(5,"Shí yíng zǐ Dolls",2500,"https://i.ibb.co/0CvBqH9/doll.jpg"),
        array(6,"Mask 520",179,"https://i.ibb.co/vPdHMSK/mask520.jpg"),
        array(7,"ring",350,"https://i.ibb.co/Mp800tL/ring.jpg"),
        array(8,"Sock Hope End Rose",275,"https://i.ibb.co/HhStf3q/sockHope.jpg"),
        array(9,"Bird Umbella",349,"https://i.ibb.co/QHBw27k/umbella.jpg"),
        array(10,"Yoga Mat",379,"https://i.ibb.co/NZnnwq1/yogaMat.jpg")
    );
    $countProduct = count($product);

    echo "<table>";
    echo "<tr>";
    echo "<th>";
    echo "No.";
    echo "</th>";
    echo "<th>";
    echo "Product";
    echo "</th>";
    echo "<th>";
    echo "Name";
    echo "</th>";
    echo "<th>";
    echo "Price";
    echo "</th>";
    echo "</tr>";

    for($i=0;$i<$countProduct;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);

        echo "<tr style= 'color:rgb($r,$g,$b)' >";

        echo "<td >";
        echo $product[$i][0];
        echo "</td>";

        echo "<td>";
        echo "<img src=";
        echo '"';
        echo $product[$i][3];
        echo '" width=300';
        echo "</td>";

        echo "<td >";
        echo $product[$i][1];
        echo "</td>";

        echo "<td>";
        echo $product[$i][2];
        echo "</td>";

        echo "</tr>";
        
        
        
    }
    
    echo "</table>";

    echo "</br>Hello $name";

?>

</body>
</html>
