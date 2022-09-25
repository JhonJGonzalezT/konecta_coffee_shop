<?php
include('core/header.php')
?>


<div class="mb-2 mt-2">
    <a class='btn btn-danger' href="index.php?controller=products&action=index">Atras</a>
</div>
<div class="card card-body mb-3">
    <form id="newProduct" name="newProduct" method="POST" action="index.php?controller=products&action=add">
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productName" name="productName"
                placeholder="Nombre del producto" required>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="productRef" name="productRef"
                placeholder="Referencia del producto" required>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="price" name="price" placeholder="Precio del producto" required>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="weight" name="weight" placeholder="Peso (kg) del producto"
                required>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="category" name="category" placeholder="Categoria del producto"
                required>
        </div>
        <div class="form-group mb-2">
            <input class="form-control" type="text" id="stock" name="stock" placeholder="stock en bodega" required>
        </div>
        <button class="btn btn-success btn-block" id="add" name="add"
            type="submit"><?php echo $data['title'] ?></button>
    </form>
</div>

<?php
include('core/footer.php')
?>