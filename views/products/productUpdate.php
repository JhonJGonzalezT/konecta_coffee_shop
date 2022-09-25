<?php
include('core/header.php')
?>
<div class="mb-2 mt-2">
    <a class='btn btn-danger' href="index.php?controller=products&action=index">Atras</a>
</div>
<div class="card card-body mb-3">
    <form id="productUpdate" name="productUpdate" method="POST" action="index.php?controller=products&action=update">
        <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" /><br />
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productName" name="productName"
                placeholder="Nombre del producto." value="<?php echo $data['product']['productName']; ?>" required />
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productRef" name="productRef" placeholder="Nombre del producto."
                value="<?php echo $data['product']['productRef']; ?>" required />
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="price" name="price" placeholder="Precio del producto."
                value="<?php echo $data['product']['price']; ?>" required />
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="weight" name="weight" placeholder="Peso (kg) del producto."
                value="<?php echo $data['product']['weight']; ?>" required />
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="category" name="category" placeholder="Categoria del producto."
                value="<?php echo $data['product']['category']; ?>" required />
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="stock" name="stock" placeholder="Stock en bodega."
                value="<?php echo $data['product']['stock']; ?>" required />
        </div>

        <button class="btn btn-success btn-block" id="add" name="add"
            type="submit"><?php echo $data['title'] ?></button>

    </form>
</div>




<?php
include('core/footer.php')
?>