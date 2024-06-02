<?php include_once ("../../../template/header.php") ?>
<?php include_once("../../../controller/Controller_categoria.php") ?>
<?php include_once("../../../models/Categoria.php") ?>

<?php 

    $control = new Controller_categoria();

    if(isset($_GET["cod"]))
    {
        $categoria = new Categoria();
        $id = $_GET["cod"];
        $categoria->parseArray($control->loadCategoria($id));
    }

    if(isset($_POST["id_categoria"])){
        $categoria_list = $_POST;
        $control->update($categoria_list);
    }
?>


<div class="box-form">
    <div class="form-container">
        <form action="" method="post">
            <input type="hidden" name="id_categoria" value="<?= $categoria->id ?>">
            <h2>REGISTRAR NUEVA CATEGORIA</h2>
            
            <label for="nombre">Categoria:</label>
            <input type="text" id="nombre" name="nombre" required value="<?=$categoria->nombre?> ">
            <div class="box-btn">
                <button type="submit">Actualizar</button>
                <a href="./index.php" class="btn-3">Volver</a>
            </div>
            
        </form>
    </div>
</div>

<?php include ("../../../template/footer.php") ?>