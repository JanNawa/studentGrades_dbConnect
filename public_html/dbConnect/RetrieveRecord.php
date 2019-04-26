<?php

include "Connection.php";

$find = "SELECT * FROM StudentGrades";
$prFind = $connection -> prepare($find);
$prFind -> execute();

?>
<html>
    <head>
        <title>Show All Records</title>
        <link rel="stylesheet" href="../style/styleRecords.css"/>
    </head>
    <body>
        <h1>Assignment 5</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>Java 2</th>
                <th>Software Development</th>
                <th>Web Programming</th>
                <th>Linux</th>
                <th>User Interface Design</th>
            </tr>
            <?
            while ($result = $prFind->fetch()) {
                echo "<tr>";
                echo "<td>" . $result["StudentID"] . "</td>";
                echo "<td>" . $result["Java"] . "</td>";
                echo "<td>" . $result["Software"] . "</td>";
                echo "<td>" . $result["Web"] . "</td>";
                echo "<td>" . $result["Linux"] . "</td>";
                echo "<td>" . $result["UI"] . "</td>";
                echo "</tr>";
            }
            ?>           
        </table>
        <footer>
            <a href="../index.html"><button>Back</button></a>
        </footer>
    </body>
</html>