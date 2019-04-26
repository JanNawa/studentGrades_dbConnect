<?php

include "Connection.php";

$info = array($_POST["studentID"],
    $_POST["Java"],
    $_POST["Software"],
    $_POST["Web"],
    $_POST["Linux"],
    $_POST["UI"]);

$add = "INSERT INTO StudentGrades (StudentID, Java, Software, Web, Linux, UI) VALUES (?, ?, ?, ?, ?, ?)";
$prAdd = $connection -> prepare($add);
$prAdd -> execute($info);

header("Location: ../index.html");

?>