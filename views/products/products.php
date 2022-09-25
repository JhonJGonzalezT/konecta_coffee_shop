<?php
include('core/header.php')
?>
<div class="container p-4">
    <div class="mb-2 mt-2">
        <a class='btn btn-outline-primary' href="index.php?controller=products&action=vwAdd">
            <i class="fas fa-plus"></i>
            Adicionar Producto</a>
        <a class='btn btn-outline-primary' href="index.php?controller=sales&action=index">
            <i class="fas fa-eye"></i>
            Ver ventas</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Precio</th>
                <th>Peso (kg)</th>
                <th>Categoria</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($data["products"] as $data) {
                echo "<tr>";
                echo "<td>" . $data["id"] . "</td>";
                echo "<td>" . $data["productName"] . "</td>";
                echo "<td>" . $data["productRef"] . "</td>";
                echo "<td>" . $data["price"] . "</td>";
                echo "<td>" . $data["weight"] . "</td>";
                echo "<td>" . $data["category"] . "</td>";
                echo "<td>" . $data["stock"] . "</td>";
                echo "<td> <a title='Actualizar' class='btn btn-info' href='index.php?controller=products&action=vwUpdate&id=" . $data["id"] . "'><i class='fas fa-edit'></i></a>"
                    . "<a title='Eliminar' class='btn btn-warning' href='index.php?controller=products&action=delete&id=" . $data["id"] . "'><i class='fas fa-duotone fa-trash'></i></a>"
                    . "<a title='Registrar Venta' class='btn btn-success' href='index.php?controller=sales&action=vwSell&id=" . $data["id"] . "'><i class='fas fa-dollar-sign'></i></a>"
                    . "</td>";
            }
            ?>
        </tbody>
    </table>
    <?php
    include('core/footer.php')
    ?>