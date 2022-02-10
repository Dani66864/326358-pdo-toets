<?php
    if(isset($_POST["submit"])){        
        try{
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pdo_toets";

            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("INSERT INTO pizza (id, bodemformaat, saus, pizzatoppings, kruiden)
            VALUES (:id, :bodemformaat, :saus, :pizzatoppings, :kruiden)");

            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":bodemformaat", $bodemformaat);
            $stmt->bindParam("saus", $saus);
            $stmt->bindParam("pizzatoppings", $pizzatoppings);
            $stmt->bindParam(":kruiden", $kruiden);

            $id = null;
            $bodemformaat = $_POST["bodemformaat"];
            $saus = $_POST["saus"];
            $pizzatoppings = $_POST["Pizzatoppings"];
            $kruiden = $_POST["kruiden"];
            $stmt->execute();

            echo "Data geod weggestuurd!";
            header("Refresh: 3; url=./index.php?message=success");
        }catch(ErrorException $e){
            print("Error: " . $e->getMessage());
        }
    }
?>