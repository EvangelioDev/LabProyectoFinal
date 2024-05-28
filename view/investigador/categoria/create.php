<?php include("../../../template/header.php") ?>
<?php include("../../../controller/Controller_categoria.php")?>
<?php
$control = new Controller_categoria();

if(isset($_GET["categoria"])){
    $categoria = $_GET["categoria"];
    $control->insert($categoria);
    echo ("<script>alert('Registrado correctamente');</script>");
}
?>

<div class="box-form">
    <div class="form-container">
            <form action="" method="get">
                <h2>REGISTRAR NUEVA CATEGORIA</h2>
                
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" required>
                
                <div class="box-btn">
                    <button type="submit">Registrar</button>
                    <a href="./index.php" class="btn-3">Volver</a>
                </div>
            </form>
    </div>
</div>

<?php include ("../../../template/footer.php")?>