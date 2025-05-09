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
        $sql = "SELECT Farmacias.nom_farm, Clientes.nom_clie FROM Farmacias inner join Pedidos on Farmacias.cod_farm = Pedidos.cod_farm inner join Clientes on Pedidos.cod_clie = Clientes.cod_clie where Farmacias.cod_farm in (select cod_farm from Productos where cod_prod = 101)";
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

    private function getAllPediinfo()
    {
        $sql = "SELECT Fech_ped, Est_ped, Clientes.nom_clie, nom_farm from Pedidos inner join Farmacias on Pedidos.cod_farm = Farmacias.cod_farm inner join Clientes on Pedidos.cod_clie = Clientes.cod_clie";
        return $this->conn->query($sql);
    }
    public function showAllPediinfo()
    {
        $result = $this->getAllPediinfo();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['Fech_ped'] . "</td><td>" . $row['Est_ped'] . "</td><td>" . $row['nom_clie'] . "</td><td>" . $row['nom_farm'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    private function getAllPrecio()
    {
        $sql = "SELECT nom_clie, tip_prod, SUM(pre_prod) AS Precio, cant_ped 
FROM Clientes 
INNER JOIN Pedidos ON Clientes.cod_clie = Pedidos.cod_clie 
INNER JOIN Productos ON Productos.cod_prod = Pedidos.cod_prod 
GROUP BY Clientes.cod_clie, nom_clie, tip_prod, cant_ped 
HAVING SUM(pre_prod) >= 10";
        return $this->conn->query($sql);
    }
    public function showAllPrecio()
    {
        $result = $this->getAllPrecio();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr><td>" . $row['nom_clie'] . "</td><td>" . $row['tip_prod'] . "</td><td>" . $row['Precio'] . "</td><td>" . $row['cant_ped'] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
    }

    private function obtenerNuevoCodigoCliente() {
        $sql = "SELECT MAX(Cod_Clie) AS max_cod FROM Clientes";
        return $this->conn->query($sql);
    }
    public function mostrarNuevoCodigoCliente()
    {
        $result = $this->obtenerNuevoCodigoCliente();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nuevo_codigo = $row["max_cod"] + 1;
                echo "Tu código de cliente es: " . $nuevo_codigo;        
            }
        } else {
            echo "0 results";
        }
    }

    public function insertarCliente($codlie, $nombre, $ape1, $ape2, $tel, $email, $dir) {
        $sql = "INSERT INTO Clientes (Cod_Clie, Nom_Clie, Ape_Clie1, Ape_Clie2, Tel_Clie, Eml_Clie, Dir_Clie) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$codlie, $nombre, $ape1, $ape2, $tel, $email, $dir]);
    }

    private function obtenerNuevoCodigoPedido() {
        $sql = "SELECT MAX(Cod_Ped) AS max_cod FROM Pedidos";
        return $this->conn->query($sql);
    }
    public function mostrarNuevoCodigoPedido()
    {
        $result = $this->obtenerNuevoCodigoPedido();
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nuevo_codigo = $row["max_cod"] + 1;
                echo "Tu código de pedido es: " . $nuevo_codigo;        
            }
        } else {
            echo "0 results";
        }
    }

    public function insertarPedido($codpe, $canted, $codlie, $codrm, $codrod) {
        $sql = "INSERT INTO Pedidos (Cod_Ped, Fech_Ped, Est_Ped, Cant_Ped, Cod_Clie, Cod_Farm, Cod_Prod) VALUES (?, NOW(), 'Pendiente', ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$codpe, $canted, $codlie, $codrm, $codrod]);
    }


}