<?php
include('core/header.php')
?>
<div class="mb-2 mt-2">
    <a class='btn btn-danger' href="index.php?controller=products&action=index">Ver productos</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Valor</th>
            <th hidden>ID Producto</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data['sales'] as $sale) {
            echo '<tr>';
            echo '<td>' . $sale['id'] . '</td>';
            echo '<td>' . $sale['productName'] . '</td>';
            echo '<td>' . $sale['quantity'] . '</td>';
            echo '<td>' . $sale['value'] . '</td>';
            echo '<td hidden>' . $sale['product_id'] . '</tdhidden>';
        }
        ?>
    </tbody>
</table>
<?php
include('core/footer.php')
?>