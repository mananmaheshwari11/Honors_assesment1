<?php

$pdo=new PDO('mysql:host=127.0.0.1;dbname=form_infos','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo '<p style="font-size: 35px; font-style: italic; text-align: center;">Data collected from Registration Form</p>'."<br><br>";
?>
<html>
    <body name="fetch">
        <?php
        $data="SELECT * FROM info";
        $result=$pdo->query($data);
        echo '<link rel="stylesheet" href="style.css">';
        echo '<table border="3" style="border-collapse: collapse; padding:3px;  text-align: center; font-family: "Times New Roman", Times, serif;" align="center">';
        echo '<thead>';
        echo '<tr>';
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>E-mail</th>";
        echo "<th>Gender</th>";
        echo "<th>City</th>";
        echo "</tr>";
        echo "</thead>";
        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
             echo "<td border=#>".$row["id"]."</td>";
            echo "<td border=#>".$row["Name"]."</td>";
             echo "<td border=#>".$row["email"]."</td>";
            echo "<td border=#>".$row["gender"]."</td>";
            echo "<td border=#>".$row["city"]."</td>";
             echo "</tr>";
        }
        echo "</table>";
        echo '</body>';
        echo '</html>';
        ?>