<?php
class Model extends Connection{
    private function getAllProducts()
    {
        $sql = "SELECT * FROM Clientes";
        return $this->conn->query($sql);
    }

    public function showAllClients()
    {
        $result = $this->getAllProducts();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Cod_Clie'] . "</td><td>" . $row['Nom_Clie'] . "</td><td>" . $row['Ape_Clie1'] . "</td><td>" . $row['Ape_Clie2'] . "</td><td>" . $row['Tel_Clie'] . "</td><td>" . $row['Eml_Clie'] . "</td><td>" . $row['Dir_Clie'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }
}