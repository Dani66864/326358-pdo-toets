<?php
    try{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pdo_toets";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("UPDATE pizza set bodemformaat = :bodemformaat, saus = :saus, 
        pizzatoppings= :pizzatoppings, kruiden = :kruiden WHERE id = :id");


        $stmt->bindParam(":bodemformaat", $bodemformaat);
        $stmt->bindParam("saus", $saus);
        $stmt->bindParam("pizzatoppings", $pizzatoppings);
        $stmt->bindParam(":kruiden", $kruiden);
        $stmt->bindParam(":id", $id);

        
        $id = $_POST["id"];
        $bodemformaat = $_POST["bodemformaat"];
            $saus = $_POST["saus"];
            $pizzatoppings = $_POST["Pizzatoppings"];
            $kruiden = $_POST["kruiden"];

            $stmt->execute();


            if($stmt == true){
                echo "Data goed gewijzegd";
                header("Refresh: 3; url=./index.php?message=goed");
            }

    }catch(ErrorException $e){
        print("Error: " . $e->getMessage());
    }
