<?php
class Model extends Connection{
    private function getAllClients()
    {
        $sql = "SELECT * FROM Clientes";
        return $this->conn->query($sql);
    }

    public function showAllClients()
    {
        $result = $this->getAllClients();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Cod_Clie'] . "</td><td>" . $row['Nom_Clie'] . "</td><td>" . $row['Ape_Clie1'] . "</td><td>" . $row['Ape_Clie2'] . "</td><td>" . $row['Tel_Clie'] . "</td><td>" . $row['Eml_Clie'] . "</td><td>" . $row['Dir_Clie'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

 private function getAllFarmacias()
    {
        $sql = "SELECT * FROM Farmacias";
        return $this->conn->query($sql);
    }

    public function showAllFarmacias()
    {
        $result = $this->getAllFarmacias();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Cod_Farm'] . "</td><td>" . $row['Nom_Farm'] . "</td><td>" . $row['Tel_Farm'] . "</td><td>" . $row['Eml_Farm'] . "</td><td>" . $row['Dir_Farm'] . "</td><td>" . $row['Ciu_Farm'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }
    private function getAllProducts()
    {
        $sql = "SELECT * FROM Productos";
        return $this->conn->query($sql);
    }
    public function showAllProducts()
    {
        $result = $this->getAllProducts();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Cod_Prod'] . "</td><td>" . $row['Nom_Prod'] . "</td><td>" . $row['Tip_Prod'] . "</td><td>" . $row['Pre_Prod'] . "</td><td>" . $row['Cod_Farm'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    private function getAllPedidos()
    {
        $sql = "SELECT * FROM Pedidos";
        return $this->conn->query($sql);
    }
    public function showAllPedidos()
    {
        $result = $this->getAllPedidos();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Cod_Ped'] . "</td><td>" . $row['Fech_Ped'] . "</td><td>" . $row['Est_Ped'] . "</td><td>" . $row['Cant_Ped'] . "</td><td>" . $row['Cod_Clie'] . "</td><td>" . $row['Cod_Farm'] . "</td><td>" . $row['Cod_Prod'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    private function getAllParacetamol()
    {
        $sql = "select Farmacia.nom_farm, clientes.nom_clie from Farmacia inner join pedidos on farmacia.cod_farm = pedidos.cod_farm inner join clientes on pedidos.cod_clie = clientes.cod_clie where farmacia.cod_farm in (select cod_farm from producto where cod_prod = 101)";
        return $this->conn->query($sql);
    }
    public function showAllParacetamol()
    {
        $result = $this->getAllParacetamol();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['nom_farm'] . "</td><td>" . $row['nom_clie'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

}