<?php
include('core/header.php')
?>
<div class="mb-2 mt-2">
    <a class='btn btn-danger' href="index.php?controller=products&action=index">Atras</a>
</div>
<div class="card card-body mb-3">
    <form id="newProduct" name="newProduct" method="POST" action="index.php?controller=sales&action=add">
        <div class="form-group mb-2">
            <input class="form-control" type="hidden" id="product_id" name="product_id"
                value="<?php echo $data['product']['id'] ?>" placeholder="Nombre del producto" required readonly>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="product" name="product"
                value="<?php echo $data['product']['productName'] . " - " . $data['product']['productRef'] ?>"
                placeholder="Nombre del producto" required readonly>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productPrice" name="productPrice"
                value="<?php echo $data['product']['price'] ?>" placeholder="Nombre del producto" required readonly>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productQuantity" name="productQuantity"
                placeholder="Cantidad vendida" required>
        </div>
        <div class="form-group mb-2" hidden>
            <input class="form-control" type="text" id="stock" name="stock" placeholder="stock"
                value="<?php echo $data['product']['stock'] ?>" required readonly>
        </div>
        <button class="btn btn-success btn-block" id="add" name="add"
            type="submit"><?php echo $data['title'] ?></button>
    </form>
</div>

<?php
include('core/footer.php')
?>