<?php
try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_toets";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("DELETE FROM pizza WHERE id = :id");

    $stmt->bindParam(":id", $id);

    $id = $_GET["id"];

    $stmt->execute();

    if($stmt == true){
        echo "Data goed verwijderd";
        header("Refresh: 3; url=./index.php?message=goed");
    }
}catch(ErrorException $e){
        print("Error: " . $e->getMessage());
    }
