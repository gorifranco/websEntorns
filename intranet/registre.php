<?php

    $connection = new Mysqli("localhost", "root", "DebianP1Gori", "Matricula", 3306);
    $connection->connect();
    $sql = "INSERT INTO Alumnat (nom, primer_llinatge, segon_llinatge, email, cicle, curs, grup) values(?,?,?,?,?,?,?);";

    $statement = $connection->prepare($sql);
    $var = (isset($_POST["segon_llinatge"])) ? $_POST["segon_llinatge"] : "";
    $statement->bind_param("sssssis", $_POST["nom"], $_POST["primer_llinatge"], $var, $_POST["email"], $_POST["cicle"], $_POST["curs"], $_POST["grup"]);

    $statement->execute();

    $statement->close();
    $connection->close();

    header("Location: exit.html");
    exit;

