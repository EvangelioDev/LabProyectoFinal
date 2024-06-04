<?php include_once ("../../template/header.php") ?>
<?php include_once("../../controller/Controller_investigador.php") ?>
<?php include_once("../../models/Investigador.php") ?>

<?php 

    $control = new Controller_investigador();
    $investigador = new Investigador();

    if(isset($_GET["cod"]))
    {
       
        $id = $_GET["cod"];
        $investigador->parseArray($control->loadInvestigador($id));
    }

    if(isset($_POST["id_categoria"])){
        $investigador_ob = $_POST;
/*         print_r($investigador_ob); exit;
 */        $control->update($investigador_ob);
    }
?>

<div class="box-form">
<div class="form-container">
        <form action="" method="post">
            <h2>REGISTRAR NUEVO INVESTIGADOR</h2>
            <div class="form-group">
                <div class="form-item">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required value="<?= $investigador->nombre ?>">
                </div>
                <div class="form-item">
                    <label for="codigo">Codigo:</label>
                    <input type="text" id="codigo" name="codigo" required value="<?= $investigador->codigo ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="form-item">
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" required value="<?= $investigador->telefono ?>">
                </div>
                <div class="form-item">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required value="<?= $investigador->email ?>">
                </div>
            </div>
            <input type="hidden" name="id_categoria" value="<?= $investigador->id_instituto ?>">
            <input type="hidden" name="id_instituto" value="<?= $investigador->id_categoria ?>">
            <input type="hidden" name="id_investigador" value="<?= $investigador->id ?>">
            
            <div class="box-btn">
                <button type="submit">Actualizar</button>
                <a href="./index.php" class="btn-3">Volver</a>
            </div>
        </form>
    </div>
</div>

<?php include ("../../template/footer.php") ?>