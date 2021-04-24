<html>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Nume</th>
                <th>Dinastie</th>
                <th>Material</th>
                <th>Stare</th>
                <th>Origine</th>
                <th>Dimensiune</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "db");
            $sql = "Select * from china where Id <= 7";
            $result = $conn->query($sql);
            if($result->num_rows>0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Nume"] . "</td><td>" . $row["Dinastie"] . "</td><td>" .
                        $row["Material"] . "</td><td>" . $row["Stare"] . "</td><td>" . $row["Origine"] . "</td><td>" . $row["Dimensiune"] . "</td><td>";
                }
            }
            else
            {
                echo "No Results!";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>
