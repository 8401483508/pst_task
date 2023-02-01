<?php include "header.php"?>
    <h1 style="font-size:18px ;" >3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>
    <?php
    echo "My name is Prashant.";
    echo " BBCAP22A3";
    ?>
    <h1 style="font-size:18px ;">3.2 Write PHP code to display the following message.</h1>
    <?PHP
    echo "Hello World ! My name is \"PRASHANT\"";
    ?>
    <h1 style="font-size:18px ;">3.3 Current Date </h1>
    <?php
    echo date("d.m.y") ?>

    <h3> 3.4 variable in php </h3>
    <?php
    $title1 ="PHP is interesting";
    echo "<h1> " . $title1 . "</h1>";
    ?>

    <h3> 3.5 Table & Variable </h3>
    <?php
    $g1 =  5;
    $g2 =  4;
    $g3 =  5;
    echo "
    <table>
    <tr>
    <th> S.N </th><th> Name <th><th> Grade </th>
    </tr>
    <tr>
    <td> 1 </td><td> pekka </td><td> $g1 </td>
    </tr>
    <tr>
    <td> 2 </td><td> johanna </td><td> $g2 </td>
    </tr>
    <tr>
    <td> 3 </td><td> john </td><td> $g3 </td>
    </tr>
    </table>
    ";
    ?>
    <h3 style="color: darkblue; font-size: 18px;"> 4 screenshot of the development environment </h3>
    <img style="width: 700px; height: 400px;"src="2.png" alt="">



    <?php include "footer.php"?>

    