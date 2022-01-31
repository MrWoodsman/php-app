<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM oferty";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='card'>";
            echo "<img src=" . $row["img"] . ">";
            echo "<h1>" . $row["nazwa"] . "</h1>";
            echo "<p>" . $row["punkty"] . " Punktów</p>";
        echo "</div>";
        // echo "id: " . $row["id"]. " - Name: " . $row["nazwa"]. " " . $row["punkty"]. $row["img"] . "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>